<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote', function (Blueprint $table) {
            $table->increments('maBG');
            $table->string('tenBG',50);
            $table->string('mucTieu',255);
            $table->string('phamViApDung', 255);
            $table->date('ngayLap');
            $table->date('thoiHanApDung');
            $table->text('phuLuc');
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
        Schema::dropIfExists('quote');
    }
}
