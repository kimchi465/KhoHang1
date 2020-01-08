<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khohang', function (Blueprint $table) {
            // $table->increments('id');
            // $table->timestamps();
            $table->engine = 'InnoDB';
            $table->unsignedTinyInteger('kho_ma')->autoIncrement()->comment('Mã kho');
            $table->string('kho_ten', 50)->comment('Tên kho');
            $table->string('kho_lienHe', 100)->comment('Liên hệ # Liên hệ kho');
            $table->string('kho_diaChi', 191)->comment('Địa chỉ # Địa chỉ kho');
            $table->string('kho_dienThoai', 11)->comment('Điện thoại # Số điện thoại kho');
            $table->string('kho_quanLy', 191)->comment('Quản lý kho');
            $table->text('kho_ghiChu')->nullable()->default(NULL)->comment('Ghi chú # Ghi chú kho');

            $table->unique(['kho_ten']);
        });
        DB::statement("ALTER TABLE `khohang` comment 'Kho hàng # Kho hàng'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khohang');
    }
}
