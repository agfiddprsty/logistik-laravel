<?php
namespace App\Exports;
use App\Supplier;

use Maatwebsite\Excel\Concerns\FromCollection;

class SupplierReport implements FromCollection
{
    public function collection()
    {
        return Supplier::all();
    }
}