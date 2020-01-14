<?php

use Illuminate\Database\Seeder;

class RoleNhanvienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        
        // //1-Quản trị, 2-Giám đốc
        
        
        array_push($list, [
            'nv_ma'        => 1,
            'role_id'         => 2
        ]);
        array_push($list, [
            'nv_ma'        => 2,
            'role_id'         => 2
        ]);
        array_push($list, [
            'nv_ma'        => 3,
            'role_id'         => 2
        ]);
        array_push($list, [
            'nv_ma'        => 4,
            'role_id'         => 2
        ]);
        
        // Admin
        array_push($list, [
            'nv_ma'        => 100,
            'role_id'         => 1
        ]);
        DB::table('role_nhanvien')->insert($list);
    }
}
