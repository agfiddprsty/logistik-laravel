<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangKeluar;
use App\DataBarang;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = BarangKeluar::all()->sortByDesc('created_at');
        return view('barangkeluar', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode_brg = DataBarang::all();
        return view('hapusbarang', compact('kode_brg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_brg'=>'required',
            'nama_brg'=> 'required',
            'kategori_brg' => 'required',
            'jmlh_brg' => 'required|integer',
            'satuan' => 'required',
            'nama_sup' => 'required'
          ]);
        $barangkeluar = new BarangKeluar([
            'kode_brg' => $request->get('kode_brg'),
            'nama_brg'=> $request->get('nama_brg'),
            'kategori_brg'=> $request->get('kategori_brg'),
            'jmlh_brg'=> $request->get('jmlh_brg'),
            'satuan' => $request->get('satuan'),
            'nama_sup' => $request->get('nama_sup')
        ]);
        $barangkeluar->save();
        $barang = DataBarang::where('kode_brg', $request->get('kode_brg'))->first();
        $barang->jmlh_brg = $barang->jmlh_brg - $request->get('jmlh_brg');
        $barang->save();
        return redirect('/barangkeluar');
    }

    public function loadData(Request $request, $id)
    {
    	// if ($request->has('q')) {
    	// 	$cari = $request->q;
    	// 	$data = DataBarang::where('kode_brg', 'LIKE', '%$cari%')->get();
    	// 	return response()->json($data);
    	// }
        $data = DataBarang::where('kode_brg',$id)->first();
        return response()->json($data);
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
        //
    }
}
