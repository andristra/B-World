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
            $table->increments('purchase_ID');
			$table->integer('user_ID')->unsigned();
			$table->integer('inventory_ID')->unsigned();
			$table->unique('inventory_ID');
            $table->timestamps();
        });
		Schema::table('purchases',function (Blueprint $table) {
			$table->foreign('user_ID')->references('user_ID')->on('users');
			$table->foreign('inventory_ID')->references('inventory_ID')->on('inventory');
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
