<?php

namespace App\Http\Controllers;

use App\Http\Services\Cart\CartService;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
        
    }
    public function index( Request $request){
         $result = $this->cartService->create($request);

         if($result === false){
            return redirect()->back();
         }
         return redirect('/carts');
       
    }
    public function show( Request $request){
        $products= $this->cartService->getProduct($request);
        return view('carts.list',[
            'title' =>'Danh sach gio hang',
            'products' =>$products,
            'carts' => $request->session()->get('carts'),
        ]);
    }
}