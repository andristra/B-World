<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tournaments', function (Blueprint $table) {
            $table->increments('tournament_ID');
			$table->integer('game_ID')->unsigned();
            $table->string('info_s')->nullable();
            $table->timestamps();
        });
		
		Schema::table('tournaments',function (Blueprint $table) {
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
               Schema::dropIfExists('tournaments');

    }
}
