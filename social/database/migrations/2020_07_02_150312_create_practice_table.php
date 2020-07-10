<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practices', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->id();
            //県
            $table->string('prefecture');
            //場所
            $table->string('place');
            //チーム名
            $table->string('name')->nullable();
            //練習時間
            $table->string('practice_time');
            //規模
            $table->string('scale')->nullable();
            //レベル
            $table->string('level')->nullable();
            //参加費
            $table->integer('entry_fee');
            //説明
            $table->string('explanation')->nullable();
            //投稿者
            $table->integer('contributor')->references('id')->on('users');

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
        Schema::dropIfExists('practices');
    }
}
