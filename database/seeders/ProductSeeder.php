<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $shop = Shop::create([
            'name' => 'My Shop',
            'address' => '123 Main St'
        ]);

        // Insert clothing products data
        $clothingProducts = [
            ['name' => 'T-Shirt', 'description' => 'Comfortable cotton t-shirt', 'price' => 19.99, 'image' => 'tshirt.png', 'shop_id' => $shop->id],
            ['name' => 'Jeans', 'description' => 'Stylish blue jeans', 'price' => 49.99, 'image' => 'jeans.png', 'shop_id' => $shop->id],
            ['name' => 'Jacket', 'description' => 'Warm winter jacket', 'price' => 99.99, 'image' => 'jacket.png', 'shop_id' => $shop->id],
            ['name' => 'Cap', 'description' => 'Cool baseball cap', 'price' => 14.99, 'image' => 'cap.png', 'shop_id' => $shop->id],
            ['name' => 'Sweater', 'description' => 'Cozy wool sweater', 'price' => 29.99, 'image' => 'sweater.png', 'shop_id' => $shop->id],
            ['name' => 'Hoodie', 'description' => 'Warm hooded sweatshirt', 'price' => 39.99, 'image' => 'hoodie.png', 'shop_id' => $shop->id],
            ['name' => 'Polo Shirt', 'description' => 'Classic polo shirt', 'price' => 24.99, 'image' => 'poloshirt.png', 'shop_id' => $shop->id],
            ['name' => 'Dress', 'description' => 'Elegant evening dress', 'price' => 79.99, 'image' => 'dress.png', 'shop_id' => $shop->id],
            ['name' => 'Shorts', 'description' => 'Casual shorts', 'price' => 19.99, 'image' => 'shorts.png', 'shop_id' => $shop->id],
            ['name' => 'Sweatpants', 'description' => 'Comfortable sweatpants', 'price' => 34.99, 'image' => 'sweatpants.png', 'shop_id' => $shop->id],
        ];

        // Insert shoe products data
        $shoeProducts = [
            ['name' => 'Running Shoes', 'description' => 'Comfortable running shoes', 'price' => 69.99, 'image' => 'runningshoes.png', 'shop_id' => $shop->id],
            ['name' => 'Boots', 'description' => 'Waterproof boots', 'price' => 79.99, 'image' => 'boots.png', 'shop_id' => $shop->id],
            ['name' => 'Sneakers', 'description' => 'Casual sneakers', 'price' => 59.99, 'image' => 'sneakers.png', 'shop_id' => $shop->id],
            ['name' => 'Flip Flops', 'description' => 'Beach flip flops', 'price' => 9.99, 'image' => 'flipflops.png', 'shop_id' => $shop->id],
            ['name' => 'Dress Shoes', 'description' => 'Formal dress shoes', 'price' => 89.99, 'image' => 'dressshoes.png', 'shop_id' => $shop->id],
            ['name' => 'Sandals', 'description' => 'Stylish sandals', 'price' => 29.99, 'image' => 'sandals.png', 'shop_id' => $shop->id],
            ['name' => 'Loafers', 'description' => 'Classic leather loafers', 'price' => 59.99, 'image' => 'loafers.png', 'shop_id' => $shop->id],
            ['name' => 'High Heels', 'description' => 'Elegant high-heeled shoes', 'price' => 89.99, 'image' => 'highheels.png', 'shop_id' => $shop->id],
            ['name' => 'Sneaker Boots', 'description' => 'Stylish sneaker boots', 'price' => 69.99, 'image' => 'sneakerboots.png', 'shop_id' => $shop->id],
            ['name' => 'Espadrilles', 'description' => 'Lightweight espadrille shoes', 'price' => 39.99, 'image' => 'espadrilles.png', 'shop_id' => $shop->id],
        ];
        

        $products = array_merge($clothingProducts, $shoeProducts);

        foreach($products as $product) {

            $product['image'] = '/images/products/' . $product['image'];
            Product::create($product);
        }
    }
}
