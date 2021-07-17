<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\SupplierReport;

class ExportExcelSupplierController extends Controller
{
    function excel()
    {
        return Excel::download(new SupplierReport, 'Supplier.xlsx');
        
    }
}
