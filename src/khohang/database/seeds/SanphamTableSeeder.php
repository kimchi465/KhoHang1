<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;
//use DB;

class SanphamTableSeeder extends Seeder
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

        $types = ["Nhãn lồng Hưng Yên", "Mận Bắc Hà", "Táo mèo Yên Bái", "Cam Cao Phong Hòa Bình", "Đào SaPa", "Vải Lục Ngạn", "Trái thanh mai", "Bưởi Đoan Hùng",
                    "Nho Ninh Thuận", "Xoài tượng Bình Định", "Thanh long Quảng Trị", "Dưa hấu Bình Sơn", "Bơ sáp Đắk Lắk", "Bưởi Phúc Trạch Hương Khê",
                    "Mãng cầu Bà Đen", "Sầu riêng Ri6", "Cam mật Cần Thơ", "Măng cụt Thái Liêu-Bình Dương", "Dừa sáp Trà Vinh", "Cam sành", "Bưởi da xanh Bến Tre", "Vú sữa Lò Rèn", "Xoài cát hòa lộc", "Quýt đường Trà Vinh",
                    "Táo đỏ Mỹ", "Dâu Tây Nhật", "Dưa lưới", "Kiwi-Newzealand", "cherry Úc", "Lựu đỏ", "Nho đen không hạt Mỹ", "Ổi Đài Loan"];
        $types2 = ["50.000", "60.000", "80.000", "40.000", "90.000", "80.000", "120.000", "60.000",
                    "120.000", "70.000", "30.000", "20.000", "70.000", "50.000",
                    "80.000", "140.000", "45.000", "90.000", "180.000", "30.000", "70.000", "40.000", "120.000", "90.000",
                    "60.000", "190.000", "90.000", "200.000", "220.000", "80.000", "190.000", "40.000"];
        $types3 = ["1", "1", "1", "1", "1", "1", "1", "1",
                    "2", "2", "2", "2", "2", "2", "2", "2", "2", "2",
                    "3", "3", "3", "3", "3", "3",
                    "4", "4", "4", "4", "4", "4", "4", "4"];
        $types4 = ["1", "1", "2", "3", "1", "5", "2", "4",
                    "2", "3", "4", "1", "2", "3", "2", "3", "2", "1",
                    "3", "2", "3", "4", "5", "3",
                    "5", "4", "2", "1", "3", "4", "2", "4"];
        
        //sort($types);
        $today = new DateTime('2020-01-01 08:00:00');
        for($i=1; $i <= count($types); $i++){
            array_push($list, [
                'sp_ma'                   => $i,
                'sp_ten'                  => $types[$i-1],
                'sp_gia'                  => $types2[$i-1],
                'sp_hinh'                 => "hinh-$i.jpg",
                'sp_thongTin'             => "sp_thongTin $i",
                'sp_danhGia'              => "sp_danhGia $i",
                'sp_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'sp_capNhat'              => $today->format('Y-m-d H:i:s'),
                'sp_trangThai'            => $i,
                'l_ma'                    => $types3[$i-1],
                'kho_ma'                  => $types4[$i-1]
            ]);
        }
        DB::table('sanpham')->insert($list);
    }
}
