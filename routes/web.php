<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardcalendar', function () {
    return view('dcalendar');
});

Route::get('/dashboard', 'HomeController@index');

Route::get('/masterbarang', 'DataBarangController@index');
Route::get('/kodebarang/{id}', 'BarangKeluarController@loadData')->name('getDetails');

Route::group(["middleware"=>["auth"]], function(){
    Route::get('/dashboardcalendar', function () {
        return view('dcalendar');
    });
    
    Route::get('/barangmasuk', 'BarangMasukController@index');
    
    Route::get('/barangkeluar', 'BarangKeluarController@index');
    
    Route::get('/supplier', 'SupplierController@index');
    
    Route::get('/tambah-barang-masuk', 'BarangMasukController@create');
    
    Route::post('/tambah-barang-masuk', 'BarangMasukController@store');
    
    Route::get('/tambah-supplier', 'SupplierController@create');

    Route::post('/tambah-supplier', 'SupplierController@store');
    Route::post('/hapus-barang', 'BarangKeluarController@store');

    Route::get('/hapus-barang', 'BarangKeluarController@create');

    Route::get('/databarang/excel', 'ExportExcelController@excel');
    
    Route::get('/barangmasuk/excel', 'ExportExcelMasukController@excel');

    Route::get('/barangkeluar/excel', 'ExportExcelKeluarController@excel');

    Route::get('/supplier/excel', 'ExportExcelSupplierController@excel');

    Route::delete('/hapus-barang/{id}', 'DataBarangController@destroy');

});

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');