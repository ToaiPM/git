<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenSP',50);
            $table->string('GiaBan',50);
            $table->string('HinhAnh',50);
            $table->text('MoTa');
            $table->integer('TinhTrang')->default(1);
            $table->integer('LuotXem')->default(0);
            $table->integer('loaisp_id')->unsigned();
            $table->foreign('loaisp_id')->references('id')->on('loaisp')->onDelete('cascade');
            $table->integer('hedieuhanh_id')->unsigned();
            $table->foreign('hedieuhanh_id')->references('id')->on('hedieuhanh')->onDelete('cascade');
            $table->integer('hangsx_id')->unsigned();
            $table->foreign('hangsx_id')->references('id')->on('hangsx')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
