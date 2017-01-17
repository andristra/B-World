<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('rents', function (Blueprint $table) {
            $table->increments('rent_ID');
			$table->date('rented_at_d');
            $table->float('rate_2n',3,2);
			$table->integer('user_ID')->unsigned();
			$table->integer('inventory_ID')->unsigned();
			$table->unique('inventory_ID');
            $table->timestamps();
        });
		
		Schema::table('rents',function (Blueprint $table) {
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
                         Schema::dropIfExists('rents');

    }
}
