<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            //id
            $table->integer('id')->references('id')->on('users');
            //性別
            $table->string('gender');
            //経験年数
            $table->integer('experience')->nullable();
            //所属チーム
            $table->string('belong_team')->nullable();
            //希望　練習時間や曜日
            $table->string('hope_practice_time')->nullable();
            //自己紹介
            $table->string('self_introduction')->nullable();

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
        Schema::dropIfExists('profiles');
    }
}
