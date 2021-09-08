<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_models', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('car_id');
            $table->string('name');
            $table->timestamps();
            $table->foreign('car_id')
                ->references('id')
                ->on('cars')
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
        Schema::dropIfExists('cars_models');
    }
}