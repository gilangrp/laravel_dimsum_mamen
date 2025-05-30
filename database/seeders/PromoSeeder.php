<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promo;
 
class PromoSeeder extends Seeder
{
    public function run(): void
    {
        Promo::create([
            'nama_promo' => 'Diskon Ramadhan',
            'deskripsi' => 'Diskon spesial bulan Ramadhan',
            'diskon' => 25.00,
            'tanggal_mulai' => '2025-03-01',
            'tanggal_akhir' => '2025-04-30',
        ]);

        Promo::create([
            'nama_promo' => 'Diskon Akhir Tahun',
            'deskripsi' => 'Promo akhir tahun untuk semua produk',
            'diskon' => 15.50,
            'tanggal_mulai' => '2025-12-01',
            'tanggal_akhir' => '2025-12-31',
        ]);
    }
}
