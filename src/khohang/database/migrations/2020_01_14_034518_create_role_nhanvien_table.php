<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_nhanvien', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedSmallInteger('nv_ma');
            $table->unsignedInteger('role_id');
        
            $table->foreign('nv_ma')->references('nv_ma')->on('nhanvien')
                ->onDelete('cascade')->onUpdate('CASCADE');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onDelete('cascade')->onUpdate('CASCADE');
        });
        DB::statement("ALTER TABLE `role_nhanvien` comment 'Quyền_nhanvien'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_nhanvien');
    }
}
