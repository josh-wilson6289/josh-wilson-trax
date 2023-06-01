<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date');
            $table->float('miles');
            
            // I know that this column should reference the cars table,
            // but I'm having a hard time getting the below code to work.
            // For now, I'm just creating the 'car_id' column so the code runs.

            // $table->foreign('car_id')->references('id')->on('cars');
            $table->string('car_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
};
