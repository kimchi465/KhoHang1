<?php

use Illuminate\Database\Seeder;

class NhapkhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('2020-01-01 08:00:00');
        $list = [
            [
                'nk_ma'      => 1,
                'nk_soHoaDon'     => "PN001",
                'nk_hoTenNguoiGiaoHang'     => "Nguyễn Văn A",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 1,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "900",
                'nv_thuKho'     => 1,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 1
            ], 
            [
                'nk_ma'      => 2,
                'nk_soHoaDon'     => "PN002",
                'nk_hoTenNguoiGiaoHang'     => "Trần Văn A",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 2,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "2400",
                'nv_thuKho'     => 2,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 3
            ],
            [
                'nk_ma'      => 3,
                'nk_soHoaDon'     => "PN003",
                'nk_hoTenNguoiGiaoHang'     => "Trần Văn D",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 2,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "2400",
                'nv_thuKho'     => 2,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 2
            ],    
            [
                'nk_ma'      => 4,
                'nk_soHoaDon'     => "PN004",
                'nk_hoTenNguoiGiaoHang'     => "Trần C",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 2,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "2400",
                'nv_thuKho'     => 2,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 4
            ],    
            [
                'nk_ma'      => 5,
                'nk_soHoaDon'     => "PN005",
                'nk_hoTenNguoiGiaoHang'     => "Trần Văn A",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 1,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "600",
                'nv_thuKho'     => 1,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 1
            ],
            [
                'nk_ma'      => 6,
                'nk_soHoaDon'     => "PN006",
                'nk_hoTenNguoiGiaoHang'     => "Lê Văn",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 2,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "1400",
                'nv_thuKho'     => 2,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 3
            ],        
            [
                'nk_ma'      => 7,
                'nk_soHoaDon'     => "PN007",
                'nk_hoTenNguoiGiaoHang'     => "Trần C",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 1,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "5400",
                'nv_thuKho'     => 1,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 2
            ],    
            [
                'nk_ma'      => 8,
                'nk_soHoaDon'     => "PN008",
                'nk_hoTenNguoiGiaoHang'     => "Nguyễn Văn A",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 2,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "2400",
                'nv_thuKho'     => 2,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 4
            ],    
            [
                'nk_ma'      => 9,
                'nk_soHoaDon'     => "PN009",
                'nk_hoTenNguoiGiaoHang'     => "Lê Văn",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 1,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "7600",
                'nv_thuKho'     => 1,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 3
            ],    
            [
                'nk_ma'      => 10,
                'nk_soHoaDon'     => "PN0010",
                'nk_hoTenNguoiGiaoHang'     => "Trần Văn A",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 2,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "3600",
                'nv_thuKho'     => 2,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 1
            ],    
            [
                'nk_ma'      => 11,
                'nk_soHoaDon'     => "PN0011",
                'nk_hoTenNguoiGiaoHang'     => "Trần Văn D",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 1,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "4400",
                'nv_thuKho'     => 1,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 3
            ],    
            [
                'nk_ma'      => 12,
                'nk_soHoaDon'     => "PN0012",
                'nk_hoTenNguoiGiaoHang'     => "Trần Văn A",
                'nk_lydo'     => "Thêm sản phẩm vào kho",
                'nv_nguoiLapPhieu'     => 2,
                'nk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'nk_tongtien'     => "1200",
                'nv_thuKho'     => 2,
                'nk_ngayNhapKho'     => $today->format('Y-m-d H:i:s'),
                'nk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'nk_capNhat' => $today->format('Y-m-d H:i:s'),
                'nk_trangThai' => 2,
                'ncc_ma'  => 4
            ],    
        ];
        DB::table('nhapkho')->insert($list);
    }
}
