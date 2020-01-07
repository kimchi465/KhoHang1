<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhapkhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhapkho', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('nk_ma')->comment('Mã phiếu nhập kho');
            $table->string('nk_soHoaDon', 15)->comment('Số hóa đơn # Số hóa đơn');
            $table->string('nk_lydo', 191)->comment('Lý do # Lý do nhập kho');
            $table->unsignedSmallInteger('nv_nguoiLapPhieu')->comment('Lập phiếu # Mã nhân viên (người lập phiếu nhập)');
            $table->dateTime('nk_ngayLapPhieu')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm lập phiếu # Thời điểm lập phiếu nhập kho');
            $table->unsignedInteger('nk_tongtien');
            //$table->unsignedSmallInteger('nv_keToan')->default('1')->comment('Xác nhận # Mã nhân viên (kế toán trưởng), 1-chưa phân công');
            $table->unsignedSmallInteger('nv_thuKho')->default('1')->comment('Thủ kho # Mã nhân viên (thủ kho/giám đốc), 1-chưa phân công');
            $table->dateTime('nk_ngayNhapKho')->nullable()->default(NULL)->comment('Ngày nhập kho # Ngày nhập kho');
            $table->timestamp('nk_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo phiếu nhập');
            $table->timestamp('nk_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật phiếu nhập gần nhất');
            $table->tinyInteger('nk_trangThai')->default('2')->comment('Trạng thái # Trạng thái phiếu nhập sản phẩm: 1-khóa, 2-lập phiếu, 3-thanh toán, 4-nhập kho');
            $table->unsignedSmallInteger('ncc_ma')->comment('Nhà cung cấp # ncc_ma # ncc_ten # Mã nhà cung cấp');

            $table->unique(['nk_soHoaDon']);
            //$table->foreign('nv_keToan')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_nguoiLapPhieu')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('nv_thuKho')->references('nv_ma')->on('nhanvien')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('ncc_ma')->references('ncc_ma')->on('nhacungcap')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `nhapkho` comment 'Phiếu nhập # Phiếu nhập'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhapkho');
    }
}
