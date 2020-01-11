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
    }
}
