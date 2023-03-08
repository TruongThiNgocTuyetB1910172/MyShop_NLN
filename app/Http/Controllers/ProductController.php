<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService;
use App\Models\Product;

class ProductController extends Controller
{

    protected $productService;
    public function __construct(ProductService $productsService)
    {
        $this->productService=$productsService;
    }
    public function index($id = '' ){
        $product = $this->productService->show($id);
        return view('product.detail',[
            'title' => $product->name,
            'products' => $product
        ]);
    }

    public function getSearch(Request $request)
    {

        $products = Product::Where('name', 'LIKE', '%' . $request->keyword . '%')
            ->orwhere('price', 'LIKE', '%' . $request->keyword . '%')

            ->get();
        return view('product.search' ,compact('products'));
    }

 
    

    

    
}