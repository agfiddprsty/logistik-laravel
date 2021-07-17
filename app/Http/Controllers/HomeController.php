<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataBarang;
use App\BarangMasuk;
use App\BarangKeluar;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barang = DataBarang::all();
        $barangkeluar = BarangKeluar::all()->sortByDesc('created_at')->take(4);
        $barangmasuk = BarangMasuk::all()->sortByDesc('created_at')->take(4);
        $atknow = DataBarang::where('kategori_brg', 'Alat Tulis Kantor')->sum('jmlh_brg');
        $totalatk = BarangMasuk::where('kategori_brg', 'Alat Tulis Kantor')->sum('jmlh_brg');
        if($atknow > 0 && $totalatk > 0 ) {
            $persenatk = $atknow / 1000 * 100;
        } else {
            $persenatk = 0;
        }
        $itnow = DataBarang::where('kategori_brg', 'IT')->sum('jmlh_brg');
        $totalit = BarangMasuk::where('kategori_brg', 'IT')->sum('jmlh_brg');
        if($itnow > 0 && $totalit > 0 ) {
            $persenit = $itnow / 1000 * 100;
        } else {
            $persenit = 0;
        }
        $eleknow = DataBarang::where('kategori_brg', 'Elektronik')->sum('jmlh_brg');
        $totalelek = BarangMasuk::where('kategori_brg', 'Elektronik')->sum('jmlh_brg');
        if($eleknow > 0 && $totalelek > 0 ) {
            $persenelek = $eleknow / 1000 * 100;
        } else {
            $persenelek = 0;
        }
        $lainnow = DataBarang::where('kategori_brg', 'Lain-lain')->sum('jmlh_brg');
        $totallain = BarangMasuk::where('kategori_brg', 'Lain-lain')->sum('jmlh_brg');
        if($lainnow > 0 && $totallain > 0 ) {
            $persenlain = $lainnow / 1000 * 100;
        } else {
            $persenlain = 0;
        }
        
        return view('dashboard', compact('barang', 'barangkeluar', 'barangmasuk', 'atknow', 'totalatk', 'persenatk', 'itnow', 'totalit', 'persenit', 'eleknow', 'totalelek', 'persenelek', 'lainnow', 'totallain', 'persenlain'));
    }
}
