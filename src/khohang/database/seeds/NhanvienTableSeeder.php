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
