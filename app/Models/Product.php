<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_product',
        'harga',
        'stok',
        'kategori_id'
    ];

    // 🔥 Relasi: product milik 1 kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}