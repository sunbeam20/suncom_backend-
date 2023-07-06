<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function addProduct(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;

        $productImage = $request->images;

        // $productImage->move('new/location', $productImage->getClientOriginalName());

        // $path = $productImage->storeAs('images/products', $productImage->getClientOriginalName(), 'public');
        // $path = Storage::path($request->images);

        // $temp = '/images/products/'.$request->images;
        // Storage::copy($path, $temp);
        // if (! Storage::copy($path, $temp)){
        //     return 'Error';
        // }
        // $data =[
        //     'current path' => $path,
        //     'modified path' => $temp,
        // ];
        // $imagePath = $request->images->storeAs('/images/products/');
        // $product->image = Storage::url($imagePath);
        // $product->image = $request->images;


        $product->price = $request->price;
        $product->description = $request->description;
        $product->shop_id = "1";
        // $product->save();
        return $productImage;
    }
    // Get all products with variants and attributes
    public function index()
    {
        $products = Product::select('id', 'name', 'slug', 'image', 'description', 'price', 'brand')->paginate(14);

        return view('home', ['products' => $products]);
    }

    // Get One Product details by ID
    public function show($id)
    {
        $product = Product::with('variants.attributes')->findOrFail($id);

        return view('product', ['product' => $product]);
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
