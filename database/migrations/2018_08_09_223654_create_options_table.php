<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function(Blueprint $table)
         {
             $table->increments('option_id')->unsigned();
             $table->string('option_name');
             $table->string('option_value',1000);
             $table->json('option_data')->nullable();
             $table->integer('created_by')->unsigned();
             $table->foreign('created_by')->references('id')
                ->on('users');
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
        Schema::dropIfExists('options');
    }
}
