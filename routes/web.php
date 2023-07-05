<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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


Route::get('/{view}', [ProductController::class, 'index']);
Route::get('/Product/{id}', [ProductController::class, 'show']);
Route::get('/Login', function () {
    return view("login");
});
Route::get('/Signup', function () {
    return view("signup");
});
Route::get('/CartPage', function () {
    return view("cartPage");
});
Route::get('/customerProfile', function () {
    return view("customerProfile");
});
Route::get('/SellerLogin', function () {
    return view("sellerLogin");
});
Route::get('/SellerSignup', function () {
    return view("sellerSignup");
});
Route::get('/SellerHome', function () {
    $categories = Category::all();
    return view("sellerHome", ['categories' => $categories]);
});


require __DIR__.'/auth.php';
