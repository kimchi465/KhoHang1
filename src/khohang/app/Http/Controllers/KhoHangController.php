<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SanPham;
use App\Loai;
use App\Khohang;
use App\Nhanvien;
use App\Hinhanh;
use App\Nhapkho;
use App\Chitietnhapkho;
use App\Xuatkho;
use App\Chitietxuatkho;
use Session;
use Storage;
use App\Exports\SanPhamExport;
use Maatwebsite\Excel\Facades\Excel as Excel;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class KhoHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Sử dụng Eloquent Model để truy vấn dữ liệu
    $ds_kho = Khohang::all(); // SELECT * FROM khohang
    // Đường dẫn đến view được quy định như sau: <FolderName>.<ViewName>
    // Mặc định đường dẫn gốc của method view() là thư mục `resources/views`
    // Hiển thị view `backend.sanpham.kho`
    return view('backend.khohang.index')
        // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachkho`
        ->with('danhsachkho', $ds_kho);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $ds_kho2 = Khohang::all();
         
         return view('backend.khohang.create')
             // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachloai`
             ->with('danhsachkho2', $ds_kho2);
             //->with('danhsachkho', $ds_kho);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $k = new Khohang();
        $k->kho_ten = $request->kho_ten;
        $k->kho_lienHe = $request->kho_lienHe;
        $k->kho_diaChi = $request->kho_diaChi;
        $k->kho_dienThoai = $request->kho_dienThoai;
        $k->kho_quanLy = $request->kho_quanLy;
        $k->kho_ghiChu = $request->kho_ghiChu;

        $k->save();
        Session::flash('alert-info', 'Thêm mới thành công ^^~!!!');
        return redirect()->route('danhsachkho.index'); //
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
        $k = Khohang::where("kho_ma",  $id)->first();
        //$ds_loai = Loai::all();
        return view('backend.khohang.edit')
            ->with('k', $k);
            //->with('danhsachloai', $ds_loai);
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
       
        $k = Khohang::where("kho_ma",  $id)->first();
        $k->kho_ten = $request->kho_ten;
        $k->kho_lienHe = $request->kho_lienHe;
        $k->kho_diaChi = $request->kho_diaChi;
        $k->kho_dienThoai = $request->kho_dienThoai;
        $k->kho_quanLy = $request->kho_quanLy;
        $k->kho_ghiChu = $request->kho_ghiChu;
         
        $k->save();
        Session::flash('alert-info', 'Cập nhật thành công ^^~!!!');
        return redirect()->route('danhsachkho.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $k = Khohang::where("kho_ma",  $id)->first();
        
        $k->delete();
        Session::flash('alert-info', 'Xóa sản phẩm thành công ^^~!!!');
        return redirect()->route('danhsachkho.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nhapkho()
    {
        // Sử dụng Eloquent Model để truy vấn dữ liệu
    $ds_nhapkho = Nhapkho::all(); // SELECT * FROM Nhapkho
    $ds_nhanvien = Nhanvien::all();
    // $ds_nhanvien = Nhanvien::where("nv_ma", $ds_nhapkho->nv_hoTen)->first();
    return view('backend.khohang.nhapkho')
        // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachkho`
        ->with('danhsachnhapkho', $ds_nhapkho)
        ->with('danhsachnhanvien', $ds_nhanvien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function xuatphieunhap()
    {
        
        // $pn = Nhapkho::where("nk_ma",  $id)->first();
         $ds_nhapkho = Nhapkho::all();
         $ds_chitietnk = Chitietnhapkho::all();
        
         return view('backend.khohang.xuatphieunhap')
            // ->with('pn', $pn)
            ->with('danhsachnhapkho', $ds_nhapkho)
            ->with('danhsachchitietnk', $ds_chitietnk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function infophieunhap(Request $request, $id)
    {
        $pn = Nhapkho::where("nk_ma",  $id)->first();
        $pn->nk_soHoaDon = $request->nk_soHoaDon;
        $pn->nk_hoTenNguoiGiaoHang = $request->nk_hoTenNguoiGiaoHang;
        $pn->nk_lydo = $request->nk_lydo;
        $pn->nv_thuKho = $request->nv_thuKho;
        $pn->nv_nguoiLapPhieu = $request->nv_nguoiLapPhieu;
        $pn->nk_ngayLapPhieu = $request->nk_ngayLapPhieu;

        // $ctnk = Chitietnhapkho::where("nk_ma",  $id)->first();
        // $ctnk->sp_ten = $request->sp_ten;
        // $ctnk->ctnk_donViTinh = $request->ctnk_donViTinh;
        // $ctnk->ctnk_soLuong = $request->ctnk_soLuong;
        // $ctnk->ctnk_donGia = $request->ctnk_donGia;
        // $ctnk->ctnk_thanhtien = $request->ctnk_thanhtien;
        // $ctnk->kho_ma = $request->kho_ma;

        return redirect()->route('backend.khohang.xuatphieunhap');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function xuatkho()
    {
        // Sử dụng Eloquent Model để truy vấn dữ liệu
    $ds_xuatkho = Xuatkho::all(); // SELECT * FROM Nhapkho
    $ds_nhanvien = Nhanvien::all();
    // $ds_nhanvien = Nhanvien::where("nv_ma", $ds_nhapkho->nv_hoTen)->first();
    return view('backend.khohang.xuatkho')
        // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachkho`
        ->with('danhsachxuatkho', $ds_xuatkho)
        ->with('danhsachnhanvien', $ds_nhanvien);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function phieuxuatkho()
    {
        
        // $pn = Nhapkho::where("nk_ma",  $id)->first();
         $ds_xuatkho = Xuatkho::all();
         $ds_chitietxk = Chitietxuatkho::all();
        
         return view('backend.khohang.phieuxuatkho')
            // ->with('pn', $pn)
            ->with('danhsachxuatkho', $ds_xuatkho)
            ->with('danhsachchitietxk', $ds_chitietxk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function baocaosoluong()
    {
        $ds_chitietnk = Chitietnhapkho::join('nhapkho as pn', 'chitietnhapkho.nk_ma', '=', 'pn.nk_ma')
                        ->join('khohang as k', 'chitietnhapkho.kho_ma', '=', 'k.kho_ma')
                        ->join('sanpham as sp', 'chitietnhapkho.sp_ten', '=', 'sp.sp_ma')
                        ->select('chitietnhapkho.sp_ten', 'chitietnhapkho.ctnk_donViTinh', DB::raw('count(chitietnhapkho.sp_ten)*chitietnhapkho.ctnk_soLuong as slnhap'), 'chitietnhapkho.ctnk_soLuong', 'chitietnhapkho.ctnk_donGia')
                        ->groupBy('sp.sp_ma')
                        ->get();
        $ds_chitietxk = Chitietxuatkho::all();
        
         return view('backend.khohang.baocaosoluong')
            // ->with('pn', $pn)
            ->with('danhsachchitietnk', $ds_chitietnk)
            ->with('danhsachchitietxk', $ds_chitietxk);
    }
}
