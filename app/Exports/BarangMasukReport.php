<?php
namespace App\Exports;
use App\BarangMasuk;

use Maatwebsite\Excel\Concerns\FromCollection;

class BarangMasukReport implements FromCollection
{
    public function collection()
    {
        return BarangMasuk::all();
    }
}