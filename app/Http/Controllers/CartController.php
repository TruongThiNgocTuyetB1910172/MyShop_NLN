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

    public function update(Request $request){
        $this->cartService->update($request);
        return redirect('/carts');
    }
    public function remove($id=0, Request $request){
        $this->cartService->remove($id, $request);
        return redirect('/carts');
    }

    // public function checkout(){
    //     return view('carts.checkout');

        
    // }
   
    // public function checkout( Request $request){
    //     $products= $this->cartService->getProduct($request);
    //     return view('carts.checkout',[
    //         'title' =>'dat hang',
    //         'products' =>$products,
    //         'carts' => $request->session()->get('carts'),
    //     ]);
    // }
     public function addCart(Request $request){
        $result = $this->cartService->addCart($request);
        return redirect()->back();
    }
}