<?php
namespace App\Exports;
use App\BarangKeluar;

use Maatwebsite\Excel\Concerns\FromCollection;

class BarangKeluarReport implements FromCollection
{
    public function collection()
    {
        return BarangKeluar::all();
    }
}