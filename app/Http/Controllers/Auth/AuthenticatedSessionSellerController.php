<?php

namespace App\Http\Controllers\Auth;

use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionSellerController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('seller')->attempt($credentials)) {
            // Seller login successful, redirect to seller dashboard
            $sellerId = Auth::guard('seller')->user()->id;
            $orders = Order::join('products', 'orders.product_id', '=', 'products.id')
                ->where('products.shop_id', $sellerId)
                ->get();
            $products = Product::where('shop_id', $sellerId)->get();
            return view('sellerHome', ['orders' => $orders, 'products' => $products]);
            //return $orders;
        }
        return back();
    }
}
