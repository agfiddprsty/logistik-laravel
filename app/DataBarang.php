<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    protected $fillable = [
        'kode_brg',
        'nama_brg',
        'kategori_brg',
        'jmlh_brg',
        'satuan',
        'nama_sup'
    ];

    protected $table = 'data_barangs';
}
