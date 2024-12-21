<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_user', 'total_harga'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_pesanan', 'id_pesanan');
    }
}
