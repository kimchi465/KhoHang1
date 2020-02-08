<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SanPham;
use App\Loai;
use App\Khohang;
use App\Hinhanh;
use App\Nhapkho;
use App\Chitietnhapkho;
use Session;
use Storage;
use App\Exports\SanPhamExport;
use Maatwebsite\Excel\Facades\Excel as Excel;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;

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
        // Sử dụng Eloquent Model để truy vấn dữ liệu
        //  $ds_kho2 = Khohang::all(); // SELECT * FROM loai
         // Đường dẫn đến view được quy định như sau: <FolderName>.<ViewName>
         // Mặc định đường dẫn gốc của method view() là thư mục `resources/views`
         // Hiển thị view `backend.sanpham.create`
         $ds_kho2 = Khohang::all();
         // $data = [
         //     'danhsachloai' => $ds_loai,
         //     'danhsachkho'    => $ds_kho,
         // ];
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
        // if(empty($sp) == false)
        // {
        //     // DELETE các dòng liên quan trong table `HinhAnh`
        //     foreach($sp->hinhanhlienquan()->get() as $hinhAnh)
        //     {
        //         // Xóa hình cũ để tránh rác
        //         Storage::delete('public/photos/' . $hinhAnh->ha_ten);
        //         // Xóa record
        //         $hinhAnh->delete();
        //     }
        //     // Xóa hình cũ để tránh rác
        //     Storage::delete('public/photos/' . $sp->sp_hinh);
        // }
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
    // Đường dẫn đến view được quy định như sau: <FolderName>.<ViewName>
    // Mặc định đường dẫn gốc của method view() là thư mục `resources/views`
    // Hiển thị view `backend.sanpham.kho`
    return view('backend.khohang.nhapkho')
        // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachkho`
        ->with('danhsachnhapkho', $ds_nhapkho);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function xuatphieunhap()
    {
        
         //$pn = Nhapkho::where("nk_ma",  $id)->first();
         $ds_nhapkho = Nhapkho::all();
         $ds_chitietnk = Chitietnhapkho::all();
        //  $data = [
        //      'danhsachnhapkho' => $ds_nhapkho,
        //      'danhsachchitietnk'    => $ds_chitietnk,
        //  ];
         return view('backend.khohang.xuatphieunhap')
             // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachloai`
             //->with('pn', $pn)
             ->with('danhsachnhapkho', $ds_nhapkho)
             ->with('danhsachchitietnk', $ds_chitietnk);
    }
}
