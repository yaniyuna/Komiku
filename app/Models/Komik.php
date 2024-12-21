<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    use HasFactory;

    public $primaryKey = 'id_komik';
    protected $fillable = [
        'judul', 'penulis', 'kategori', 'thn_terbit', 'sinopsis', 'harga', 'stok', 'feature_img'
    ];

    public function pesanans()
    {
        return $this->hasMany(Pesanan::class);
    }
}
