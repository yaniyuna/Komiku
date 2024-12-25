<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    use HasFactory;
    protected $table = 'komiks'; // Nama tabel di database
    // public $timestamps = true;
    public $primaryKey = 'id_komik';
    protected $fillable = [
        'judul', 'penulis', 'kategori', 'thn_terbit', 'sinopsis', 'harga', 'stok', 'feature_img'
    ];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_komik', 'id_komik');
    }
}
