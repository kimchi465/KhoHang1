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
use App\Nhanvien;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/sanpham', 'SanPhamController@index')->name('backend.sanpham.index');
Route::get('/admin/sanpham/create', 'SanPhamController@create')->name('backend.sanpham.create');
Route::get('/admin/danhsachsanpham/print', 'SanPhamController@print')->name('danhsachsanpham.print');
Route::get('/admin/danhsachsanpham/excel', 'SanPhamController@excel')->name('danhsachsanpham.excel');
Route::get('/admin/danhsachsanpham/pdf', 'SanPhamController@pdf')->name('danhsachsanpham.pdf');

Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');
Route::get('/gioi-thieu', 'Frontend\FrontendController@about')->name('frontend.about');
Route::get('/lien-he', 'Frontend\FrontendController@contact')->name('frontend.contact');
Route::post('/lien-he/goi-loi-nhan', 'Frontend\FrontendController@sendMailContactForm')->name('frontend.contact.sendMailContactForm');
Route::get('/san-pham', 'Frontend\FrontendController@product')->name('frontend.product');

// route Danh mục Sản phẩm
Route::resource('/admin/danhsachsanpham', 'SanPhamController');

Route::get('/admin/sanpham', 'SanPhamController@index')
        ->middleware('auth')
        ->name('backend.sanpham.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/capquyen', function(){
    // $arrPermissions = [];
    // auth()->user()->assignPermissions('quan_tri');
    $user = Nhanvien::find(2);
    $user->givePermissionTo('xem_san_pham');
    $user->givePermissionTo('xuatdulieu_excel_san_pham');
    $user->givePermissionTo('xuatdulieu_pdf_san_pham');
    $user->givePermissionTo('indulieu_san_pham');

    $user2 = Nhanvien::find(3);
    $user2->givePermissionTo('xem_san_pham');
    $user2->givePermissionTo('xuatdulieu_excel_san_pham');
    $user2->givePermissionTo('xuatdulieu_pdf_san_pham');
    $user2->givePermissionTo('indulieu_san_pham');

    $user3 = Nhanvien::find(4);
    $user3->givePermissionTo('xem_san_pham');
    $user3->givePermissionTo('xuatdulieu_excel_san_pham');
    $user3->givePermissionTo('xuatdulieu_pdf_san_pham');
    $user3->givePermissionTo('indulieu_san_pham');

    $user1 = Nhanvien::find(1);
    $user1->givePermissionTo('xem_san_pham');
    $user1->givePermissionTo('them_san_pham');
    $user1->givePermissionTo('sua_san_pham');
    $user1->givePermissionTo('xoa_san_pham');
    $user1->givePermissionTo('xuatdulieu_excel_san_pham');
    $user1->givePermissionTo('xuatdulieu_pdf_san_pham');
    $user1->givePermissionTo('indulieu_san_pham');

    $user4 = Nhanvien::find(100);
    $user4->givePermissionTo('xem_san_pham');
    $user4->givePermissionTo('them_san_pham');
    $user4->givePermissionTo('sua_san_pham');
    $user4->givePermissionTo('xoa_san_pham');
    $user4->givePermissionTo('xuatdulieu_excel_san_pham');
    $user4->givePermissionTo('xuatdulieu_pdf_san_pham');
    $user4->givePermissionTo('indulieu_san_pham');
    

    return 'cap quyen okey';
});
Route::post('/admin/activate/{nv_ma}', 'Backend\BackendController@activate')->name('activate');


