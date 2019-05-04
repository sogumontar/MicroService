<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
 	protected $table='transaksis';
 	protected $fillable=['id_produk','id_akun','stok'];
}
