<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanans';
    public $primaryKey = 'id_pesanan';
    protected $fillable = [
        'id_komik','id_transaksi', 'kuantitas', 'subtotal'];

    public function komik()
    {
        return $this->belongsTo(Pesanan::class, 'id_komik', 'id_komik');
    }
    public function transaksi()
    {
        return $this->belongsTo(Pesanan::class, 'id_transaksi', 'id_transaksi');
    }

    
}
