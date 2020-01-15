<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sử dụng cho câu lệnh "php artisan db:seed"
        $this->call(KhohangTableSeeder::class);
        $this->call(LoaiTableSeeder::class);
        $this->call(KhachhangTableSeeder::class);
        $this->call(QuyenTableSeeder::class);
        $this->call(NhanvienTableSeeder::class);
        $this->call(KhuyenmaiTableSeeder::class);
        $this->call(XuatxuTableSeeder::class);
        $this->call(SanphamTableSeeder::class);
        $this->call(ThanhtoanTableSeeder::class);
        $this->call(VanchuyenTableSeeder::class);
        $this->call(NhacungcapTableSeeder::class);
        $this->call(NhapkhoTableSeeder::class);
        $this->call(ChitietnhapkhoTableSeeder::class);
        $this->call(XuatkhoTableSeeder::class);
        $this->call(ChitietxuatkhoTableSeeder::class);
        $this->call(PermissionSeeder::class);
        
    }
}
