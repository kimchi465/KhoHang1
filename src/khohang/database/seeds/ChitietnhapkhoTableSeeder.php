<?php

use Illuminate\Database\Seeder;

class ChitietnhapkhoTableSeeder extends Seeder
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
                'ctnk_soLuong'      => 10,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 90,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 10*90,
                'sp_ten'     => 5,
                'nk_ma'     => 1,
                'kho_ma'     => 1
            ], 
            [
                'ctnk_soLuong'      => 20,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 120,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 20*120,
                'sp_ten'     => 9,
                'nk_ma'     => 2,
                'kho_ma'     => 4
            ], 
            [
                'ctnk_soLuong'      => 20,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 120,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 20*120,
                'sp_ten'     => 9,
                'nk_ma'     => 3,
                'kho_ma'     => 2
            ], 
            [
                'ctnk_soLuong'      => 20,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 120,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 20*120,
                'sp_ten'     => 9,
                'nk_ma'     => 4,
                'kho_ma'     => 1
            ], 
            [
                'ctnk_soLuong'      => 20,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 220,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 20*220,
                'sp_ten'     => 29,
                'nk_ma'     => 5,
                'kho_ma'     => 1
            ], 
            [
                'ctnk_soLuong'      => 10,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 140,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 10*140,
                'sp_ten'     => 16,
                'nk_ma'     => 6,
                'kho_ma'     => 2
            ], 
            [
                'ctnk_soLuong'      => 30,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 180,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 30*180,
                'sp_ten'     => 19,
                'nk_ma'     => 7,
                'kho_ma'     => 3
            ], 
            [
                'ctnk_soLuong'      => 30,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 20,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 30*20,
                'sp_ten'     => 11,
                'nk_ma'     => 8,
                'kho_ma'     => 3
            ], 
            [
                'ctnk_soLuong'      => 40,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 60,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 40*60,
                'sp_ten'     => 25,
                'nk_ma'     => 9,
                'kho_ma'     => 4
            ], 
            [
                'ctnk_soLuong'      => 40,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 90,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 40*90,
                'sp_ten'     => 27,
                'nk_ma'     => 10,
                'kho_ma'     => 2
            ], 
            [
                'ctnk_soLuong'      => 40,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 190,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 40*190,
                'sp_ten'     => 26,
                'nk_ma'     => 11,
                'kho_ma'     => 5
            ], 
            [
                'ctnk_soLuong'      => 30,
                'ctnk_donViTinh'     => "kg",
                'ctnk_donGia'     => 40,
                'km_giaTri'     => 1,
                'ctnk_thanhtien'     => 30*40,
                'sp_ten'     => 32,
                'nk_ma'     => 12,
                'kho_ma'     => 5
            ], 
        ];
        DB::table('Chitietnhapkho')->insert($list);
    }
}
