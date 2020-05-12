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
            [
                'ctxk_soLuong'      => 6,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 90,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 6*90,
                'sp_ma'     => 27,
                'xk_ma'     => 3,
                'kho_ma'     => 3
            ], 
            
            [
                'ctxk_soLuong'      => 5,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 220,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 5*90,
                'sp_ma'     => 5,
                'xk_ma'     => 4,
                'kho_ma'     => 1
            ],
            [
                'ctxk_soLuong'      => 10,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 120,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 10*120,
                'sp_ma'     => 9,
                'xk_ma'     => 2,
                'kho_ma'     => 4
            ], 
            [
                'ctxk_soLuong'      => 9,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 120,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 9*120,
                'sp_ma'     => 9,
                'xk_ma'     => 5,
                'kho_ma'     => 1
            ],  
            [
                'ctxk_soLuong'      => 4,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 140,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 4*140,
                'sp_ma'     => 16,
                'xk_ma'     => 6,
                'kho_ma'     => 2
            ], 
            [
                'ctxk_soLuong'      => 18,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 180,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 18*180,
                'sp_ma'     => 19,
                'xk_ma'     => 7,
                'kho_ma'     => 3
            ], 

            [
                'ctxk_soLuong'      => 10,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 220,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 10*220,
                'sp_ma'     => 29,
                'xk_ma'     => 7,
                'kho_ma'     => 3
            ], 
            [
                'ctxk_soLuong'      => 15,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 190,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 15*190,
                'sp_ma'     => 26,
                'xk_ma'     => 5,
                'kho_ma'     => 5
            ], 
            [
                'ctxk_soLuong'      => 12,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 40,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 12*40,
                'sp_ma'     => 32,
                'xk_ma'     => 5,
                'kho_ma'     => 5
            ], 
            [
                'ctxk_soLuong'      => 6,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 120,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 6*120,
                'sp_ma'     => 9,
                'xk_ma'     => 7,
                'kho_ma'     => 2
            ], 
            [
                'ctxk_soLuong'      => 8,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 40,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 8*40,
                'sp_ma'     => 32,
                'xk_ma'     => 6,
                'kho_ma'     => 1
            ], 
            [
                'ctxk_soLuong'      => 7,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 80,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 7*80,
                'sp_ma'     => 1,
                'xk_ma'     => 6,
                'kho_ma'     => 1
            ], 
            [
                'ctxk_soLuong'      => 10,
                'ctxk_donViTinh'     => "kg",
                'ctxk_donGia'     => 80,
                'km_giaTri'     => 1,
                'ctxk_thanhtien'     => 10*80,
                'sp_ma'     => 8,
                'xk_ma'     => 7,
                'kho_ma'     => 2
            ], 

        ];
        DB::table('chitietxuatkho')->insert($list);
    }
}
