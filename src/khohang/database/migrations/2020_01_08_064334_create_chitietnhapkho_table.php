<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietnhapkhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietnhapkho', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            //$table->bigIncrements('ctnk_ma')->comment('Mã phiếu nhập kho'); //khóa chính tự tăng
            $table->unsignedSmallInteger('ctnk_soLuong')->comment('Số lượng # Số lượng sản phẩm');
            $table->unsignedInteger('ctnk_donGia');
            $table->unsignedBigInteger('km_giaTri');
            $table->unsignedInteger('ctnk_thanhtien');
            $table->unsignedBigInteger('sp_ma')->comment('Sản phẩm # sp_ma # Mã sản phẩm');
            $table->unsignedBigInteger('nk_ma')->comment('Nhập kho # nk_ma # Mã phiếu nhập kho');
            //$table->unsignedBigInteger('ctk_ma')->comment('Chi tiết kho # ctk_ma');
            $table->unsignedTinyInteger('kho_ma')->comment('Kho hàng');

            $table->primary(['sp_ma', 'nk_ma', 'kho_ma']);
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nk_ma')->references('nk_ma')->on('nhapkho')->onDelete('CASCADE')->onUpdate('CASCADE');
            //$table->foreign('ctk_ma')->references('ctk_ma')->on('chitietkho')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('kho_ma')->references('kho_ma')->on('khohang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('km_giaTri')->references('km_ma')->on('khuyenmai')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `chitietnhapkho` comment 'Chi tiết phiếu nhập: sản phẩm, số lượng, thành tiền, phiếu nhập'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietnhapkho');
    }
}
