<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Services\CartService;
use App\Http\Services\Cart\CartService;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;
    public function __construct(CartService $cart)
    {
     $this->cart = $cart;   
    }
    public function index(){
        return view('admin.cart.customer',[
            'title'=> 'Danh sách đơn hàng',
            'customers' =>$this->cart->getCustomer()
        ]);
    }

    public function destroy(Request $request):JsonResponse
    {
        $result = $this->cart->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công khách hàng'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
    public function show(Customer $customer)
    {
        $carts = $this->cart->getProductForCart($customer);

        return view('admin.cart.detail', [
            'title' => 'Chi Tiết Đơn Hàng: ' . $customer->name,
            'customer' => $customer,
            'carts' => $carts
        ]);
    }
}