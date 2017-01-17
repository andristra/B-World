<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote', function (Blueprint $table) {
            $table->increments('vote_ID');
			$table->primary('vote_ID');
			$table->increments('user_ID');
			$table->foreign('user_ID')->references('user_ID')->on('user');
			$table->increments('game_ID');
			$table->foreign('game_ID')->references('game_ID')->on('game');
			$table->unique(['user_ID', 'game_ID']);	
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
        Schema::dropIfExists('vote');
    }
}
