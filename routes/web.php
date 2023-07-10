<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("home");
});
Route::get('/Results', function () {
    return view("results");
});
// Route::get('/{view}', [ProductController::class, 'index']);
Route::get('/Login', function () {
    return view("login");
});
Route::get('/Signup', function () {
    return view("signup");
});

Route::get('/products', [ProductController::class, 'index']); //show all product
Route::get('/Product/{id}', [ProductController::class, 'show']); //show one prodct details

Route::post('/cart', [CartController::class, 'addCart']); //add product to cart
Route::post('/CartPage', [CartController::class, 'show']); //view cart with user id {post}

Route::get('Product/checkout/{id}', [OrderController::class, 'checkout']); //show one prodct checkout
Route::post('neworder', [OrderController::class, 'create']); 


Route::get('/customerProfile', function () {
    return view("customerProfile");
});
Route::get('/SellerLogin', function () {
    return view("sellerLogin");
});
Route::get('/SellerSignup', function () {
    return view("sellerSignup");
});

Route::post('/SellerHome', [OrderController::class, 'showOrders']);

Route::post('/products', [ProductController::class, 'addProduct']);

require __DIR__ . '/auth.php';
