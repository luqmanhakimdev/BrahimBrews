<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date');
            $table->unsignedBigInteger('dose1_daily');
            $table->unsignedBigInteger('dose2_daily');
            $table->unsignedBigInteger('total_daily');
            $table->unsignedBigInteger('dose1_cumul');
            $table->unsignedBigInteger('dose2_cumul');
            $table->unsignedBigInteger('total_cumul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccines');
    }
}
