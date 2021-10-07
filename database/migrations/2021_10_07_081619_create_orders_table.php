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
            $table->bigInteger('price_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->double('discount')->default(0);
            $table->double('total');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('price_id')
                    ->references('id')
                    ->on('prices')
                    ->onDelete('cascade');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('status_id')
                    ->references('id')
                    ->on('statuses')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
