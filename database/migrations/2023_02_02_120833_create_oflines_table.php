<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOflinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oflines', function (Blueprint $table) {
            $table->id();
            $table->longText('order_date')->nullable();
            $table->longText('customer_name')->nullable();
            $table->longText('customer_location')->nullable();
            $table->longText('phone_number')->nullable();
            $table->longText('income')->nullable();
            $table->longText('delevery_fees')->nullable();
            $table->longText('status')->nullable();
            $table->longText('captain_name')->nullable();
            $table->longText('product_type')->nullable();
            $table->longText('payment')->nullable();
            $table->longText('merchant')->nullable();
            $table->longText('note')->nullable();
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
        Schema::dropIfExists('oflines');
    }
}
