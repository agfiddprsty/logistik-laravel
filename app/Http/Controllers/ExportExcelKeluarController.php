<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\BarangKeluarReport;

class ExportExcelKeluarController extends Controller
{
    function excel()
    {
        return Excel::download(new BarangKeluarReport, 'BarangKeluar.xlsx');
        
    }
}
