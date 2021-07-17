<?php
namespace App\Exports;
use App\DataBarang;

use Maatwebsite\Excel\Concerns\FromCollection;

class DataBarangReport implements FromCollection
{
    public function collection()
    {
        return DataBarang::all();
    }
}