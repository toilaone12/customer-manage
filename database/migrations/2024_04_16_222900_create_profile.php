<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('maHSTT');
            $table->string('loaiHS',50);
            $table->date('ngayLap');
            $table->string('noiDung', 255);
            $table->string('canCu', 255);
            $table->double('soTien', 255);
            $table->date('thoiHanThanhToan');
            $table->string('hinhThucThanhToan',255);
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
        Schema::dropIfExists('profile');
    }
}
