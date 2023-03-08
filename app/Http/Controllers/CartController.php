<?php

namespace App\Http\Controllers;

use App\Http\Services\Cart\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
        
    }
}