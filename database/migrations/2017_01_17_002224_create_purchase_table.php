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
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments('purchase_ID');
			$table->primary('purchase_ID');
			$table->increments('user_ID');
			$table->foreign('user_ID')->references('user_ID')->on('user');
			$table->increments('inventory_ID');
			$table->foreign('inventory_ID')->references('inventory_ID')->on('inventory');
			$table->unique('inventory_ID');
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
                Schema::dropIfExists('purchase');

    }
}
