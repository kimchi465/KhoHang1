<?php

use Illuminate\Database\Seeder;

class KhachhangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $types = ["Kim Ngan", "Hoang Anh", "Van a"];
        $types2 = ["1343", "2456", "9473"];
        $types3 = ["Trần Thị Kim Ngân", "Nguyễn Hoàng Anh", "Trần Văn A"];
        $types4 = ["ngan@gmail.com", "anh@gmail.com", "a@gmail.com"];
        //$types5 = ["1986", "1992", "1990"];
        
        $today = new DateTime('2020-01-01 08:00:00');
        $day = new DateTime('1992-01-01');
        for ($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'kh_ma'      => $i,
                'kh_taikhoan'     => $types[$i-1],
                'kh_matkhau'     => $types2[$i-1],
                'kh_hoten'     => $types3[$i-1],
                'kh_email'     => $types4[$i-1],
                'kh_ngaySinh' => $day->format('Y-m-d'),
                'kh_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'kh_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('khachhang')->insert($list);
    }
}
