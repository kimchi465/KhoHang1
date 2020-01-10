<?php

use Illuminate\Database\Seeder;

class ChitietxuatkhoTableSeeder extends Seeder
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
                'ctxk_soLuong'      => 5,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 90,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 5*90,
                'sp_ma'     => 5,
                'xk_ma'     => 1,
                'kho_ma'     => 1
            ], 
            [
                'ctxk_soLuong'      => 6,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 90,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 6*90,
                'sp_ma'     => 27,
                'xk_ma'     => 2,
                'kho_ma'     => 2
            ], 
        ];
        DB::table('Chitietxuatkho')->insert($list);
    }
}
