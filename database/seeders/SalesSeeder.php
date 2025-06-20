<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sales;
use Illuminate\Support\Facades\Hash;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sales::create([
            'name' => 'Admin Sales',
            'email' => 'sales@gmail.com',
            'no_phone' => '081234567890',
            'password' => 'sales',
            'target_sales' => 50000000,
            'wilayah' => 'Jakarta',
            'status' => 'Aktif',
        ]);
    }
}
