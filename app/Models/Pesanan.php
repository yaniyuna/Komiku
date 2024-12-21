<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    public $primaryKey = 'id_pesanan';
    protected $fillable = [
        'id_transaksi', 'id_komik', 'kuantitas', 'subtotal'];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id_transaksi');
    }

    public function komik()
    {
        return $this->belongsTo(Komik::class, 'id_komik', 'id_komik');
    }
}
