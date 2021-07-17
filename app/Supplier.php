<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'nama_sup',
        'no_sup',
        'alamat_sup'
    ];

    protected $table = 'suppliers';
}
