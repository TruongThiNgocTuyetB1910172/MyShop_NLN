<?php
 
namespace App\Providers;

use App\View\Composers\MenuComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
 
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
       
    }
 
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
     view()->composer('product.list', MenuComposer::class );
   
    }
}