<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index()->unsigned();
            $table->bigInteger('start_city_id')->index()->unsigned();
            $table->bigInteger('destination_city_id')->index()->unsigned();
            $table->bigInteger('status_id')->index()->unsigned();
            $table->bigInteger('driver_id')->index()->unsigned()->nullable();
            $table->text('comment')->nullable();
	        $table->foreign('user_id')
		        ->on('users')
		        ->references('id');

	        $table->foreign('driver_id')
		        ->on('users')
		        ->references('id');

	        $table->foreign('status_id')
		        ->on('order_statuses')
		        ->references('id');

	        $table->foreign('start_city_id')
		        ->on('cities')
		        ->references('id');

	        $table->foreign('destination_city_id')
		        ->on('cities')
		        ->references('id');


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
        Schema::dropIfExists('orders');
    }
}
