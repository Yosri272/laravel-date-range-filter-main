<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motor', 127)->nullable();
            $table->string('plate_number', 127)->nullable();
            $table->string('status')->nullable();
            $table->integer('oil_change',100)->nullable()->default(0);
            $table->integer('c_folg')->nullable()->default(0);
            $table->string('counter_number')->nullable();
            $table->string('license_number')->nullable();
            $table->string('counter')->nullable();
            $table->string('license_date')->nullable();
            $table->string('maintenance_date')->nullable();
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
        Schema::dropIfExists('motors');
    }
}
