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
            'gender' => 'Male',
            'address' => '123 Main St',
            'city' => 'Cyberjaya',
            'state' => 'Selangor',
            'zip' => '63000',
        ]);
        User::create([
            'email' => 'test2@test.com',
            'name' => 'Tom Cruise',
            'password' => Hash::make('12345678'),
            'gender' => 'Male',
            'address' => '234 Main St',
            'city' => 'Cyberjaya',
            'state' => 'Selangor',
            'zip' => '63000',
        ]);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(VariantsSeeder::class);
    }
}
