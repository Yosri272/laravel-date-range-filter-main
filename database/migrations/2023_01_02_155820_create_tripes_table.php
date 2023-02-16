<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tripes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('date_id')->nullable();
            $table->longText('captain_id')->nullable();
            $table->longText('captain_name')->nullable();
            $table->longText('phone_number')->nullable();
            $table->longText('captain_action')->nullable();
            $table->longText('trip_status')->nullable();
            $table->longText('total_fare')->nullable();
            $table->longText('eta')->nullable();
            $table->longText('t_id')->nullable();
            $table->longText('pickup_to_dropoff_distance')->nullable();
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
        Schema::dropIfExists('tripes');
    }
}
