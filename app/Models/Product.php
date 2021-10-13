<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'namaproduk',
        'penjual',
        'kota',
        'kategori',
        'harga',
        'berat',
    ];
}
