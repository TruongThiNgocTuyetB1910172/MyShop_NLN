<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Models\Menu;
use GuzzleHttp\Psr7\Uri;

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
      });
});
Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);