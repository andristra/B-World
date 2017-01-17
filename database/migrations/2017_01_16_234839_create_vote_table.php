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
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('vote_ID');
			$table->integer('user_ID')->unsigned();
			$table->integer('game_ID')->unsigned();
			$table->unique(['user_ID', 'game_ID']);	
            $table->timestamps();
        });
		
		Schema::table('votes',function (Blueprint $table) {
			$table->foreign('user_ID')->references('user_ID')->on('users');
			$table->foreign('game_ID')->references('game_ID')->on('games');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}
