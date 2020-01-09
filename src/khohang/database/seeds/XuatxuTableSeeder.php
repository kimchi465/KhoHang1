<?php

use Illuminate\Database\Seeder;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;

class XuatxuTableSeeder extends Seeder
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
                'xx_ma'      => 1,
                'xx_ten'     => "Kết hợp",
                'xx_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'xx_capNhat' => $today->format('Y-m-d H:i:s')
            ], 
            [
                'xx_ma'      => 2,
                'xx_ten'     => "Các tỉnh miền trung",
                'xx_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'xx_capNhat' => $today->format('Y-m-d H:i:s')
            ], 
            [
                'xx_ma'      => 3,
                'xx_ten'     => "Các tỉnh miền nam",
                'xx_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'xx_capNhat' => $today->format('Y-m-d H:i:s')
            ], 
            [
                'xx_ma'      => 4,
                'xx_ten'     => "Các tỉnh miền bắc",
                'xx_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'xx_capNhat' => $today->format('Y-m-d H:i:s')
            ], 
            [
                'xx_ma'      => 5,
                'xx_ten'     => "Nhập khẩu nước ngoài",
                'xx_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'xx_capNhat' => $today->format('Y-m-d H:i:s')
            ]          
        ];
        DB::table('xuatxu')->insert($list);
    }
}
