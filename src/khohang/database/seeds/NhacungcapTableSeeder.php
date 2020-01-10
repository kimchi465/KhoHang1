<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class NhacungcapTableSeeder extends Seeder
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
                'ncc_ma'      => 1,
                'ncc_ten'     => "Công ty TNHH ABC",
                'ncc_daiDien'     => "Lê Hữu Nghĩa",
                'ncc_diaChi'     => "Ninh kiều-Cần Thơ",
                'ncc_dienThoai'     => "0192837653",
                'ncc_email'     => "ABC@gmail.com",
                'ncc_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'ncc_capNhat' => $today->format('Y-m-d H:i:s'),
                'ncc_trangThai' => 2,
                'xx_ma'  => 3
            ], 
            [
                'ncc_ma'      => 2,
                'ncc_ten'     => "Công ty TNHH ABE",
                'ncc_daiDien'     => "Trần Văn C",
                'ncc_diaChi'     => "Hà Nội",
                'ncc_dienThoai'     => "0928345630",
                'ncc_email'     => "ABE@gmail.com",
                'ncc_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'ncc_capNhat' => $today->format('Y-m-d H:i:s'),
                'ncc_trangThai' => 2,
                'xx_ma'  => 4
            ], 
            [
                'ncc_ma'      => 3,
                'ncc_ten'     => "Công ty TNHH DNTN",
                'ncc_daiDien'     => "Nguyễn Văn A",
                'ncc_diaChi'     => "Đà Nẵng",
                'ncc_dienThoai'     => "0928172635",
                'ncc_email'     => "DNTN@gmail.com",
                'ncc_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'ncc_capNhat' => $today->format('Y-m-d H:i:s'),
                'ncc_trangThai' => 2,
                'xx_ma'  => 5
            ], 
            [
                'ncc_ma'      => 4,
                'ncc_ten'     => "Công ty TNHH MTV",
                'ncc_daiDien'     => "Trần A",
                'ncc_diaChi'     => "Đà Nẵng",
                'ncc_dienThoai'     => "0293871638",
                'ncc_email'     => "A@gmail.com",
                'ncc_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'ncc_capNhat' => $today->format('Y-m-d H:i:s'),
                'ncc_trangThai' => 2,
                'xx_ma'  => 2
            ],        
        ];
        DB::table('nhacungcap')->insert($list);
    }
    }
