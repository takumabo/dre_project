<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
        $table->increments('id');
        $table->string('ename', 30); //物件名
        $table->string('eprice', 30); //物件価格
        $table->text('ewords'); //物件情報
        $table->text('epurl'); //google_place_url
        $table->text('eyurl'); //yotube_url
        $table->text('eimg'); //imgpath
        $table->string('ekind', 30); //種別
        $table->string('ebuild', 30); //完成予定
        $table->string('eplace', 30); //立地
        $table->string('efloor', 30); //階層
        $table->string('eroom', 30); //総戸数
        $table->string('eshare', 30); //占有面積
        $table->string('erange', 30); //間取り
        $table->string('eright', 30); //権利
        $table->string('eyield', 30); //実質利回り
        $table->text('econdition', 30); //条件
        $table->string('emanage', 30); //管理費
        $table->string('esale', 30)->nullable; //販売状況
        $table->text('extra'); //販売状況
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
        Schema::dropIfExists('diaries');
    }
}
