<?php

use App\Http\Controllers\Admin\CartController as AdminCartController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\SilderController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController as ControllersMainController;
use App\Http\Controllers\MenuController as ControllersMenuController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Models\Menu;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});
Route::middleware(['auth'])->group(function () {
    route::prefix('admin')->group(function(){
        
        route::get('main',[MainController::class,'index']);
        route::get('/',[MainController::class,'index'])->name('admin');
        route::prefix('menus')->group(function(){
            route::get('add',[MenuController::class,'create']);
            route::post('add',[MenuController::class,'store']);
            route::get('list',[MenuController::class,'index']);
            route::get('edit/{menu}',[MenuController::class,'show']);
            route::post('edit/{menu}',[MenuController::class,'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });
        route::prefix('products')->group(function(){
            route::get('add',[ProductController::class,'create']);
            route::post('add',[ProductController::class,'store']);
            route::get('list',[ProductController::class,'index']);
            route::get('edit/{product}',[ProductController::class,'show']);
            route::post('edit/{product}',[ProductController::class,'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);
        });
        route::prefix('sliders')->group(function(){
            route::get('add',[SilderController::class,'create']);
            route::post('add',[SilderController::class,'store']);
            route::get('list',[SilderController::class,'index']);
            route::get('edit/{slider}',[SilderController::class,'show']);
            route::post('edit/{slider}',[SilderController::class,'update']);
            Route::DELETE('destroy', [SilderController::class, 'destroy']);
        });
        #upload
        Route::post('upload/services', [UploadController::class, 'store']);
        #cart
        route::get('customer',[AdminCartController::class,'index']);
        Route::DELETE('destroy', [AdminCartController::class, 'destroy']);
    });
    
       
      
});
Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);
//Client

Route::get('/',[ControllersMainController::class,'index']);
Route::get('show_product',[ControllersMainController::class,'show']);
Route::get('product-detail/{id}', [ControllersProductController::class, 'index']);
Route::post('add-cart', [CartController::class, 'index']);
route::get('carts', [CartController::class, 'show']);
route::post('update-cart', [CartController::class, 'update']);
route::get('carts/delete/{id}' ,[CartController::class,'remove']);
// route::post('checkout', [CartController::class,'checkout']);
route::post('checkout-add',[CartController::class,'addCart']);



Route::get('/search', [ControllersProductController::class, 'getSearch'])
;