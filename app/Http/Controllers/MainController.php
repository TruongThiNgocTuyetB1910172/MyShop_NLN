<?php

namespace App\Http\Controllers;

use App\Http\Services\Product\ProductService;
use App\Http\Services\Slider\SliderService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $product, $slider;
    public function __construct(ProductService $product, SliderService $slider)
    {
        $this->product =$product;
        $this->slider = $slider;
    }
    public function index(){
        return view('home',[
            'products'=>$this->product->get(),
        ]);
    }

    public function show(){
        return view('product.list',[
           
            'products'=>$this->product->get(),
        ]);
    }
    public function contact(){
        return view('contact');
    }
    


    
    
}