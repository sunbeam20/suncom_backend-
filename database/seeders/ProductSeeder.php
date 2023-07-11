<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Shop;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $shop = Shop::create([
            'user_name' => 'seller',
            'name' => 'My Shop',
            'email' => 'seller@test.com',
            'password' => Hash::make('12345678'),
            'address' => '123 Main St',
            'city' => 'Cyberjaya',
            'state' => 'Selangor',
            'zip' => '63000',
        ]);
        $shop2 = Shop::create([
            'user_name' => 'seller2',
            'name' => 'My Shop2',
            'email' => 'seller2@test.com',
            'password' => Hash::make('12345678'),
            'address' => '234 Main St',
            'city' => 'Cyberjaya',
            'state' => 'Selangor',
            'zip' => '63000',
        ]);

        // Insert clothing products data
        $clothingProducts = [
            ['name' => 'T-Shirt', 'description' => 'Comfortable cotton t-shirt', 'price' => 19.99,'image' => 'tshirt.png', 'shop_id' => $shop2->id, 'category_id' => 2],
            ['name' => 'Jeans', 'description' => 'Stylish blue jeans', 'price' => 49.99, 'image' => 'jeans.png', 'shop_id' => $shop2->id, 'category_id' => 2],
            ['name' => 'Jacket', 'description' => 'Warm winter jacket', 'price' => 99.99, 'image' => 'jacket.png', 'shop_id' => $shop2->id, 'category_id' => 2],
            ['name' => 'Cap', 'description' => 'Cool baseball cap', 'price' => 14.99, 'image' => 'cap.png', 'shop_id' => $shop2->id, 'category_id' => 2],
            ['name' => 'Sweater', 'description' => 'Cozy wool sweater', 'price' => 29.99, 'image' => 'sweater.png', 'shop_id' => $shop2->id, 'category_id' => 2],
            ['name' => 'Hoodie', 'description' => 'Warm hooded sweatshirt', 'price' => 39.99, 'image' => 'hoodie.png', 'shop_id' => $shop2->id, 'category_id' => 2],
            ['name' => 'Polo Shirt', 'description' => 'Classic polo shirt', 'price' => 24.99, 'image' => 'poloshirt.png', 'shop_id' => $shop2->id, 'category_id' => 2],
            ['name' => 'Dress', 'description' => 'Elegant evening dress', 'price' => 79.99, 'image' => 'dress.png', 'shop_id' => $shop2->id, 'category_id' => 2],
            ['name' => 'Shorts', 'description' => 'Casual shorts', 'price' => 19.99, 'image' => 'shorts.png', 'shop_id' => $shop2->id, 'category_id' => 2],
            ['name' => 'Sweatpants', 'description' => 'Comfortable sweatpants', 'price' => 34.99, 'image' => 'sweatpants.png', 'shop_id' => $shop2->id, 'category_id' => 2],
        ];

        // Insert shoe products data
        $shoeProducts = [
            ['name' => 'Running Shoes', 'description' => 'Comfortable running shoes', 'price' => 69.99, 'image' => 'runningshoes.png', 'shop_id' => $shop->id, 'category_id' => 5],
            ['name' => 'Boots', 'description' => 'Waterproof boots', 'price' => 79.99, 'image' => 'boots.png', 'shop_id' => $shop->id, 'category_id' => 5],
            ['name' => 'Sneakers', 'description' => 'Casual sneakers', 'price' => 59.99, 'image' => 'sneakers.png', 'shop_id' => $shop->id, 'category_id' => 5],
            ['name' => 'Flip Flops', 'description' => 'Beach flip flops', 'price' => 9.99, 'image' => 'flipflops.png', 'shop_id' => $shop->id, 'category_id' => 5],
            ['name' => 'Dress Shoes', 'description' => 'Formal dress shoes', 'price' => 89.99, 'image' => 'dressshoes.png', 'shop_id' => $shop->id, 'category_id' => 5],
            ['name' => 'Sandals', 'description' => 'Stylish sandals', 'price' => 29.99, 'image' => 'sandals.png', 'shop_id' => $shop->id, 'category_id' => 5],
            ['name' => 'Loafers', 'description' => 'Classic leather loafers', 'price' => 59.99, 'image' => 'loafers.png', 'shop_id' => $shop->id, 'category_id' => 5],
            ['name' => 'High Heels', 'description' => 'Elegant high-heeled shoes', 'price' => 89.99, 'image' => 'highheels.png', 'shop_id' => $shop->id, 'category_id' => 5],
            ['name' => 'Sneaker Boots', 'description' => 'Stylish sneaker boots', 'price' => 69.99, 'image' => 'sneakerboots.png', 'shop_id' => $shop->id, 'category_id' => 5],
            ['name' => 'Espadrilles', 'description' => 'Lightweight espadrille shoes', 'price' => 39.99, 'image' => 'espadrilles.png', 'shop_id' => $shop->id, 'category_id' => 5],
        ];


        $products = array_merge($clothingProducts, $shoeProducts);

        foreach ($products as $product) {
            //$product['image'] = '/images/products/' . implode(',', $product['image']);

            $product['image'] = '/images/products/' . $product['image'];
            Product::create($product);
        }

        $counter = 0;
        $statuses = ['to_ship', 'to_recieve', 'completed', 'cancel', 'refund'];
        $paymentMethods = ['cod', 'bank', 'paypal'];

        foreach ($products as $product) {
            $counter++;

            // Calculate the index based on the counter
            $statusIndex = ($counter - 1) % count($statuses);
            $paymentMethodIndex = ($counter - 1) % count($paymentMethods);

            Order::create([
                'user_id' => $counter % 2 === 0 ? 1 : 2,
                'product_id' => $counter,
                'product_price' => $product['price'],
                'product_quantity' => 1,
                'status' => $statuses[$statusIndex],
                'payment_method' => $paymentMethods[$paymentMethodIndex],
            ]);
        }
    }
}
