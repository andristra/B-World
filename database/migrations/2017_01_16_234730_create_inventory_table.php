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
            $table->increments('inventory_ID');
			$table->integer('game_ID')->unsigned();
            $table->integer('purchased_n')->default(0);
			$table->integer('rented_n')->default(0);
            $table->timestamps();
        });
			Schema::table('inventory',function (Blueprint $table) {
			$table->foreign('game_ID')->references('game_ID')->on('game');
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
