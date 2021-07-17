<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\DataBarangReport;

class ExportExcelController extends Controller
{
    function excel()
    {
        return Excel::download(new DataBarangReport, 'DataBarang.xlsx');
        
    }
}
