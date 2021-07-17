<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\BarangMasukReport;

class ExportExcelMasukController extends Controller
{
    function excel()
    {
        return Excel::download(new BarangMasukReport, 'BarangMasuk.xlsx');
        
    }
}
