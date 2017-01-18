<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('inventory_id')->unsigned();
			$table->unique('inventory_id');
            $table->timestamps();
        });
		Schema::table('purchases',function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('inventory_id')->references('id')->on('inventory');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::dropIfExists('purchases');

    }
}
