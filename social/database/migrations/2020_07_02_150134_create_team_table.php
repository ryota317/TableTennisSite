<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            //チーム名
            $table->string('name');
            //県
            $table->string('prefecture');
            //チーム規模
            $table->string('scale');
            //チーム代表者名
            $table->string('representative')->nullable();
            //チーム練習タイミング
            $table->string('practice_time');
            //チーム説明
            $table->string('explanation');
            //作成者
            $table->integer('author')->references('id')->on('users');

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
        Schema::dropIfExists('teams');
    }
}
