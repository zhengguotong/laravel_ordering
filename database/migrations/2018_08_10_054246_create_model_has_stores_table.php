<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelHasStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_has_stores', function (Blueprint $table) {
            $table->unsignedInteger('store_id');
            $table->morphs('model');

            $table->foreign('store_id')
                ->references('store_id')
                ->on('stores')
                ->onDelete('cascade');

            $table->primary(['store_id', 'model_id', 'model_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_has_stores');
    }
}
