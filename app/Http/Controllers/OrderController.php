<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function checkout($productId)
    {
        // Logic to display a form for creating a new order
        $product = Product::findOrFail($productId);
        return view('checkout', ['product' => $product]);
    }
    public function index()
    {
        // Logic to fetch and display a list of orders
        $orders = Order::all();

        // Additional logic or view
    }

    public function show($id)
    {
        // Logic to fetch and display a single order based on the provided $id
        $order = Order::findOrFail($id);

        // Additional logic or view
    }
    public function showOrders(Request $request)
    {
        // Logic to fetch and display a single order based on the provided $id
        $sellerId = $request->seller_id;
        $orders = Order::join('products', 'orders.product_id', '=', 'products.id')
        ->where('products.shop_id', $sellerId)
        ->get();
        $products = Product::where('shop_id', $sellerId)->get();
        return view('sellerHome', ['orders' => $orders, 'products' => $products]);
        // Additional logic or view
    }

    public function create(Request $request)
    {
        if (auth()->guest()) {
            return redirect()->back()->with('message', 'Please log in to Checkout product.');
        }
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->product_price = $request->product_price;
        $order->product_quantity = $request->product_quantity;
        $order->payment_method = $request->payment_method;
        $order->save();
        return redirect('/')->with('message', 'Order Placed Success!');
        // Logic to display a form for creating a new order
    }

    public function store(Request $request)
    {
        // Logic to store a new order based on the data submitted through $request
        $validatedData = $request->validate([
            'status' => 'required',
            'payment_method' => 'required',
            'user_id' => 'required',
        ]);

        $order = Order::create($validatedData);

        // Additional logic or redirect to appropriate page
    }

    public function edit($id)
    {
        // Logic to display a form for editing an existing order based on the provided $id
        $order = Order::findOrFail($id);

        // Additional logic or view
    }

    public function update(Request $request, $id)
    {
        // Logic to update an existing order based on the data submitted through $request and the provided $id
        $order = Order::findOrFail($id);

        $validatedData = $request->validate([
            'status' => 'required',
            'payment_method' => 'required',
            'user_id' => 'required',
        ]);

        $order->update($validatedData);

        // Additional logic or redirect to appropriate page
    }

    public function destroy($id)
    {
        // Logic to delete an existing order based on the provided $id
        $order = Order::findOrFail($id);
        $order->delete();

        // Additional logic or redirect to appropriate page
    } //
}
