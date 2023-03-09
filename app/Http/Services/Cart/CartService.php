<?php
namespace App\Http\Services\Cart;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CartService{
    public function create($request){
        $qly = $request->input('product-quanity');
        $product_id= $request->input('product_id');
        if($qly <=0 || $product_id <=0){
            $request->session()->flash('error', 'So luong hoac san pham ko chinh xac');
            return false;
        }
        $carts = $request->session()->get('carts');
        if (is_null($carts)) {
           $request->session()->put('carts', [
                $product_id => $qly,
           ]);
           return true ;
        }
        $exists = Arr::exists($carts, $product_id);
        if ($exists) {
            $carts[$product_id] = $carts[$product_id] + $qly;
           $request->session()->put('carts', $carts);
           
            return true;
        }
        $carts[$product_id] = $qly;
        $request->session()->put('carts', $carts);

        return true;

    }
    public function getProduct($request)
    {
        $carts = $request->session()->get('carts');
        if (is_null($carts)) return [];

        $productId = array_keys($carts);
        return Product::select('id', 'name', 'price','price_sale' , 'thumb')
            ->where('active', 1)
            ->whereIn('id', $productId)
            ->get();
    }
    public function update($request){
        $request->session()->put('carts', $request->input('product-quanity'));
        return true;
    }
    public function remove($id, $request)
    {
        $carts = $request->session()->get('carts');;
       
        unset($carts[$id]);

        $request->session()->put('carts', $carts);
        return true;
    }

    public function addCart($request)
    {
    try {
        DB::beginTransaction();

        $carts = $request->session()->get('carts');

        if (is_null($carts))
            return false;

        $customer = Customer::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'content' => $request->input('content')
        ]);

        $this->infoProductCart($carts, $customer->id);

        DB::commit();
        $request->session()->flash('success', 'Đặt Hàng Thành Công');

         #Queue
        // SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(2));

        $request->session()->forget('carts');
    } catch (\Exception $err) {
        DB::rollBack();
        
        $request->session()->flash('error', ' Lỗi Vui lòng thử lại sau');
        return false;
    }

    return true;
}

protected function infoProductCart($carts, $customer_id)
{
    $productId = array_keys($carts);
    $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb')
        ->where('active', 1)
        ->whereIn('id', $productId)
        ->get();

    $data = [];
    foreach ($products as $product) {
        $data[] = [
            'customer_id' => $customer_id,
            'product_id' => $product->id,
            'qty'   => $carts[$product->id],
            'price' => $product->price_sale != 0 ? $product->price_sale : $product->price
        ];
    }

    return Cart::insert($data);
}
    public function getCustomer(){
        return Customer::orderByDesc('id')->paginate(5);
}

public function delete($request)
{
    $customer = Customer::where('id', $request->input('id'))->first();
    if ($customer) {
        $customer->delete();
        return true;
    }

    return false;
}
} 