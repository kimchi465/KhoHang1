<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai_sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('km_ma')->comment('Chương trình # km_ma # km_ten # Mã chương trình khuyến mãi');
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # sp_ten # Mã sản phẩm');
            $table->unsignedInteger('kmsp_giaTri')->comment('Giá trị khuyến mãi # Giá trị khuyến mãi (giảm tiền/giảm % tiền, số lượng), định dạng: tien;soLuong (soLuong = 0, không giới hạn số lượng)');
            $table->unsignedTinyInteger('kmsp_trangThai')->default('2')->comment('Trạng thái # Trạng thái khuyến mãi: 1-ngưng khuyến mãi, 2-có hiệu lực');
            
            $table->primary(['km_ma', 'sp_ma']);
            $table->foreign('km_ma')->references('km_ma')->on('khuyenmai')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `khuyenmai_sanpham` comment 'Thông tin khuyến mãi sản phẩm # Chi tiết về chương trình khuyến mãi'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai_sanpham');
    }
}
