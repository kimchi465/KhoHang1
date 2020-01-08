<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietxuatkhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietxuatkho', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //$table->bigIncrements('ctxk_ma')->comment('Mã phiếu xuất kho'); //khóa chính tự tăng
            $table->unsignedSmallInteger('ctxk_soLuong')->comment('Số lượng # Số lượng sản phẩm');
            $table->unsignedInteger('ctxk_donGia');
            $table->unsignedBigInteger('km_giaTri');
            $table->unsignedInteger('ctxk_thanhtien');
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # Mã sản phẩm');
            $table->unsignedBigInteger('xk_ma')->comment('Xuất kho # nk_ma # Mã phiếu xuất kho');
            //$table->unsignedBigInteger('ctk_ma')->comment('Chi tiết kho # ctk_ma');
            $table->unsignedTinyInteger('kho_ma')->comment('Kho hàng');

            $table->primary(['sp_ma', 'xk_ma', 'kho_ma']);
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('xk_ma')->references('nk_ma')->on('nhapkho')->onDelete('CASCADE')->onUpdate('CASCADE');
            //$table->foreign('ctk_ma')->references('ctk_ma')->on('chitietkho')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('kho_ma')->references('kho_ma')->on('khohang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('km_giaTri')->references('km_ma')->on('khuyenmai')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        
        DB::statement("ALTER TABLE `chitietxuatkho` comment 'Chi tiết phiếu xuất: sản phẩm, số lượng, thành tiền, phiếu xuất'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietxuatkho');
    }
}
