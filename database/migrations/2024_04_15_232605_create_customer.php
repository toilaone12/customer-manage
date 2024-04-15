<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('idKH');
            $table->string('maKH',50);
            $table->string('tenKH',50);
            $table->string('phanLoai', 50);
            $table->string('diaChi', 50);
            $table->string('soDienThoai', 10);
            $table->string('email', 255);
            $table->string('maSoThue', 20);
            $table->string('nguoiLienHe', 50);
            $table->string('moTa', 255);
            $table->string('yeuCau', 255);
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
        Schema::dropIfExists('customer');
    }
}
