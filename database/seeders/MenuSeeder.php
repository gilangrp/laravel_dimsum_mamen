<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        Menu::create([
            'nama_menu' => 'Nasi Goreng',
            'deskripsi' => 'Nasi goreng dengan telur dan ayam.',
            'harga' => 15000.00,
            'gambar' => 'nasigoreng.jpg',
        ]);

        Menu::create([
            'nama_menu' => 'Mie Ayam',
            'deskripsi' => 'Mie ayam dengan pangsit dan bakso.',
            'harga' => 12000.00,
            'gambar' => 'mieayam.jpg',
        ]);

        Menu::create([
            'nama_menu' => 'Es Teh Manis',
            'deskripsi' => 'Minuman segar es teh manis.',
            'harga' => 5000.00,
            'gambar' => 'estehmanis.jpg',
        ]);
    }
}
