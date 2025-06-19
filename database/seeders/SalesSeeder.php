<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sales; // Import the Sales model
use Illuminate\Support\Facades\Hash; // For hashing passwords

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sales::create([
            'name' => 'Budi Sales',
            'email' => 'budi@sales.com',
            'no_phone' => '081234567890',
            'password' => Hash::make('password123'), // Use a strong password in production
            'target_sales' => 10000000.00,
            'wilayah' => 'Jakarta Barat',
            'status' => 'Aktif',
            'created' => now(),
            'updated' => now(),
        ]);

        Sales::create([
            'name' => 'Siti Sales',
            'email' => 'siti@sales.com',
            'no_phone' => '087654321098',
            'password' => Hash::make('password123'), // Use a strong password in production
            'target_sales' => 15000000.00,
            'wilayah' => 'Jakarta Timur',
            'status' => 'Aktif',
            'created' => now(),
            'updated' => now(),
        ]);

        // Add more sales records as needed
    }
}
