<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pengguna', 'tanggal_pemesanan', 'total_harga', 'status'
    ];

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'id_pesanan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
}
