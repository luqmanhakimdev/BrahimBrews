<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabFlavor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab_flavor', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('flavor_name');
            $table->unsignedBigInteger('stock_in')->nullable();
            $table->unsignedBigInteger('stock_out')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cab_flavor');
    }
}
