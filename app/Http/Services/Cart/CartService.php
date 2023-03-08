<?php
namespace App\Http\Services\Cart;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Arr;

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
        return Product::select('id', 'name', 'price',  'thumb')
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
}