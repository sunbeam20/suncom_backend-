<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'variants' => 'required|array',
            'variants.*.stock' => 'required|integer|min:0',
            'variants.*.attributes' => 'required|array',
            'variants.*.attributes.*' => 'required|exists:attributes,id',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        foreach ($request->variants as $variantData) {
            $variant = Variant::create([
                'product_id' => $product->id,
                'stock' => $variantData['stock'],
            ]);

            $variant->attributes()->attach($variantData['attributes']);
        }

        return response()->json(['message' => 'Product created successfully'], 201);
    }

    // Get all products with variants and attributes
    public function index($view)
    {
        $products = Product::select('id', 'name' , 'slug' , 'image' , 'description', 'price' , 'brand')->paginate(14);

        return view($view, ['products'=>$products]);
    }

    // Get One Product details by ID
    public function show($id)
    {
        $product = Product::with('variants.attributes')->findOrFail($id);

        return view('product', ['product'=>$product]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return response()->json(['message' => 'Product updated successfully']);
    }
}
