<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataBarang;
use App\BarangMasuk;
use App\BarangKeluar;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = DataBarang::all()->sortBy('kode_brg');
        return view('master', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = DataBarang::find($id);
        $barangmasuk = BarangMasuk::where('kode_brg', $barang->kode_brg)->first();
        $barangkeluar = BarangKeluar::where('kode_brg', $barang->kode_brg)->first();
        if($barangkeluar == true) {
            $barangkeluar->delete();
        }
        if($barangmasuk == true) {
            $barangmasuk->delete();
        }
        $barang->delete();
        return redirect('/masterbarang');
    }
}
