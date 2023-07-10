<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $products =  Product::all();
        $categories =  Category::all();
        $carts = Cart::all();
        View::share('products', $products);//
        View::share('categories', $categories);
        View::share('carts', $carts);
    }
}
