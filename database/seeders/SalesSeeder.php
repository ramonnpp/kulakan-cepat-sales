<?php

namespace Database\Seeders;

use App\Models\Customer;
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
        // Sales::create([
        //     'name' => 'Ramon Putro Prakoso',
        //     'email' => 'ramon@gmail.com',
        //     'no_phone' => '08123456789',
        //     'password' => 'ramon',
        //     'target_sales' => 50000000,
        //     'wilayah' => 'Yogyakarta',
        //     'status' => 'Aktif',
        // ]);
        Customer::create([
            'name_store' => 'TOKO IPUL',
            'name_owner' => 'ipul',
            'email' => 'ipul@gmail.com',
            'no_phone' => '08123456789',
            'password' => 'ipul',
            'address' => 'Yogyakarta',
            'status' => 'INACTIVE',
            'id_sales' => 6,
        ]);
    }
}
