<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use Carbon\Carbon;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        Payment::create([
            'id_pesanan' => 1, // Pastikan order ID 1 ada
            'metode_pembayaran' => 'Transfer Bank',
            'tanggal_pembayaran' => Carbon::now(),
            'status' => 'sukses',
        ]);
    }
}
