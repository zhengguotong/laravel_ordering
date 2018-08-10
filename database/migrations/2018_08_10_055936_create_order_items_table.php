<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('item_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('order_id')
            ->on('orders');
            $table->integer('entity_id');
            $table->string('item_type',255);
            $table->decimal('quantity',8,2);
            $table->integer('item_total_price');
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
        Schema::dropIfExists('order_items');
    }
}
