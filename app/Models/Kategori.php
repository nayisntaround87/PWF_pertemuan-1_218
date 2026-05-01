<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kategori'
    ];

    // Relasi: 1 kategori punya banyak product
    public function products()
    {
        return $this->hasMany(Product::class, 'kategori_id');
    }
}