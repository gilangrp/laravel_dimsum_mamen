<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pesanan',
        'metode_pembayaran',
        'tanggal_pembayaran',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id_pesanan');
    }
}
