<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //

    protected $table='transaksis';
    protected $fillable=['nama','harga','deskripsi','id_bookers','jumlah','status','id_produk'];
}
