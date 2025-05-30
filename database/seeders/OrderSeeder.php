<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        Order::create([
            'id_pengguna' => 1, // pastikan ID pengguna 1 ada
            'total_harga' => 150000,
            'status' => 'pending',
        ]);
    }
}
