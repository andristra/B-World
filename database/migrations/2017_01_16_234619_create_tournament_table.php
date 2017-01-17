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
         Schema::create('tournament', function (Blueprint $table) {
            $table->increments('tournament_ID');
			$table->primary('tournament_ID');
			$table->increments('game_ID');
			$table->foreign('game_ID')->references('game_ID')->on('game');
            $table->string('info_s')->nullable();
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
               Schema::dropIfExists('tournament');

    }
}
