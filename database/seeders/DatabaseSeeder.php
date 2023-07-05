<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email' => 'test@test.com',
            'name' => 'John Doe',
            'password' => Hash::make('12345678'),
        ]);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(VariantsSeeder::class);
    }
}
