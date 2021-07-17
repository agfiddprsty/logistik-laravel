<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $fillable = [
        'kode_brg',
        'nama_brg',
        'kategori_brg',
        'jmlh_brg',
        'satuan',
        'nama_sup'
    ];

    protected $table = 'barang_masuks';
}
