<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuatkhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatkho', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('xk_ma')->comment('Mã phiếu xuất kho');
            $table->string('xk_soHoaDon', 15)->comment('Số hóa đơn # Số hóa đơn');
            $table->string('xk_hoTenNguoiNhan', 191)->comment('Họ tên # Họ tên người nhận hàng');
            $table->string('xk_diaChi', 191)->comment('Địa Chỉ # Địa chỉ người nhận hàng');
            $table->string('xk_lydo', 191)->comment('Lý do # Lý do xuất kho');
            //$table->string('kh_diaChi', 191)->comment('Địa chỉ # Địa chỉ');
            $table->unsignedSmallInteger('nv_nguoiLapPhieu')->comment('Lập phiếu # Mã nhân viên (người lập phiếu xuất)');
            $table->dateTime('xk_ngayLapPhieu')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm lập phiếu # Thời điểm lập phiếu xuất kho');
            $table->unsignedInteger('xk_tongtien');
            //$table->unsignedSmallInteger('nv_keToan')->default('1')->comment('Xác nhận # Mã nhân viên (kế toán trưởng), 1-chưa phân công');
            $table->unsignedSmallInteger('nv_thuKho')->default('1')->comment('Thủ kho # Mã nhân viên (thủ kho/giám đốc), 1-chưa phân công');
            $table->dateTime('xk_ngayXuatKho')->nullable()->default(NULL)->comment('Ngày xuất kho # Ngày xuất kho');
            $table->timestamp('xk_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo xuất nhập');
            $table->timestamp('xk_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật phiếu xuất gần nhất');
            $table->tinyInteger('xk_trangThai')->default('2')->comment('Trạng thái # Trạng thái phiếu xuất sản phẩm: 1-khóa, 2-lập phiếu, 3-thanh toán, 4-xuất kho');

            $table->unique(['xk_soHoaDon']);
            //$table->foreign('nv_keToan')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_nguoiLapPhieu')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_thuKho')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `xuatkho` comment 'Xuất kho'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuatkho');
    }
}
