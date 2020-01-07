<?php

use Illuminate\Database\Seeder;

class KhohangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $types = ["Kho Cần Thơ", "Kho Hà Nội", "Kho Hải Phòng", "Kho TP Hồ Chí Minh", "Kho Đà Nẵng"];
        $types2 = ["Cần Thơ", "Hà Nội", "Hải Phòng", " TP Hồ Chí Minh", " Đà Nẵng"];
        $types3 = ["098271637", "082317364", "032871639", "029382736", "0927183747"];
        $types4 = ["Nguyễn Văn B", "Trần Trần", "Lê Văn", "Phạm Nguyên", "Nguyễn D", "Nguyễn C"];
        sort($types);
        for($i=1; $i <= count($types); $i++){
            array_push($list, [
                'kho_ma'        => $i,
                'kho_ten'       => $types[$i-1],
                'kho_lienhe'    => " ",
                'kho_diachi'    => $types2[$i-1],
                'kho_dienthoai' => $types3[$i-1],
                'kho_quanly'    => $types4[$i-1],
                'kho_ghichu'    => ""
            ]);
    }
    DB::table('khohang')->insert($list);
    }
}
