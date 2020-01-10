<?php

use Illuminate\Database\Seeder;

class XuatkhoTableSeeder extends Seeder
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
                'xk_ma'      => 1,
                'xk_soHoaDon'     => "PX001",
                'xk_hoTenNguoiNhan'     => "Nguyễn Minh",
                'xk_diaChi'             => "123 Vĩnh Long",
                'xk_lydo'     => "Yêu cầu từ khách hàng",

                'nv_nguoiLapPhieu'     => 1,
                'xk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'xk_tongtien'     => "450",
                'nv_thuKho'     => 1,
                'xk_ngayXuatKho'     => $today->format('Y-m-d H:i:s'),
                'xk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'xk_capNhat' => $today->format('Y-m-d H:i:s'),
                'xk_trangThai' => 2
            ], 
            [
                'xk_ma'      => 2,
                'xk_soHoaDon'     => "PX002",
                'xk_hoTenNguoiNhan'     => "Văn Hòa",
                'xk_diaChi'             => "123 Cần Thơ",
                'xk_lydo'     => "Yêu cầu từ khách hàng",

                'nv_nguoiLapPhieu'     => 2,
                'xk_ngayLapPhieu'     => $today->format('Y-m-d H:i:s'),
                'xk_tongtien'     => "540",
                'nv_thuKho'     => 2,
                'xk_ngayXuatKho'     => $today->format('Y-m-d H:i:s'),
                'xk_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'xk_capNhat' => $today->format('Y-m-d H:i:s'),
                'xk_trangThai' => 2
            ], 
        ];
        DB::table('Xuatkho')->insert($list);
    }
}
