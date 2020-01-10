<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class NhanvienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $uFN = new VnFullname();
        $uPI = new VnPersonalInfo();
        
        // //1-Giám đốc, 2-Quản trị, 3-Quản lý kho, 4-Nhân viên bán hàng, 6-Nhân viên giao hàng
        
        $today = new DateTime('2020-01-01 08:00:00');
        
        array_push($list, [
            'nv_ma'        => 1,
            'nv_taiKhoan'  => "Taikhoana",
            'nv_matKhau'   => bcrypt('123456'),
            'nv_hoTen'     => "Nguyễn Văn A",
            'nv_gioiTinh'  => true,
            'nv_email'     => "nguyena@gmail.com",
            'nv_ngaySinh'  => $today->format('Y-m-d H:i:s'),
            'nv_diaChi'    => "1 Lý Tự Trọng, P. An Cư, Q. Ninh Kiều, TP. Cần Thơ",
            'nv_dienThoai' => "01234567890",
            'nv_taoMoi'    => $today->format('Y-m-d H:i:s'),
            'nv_capNhat'   => $today->format('Y-m-d H:i:s'),
            'q_ma'         => 5
        ]);
        array_push($list, [
            'nv_ma'        => 2,
            'nv_taiKhoan'  => "Taikhoanb",
            'nv_matKhau'   => bcrypt('123456'),
            'nv_hoTen'     => "Nguyễn Thị Kim Chi",
            'nv_gioiTinh'  => false,
            'nv_email'     => "chi@gmail.com",
            'nv_ngaySinh'  => $today->format('Y-m-d H:i:s'),
            'nv_diaChi'    => "Ninh Kiều, TP. Cần Thơ",
            'nv_dienThoai' => "0928348134",
            'nv_taoMoi'    => $today->format('Y-m-d H:i:s'),
            'nv_capNhat'   => $today->format('Y-m-d H:i:s'),
            'q_ma'         => 4
        ]);
        array_push($list, [
            'nv_ma'        => 3,
            'nv_taiKhoan'  => "Taikhoanc",
            'nv_matKhau'   => bcrypt('123456'),
            'nv_hoTen'     => "Trần văn An",
            'nv_gioiTinh'  => true,
            'nv_email'     => "An@gmail.com",
            'nv_ngaySinh'  => $today->format('Y-m-d H:i:s'),
            'nv_diaChi'    => "Vĩnh Long",
            'nv_dienThoai' => "0172635487",
            'nv_taoMoi'    => $today->format('Y-m-d H:i:s'),
            'nv_capNhat'   => $today->format('Y-m-d H:i:s'),
            'q_ma'         => 5
        ]);
        array_push($list, [
            'nv_ma'        => 4,
            'nv_taiKhoan'  => "Taikhoand",
            'nv_matKhau'   => bcrypt('123456'),
            'nv_hoTen'     => "Trần văn Thanh",
            'nv_gioiTinh'  => true,
            'nv_email'     => "Thanh@gmail.com",
            'nv_ngaySinh'  => $today->format('Y-m-d H:i:s'),
            'nv_diaChi'    => "Cần Thơ",
            'nv_dienThoai' => "0918276548",
            'nv_taoMoi'    => $today->format('Y-m-d H:i:s'),
            'nv_capNhat'   => $today->format('Y-m-d H:i:s'),
            'q_ma'         => 3
        ]);
        
        // Admin
        array_push($list, [
            'nv_ma'        => 100,
            'nv_taiKhoan'  => "admin",
            'nv_matKhau'   => bcrypt('123456'),
            'nv_hoTen'     => "Quản trị hệ thống",
            'nv_gioiTinh'  => true,
            'nv_email'     => "admin@gmail.vn",
            'nv_ngaySinh'  => $today->format('Y-m-d H:i:s'),
            'nv_diaChi'    => "130 Xô Viết Nghệ Tỉnh, Quận Ninh Kiều, TP Cần Thơ",
            'nv_dienThoai' => "0915659223",
            'nv_taoMoi'    => $today->format('Y-m-d H:i:s'),
            'nv_capNhat'   => $today->format('Y-m-d H:i:s'),
            'q_ma'         => 2
        ]);
        DB::table('nhanvien')->insert($list);
    }
}
