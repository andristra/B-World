<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('game_id')->unsigned();
            $table->integer('purchased_n')->default(0);
			$table->integer('rented_n')->default(0);
            $table->timestamps();
        });
			Schema::table('inventory',function (Blueprint $table) {
			$table->foreign('game_id')->references('id')->on('games');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('inventory');
    }
}
