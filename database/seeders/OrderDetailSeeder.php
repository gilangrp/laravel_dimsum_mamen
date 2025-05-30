<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailSeeder extends Seeder
{
    public function run(): void
    {
        OrderDetail::create([
            'id_pesanan' => 1,
            'id_menu' => 1,
            'jumlah' => 2,
            'harga_satuan' => 50000,
        ]);
    }
}
