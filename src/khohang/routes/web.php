<?php

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
Route::get('/admin/sanpham', 'SanPhamController@index')->name('backend.sanpham.index');
Route::get('/admin/sanpham/create', 'SanPhamController@create')->name('backend.sanpham.create');
Route::get('/admin/danhsachsanpham/print', 'SanPhamController@print')->name('danhsachsanpham.print');
Route::get('/admin/danhsachsanpham/excel', 'SanPhamController@excel')->name('danhsachsanpham.excel');
Route::get('/admin/danhsachsanpham/pdf', 'SanPhamController@pdf')->name('danhsachsanpham.pdf');
// route Danh mục Sản phẩm
Route::resource('/admin/danhsachsanpham', 'SanPhamController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/admin/activate/{nv_ma}', 'Backend\BackendController@activate')->name('activate');
