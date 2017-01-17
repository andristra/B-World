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
			$table->primary('inventory_ID');
			$table->increments('game_ID');
			$table->foreign('game_ID')->references('game_ID')->on('game');
            $table->integer('purchased_n')->default(0);
			$table->integer('rented_n')->default(0);
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
         Schema::dropIfExists('inventory');
    }
}
