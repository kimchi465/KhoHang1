<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SanPham;
use App\Loai;
use App\Khohang;
use App\Hinhanh;
use Session;
use Storage;
use Barryvdh\DomPDF\Facade as PDF;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Sử dụng Eloquent Model để truy vấn dữ liệu
    $ds_sanpham = SanPham::all(); // SELECT * FROM sanpham
    // Đường dẫn đến view được quy định như sau: <FolderName>.<ViewName>
    // Mặc định đường dẫn gốc của method view() là thư mục `resources/views`
    // Hiển thị view `backend.sanpham.index`
    return view('backend.sanpham.index')
        // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachsanpham`
        ->with('danhsachsanpham', $ds_sanpham);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // Sử dụng Eloquent Model để truy vấn dữ liệu
        $ds_loai = Loai::all(); // SELECT * FROM loai
        // Đường dẫn đến view được quy định như sau: <FolderName>.<ViewName>
        // Mặc định đường dẫn gốc của method view() là thư mục `resources/views`
        // Hiển thị view `backend.sanpham.create`
        //$ds_kho = Khohang::all();
        // $data = [
        //     'danhsachloai' => $ds_loai,
        //     'danhsachkho'    => $ds_kho,
        // ];
        return view('backend.sanpham.create')
            // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachloai`
            ->with('danhsachloai', $ds_loai);
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
        $validation = $request->validate([
            'sp_hinh' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            // Cú pháp dùng upload nhiều file
            'sp_hinhanhlienquan.*' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        
        $sp = new SanPham();
        $sp->sp_ten = $request->sp_ten;
        $sp->sp_gia = $request->sp_gia;
        //$sp->sp_giaBan = $request->sp_giaBan;
        $sp->sp_thongTin = $request->sp_thongTin;
        $sp->sp_danhGia = $request->sp_danhGia;
        $sp->sp_taoMoi = $request->sp_taoMoi;
        $sp->sp_capNhat = $request->sp_capNhat;
        $sp->sp_trangThai = $request->sp_trangThai;
        $sp->l_ma = $request->l_ma;
        $sp->kho_ma = $request->kho_ma;
        if($request->hasFile('sp_hinh'))
        {
            $file = $request->sp_hinh;
            // Lưu tên hình vào column sp_hinh
            $sp->sp_hinh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos', $sp->sp_hinh);
        }
        $sp->save();
        // Lưu hình ảnh liên quan
        if($request->hasFile('sp_hinhanhlienquan')) {
            $files = $request->sp_hinhanhlienquan;
            // duyệt từng ảnh và thực hiện lưu
            foreach ($request->sp_hinhanhlienquan as $index => $file) {
                
                $file->storeAs('public/photos', $file->getClientOriginalName());
                // Tạo đối tưọng HinhAnh
                $hinhAnh = new HinhAnh();
                $hinhAnh->sp_ma = $sp->sp_ma;
                $hinhAnh->ha_stt = ($index + 1);
                $hinhAnh->ha_ten = $file->getClientOriginalName();
                $hinhAnh->save();
            }
        }
        Session::flash('alert-info', 'Thêm mới thành công ^^~!!!');
        return redirect()->route('backend.sanpham.index');
    
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
        $sp = SanPham::where("sp_ma",  $id)->first();
        $ds_loai = Loai::all();
        return view('backend.sanpham.edit')
            ->with('sp', $sp)
            ->with('danhsachloai', $ds_loai);
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
        $validation = $request->validate([
            'sp_hinh' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
            // Cú pháp dùng upload nhiều file
            'sp_hinhanhlienquan.*' => 'image|mimes:jpeg,png,gif,webp|max:2048'
        ]);
        $sp = SanPham::where("sp_ma",  $id)->first();
        $sp->sp_ten = $request->sp_ten;
        $sp->sp_gia = $request->sp_gia;
        $sp->sp_thongTin = $request->sp_thongTin;
        $sp->sp_danhGia = $request->sp_danhGia;
        $sp->sp_taoMoi = $request->sp_taoMoi;
        $sp->sp_capNhat = $request->sp_capNhat;
        $sp->sp_trangThai = $request->sp_trangThai;
        $sp->l_ma = $request->l_ma;
        $sp->kho_ma = $request->kho_ma;
        if($request->hasFile('sp_hinh'))
        {
            // Xóa hình cũ để tránh rác
            Storage::delete('public/photos/' . $sp->sp_hinh);
            // Upload hình mới
            // Lưu tên hình vào column sp_hinh
            $file = $request->sp_hinh;
            $sp->sp_hinh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos', $sp->sp_hinh);
        }
        // Lưu hình ảnh liên quan
        if($request->hasFile('sp_hinhanhlienquan')) {
            // DELETE các dòng liên quan trong table `HinhAnh`
            foreach($sp->hinhanhlienquan()->get() as $hinhAnh)
            {
                // Xóa hình cũ để tránh rác
                Storage::delete('public/photos/' . $hinhAnh->ha_ten);
                // Xóa record
                $hinhAnh->delete();
            }
            $files = $request->sp_hinhanhlienquan;
            // duyệt từng ảnh và thực hiện lưu
            foreach ($request->sp_hinhanhlienquan as $index => $file) {
                
                $file->storeAs('public/photos', $file->getClientOriginalName());
                // Tạo đối tưọng HinhAnh
                $hinhAnh = new HinhAnh();
                $hinhAnh->sp_ma = $sp->sp_ma;
                $hinhAnh->ha_stt = ($index + 1);
                $hinhAnh->ha_ten = $file->getClientOriginalName();
                $hinhAnh->save();
            }
        }
        $sp->save();
        Session::flash('alert-info', 'Cập nhật thành công ^^~!!!');
        return redirect()->route('backend.sanpham.index');
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
