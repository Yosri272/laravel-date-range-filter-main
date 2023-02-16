<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaptainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('captains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_type', 127)->nullable();
            $table->string('name', 127)->nullable();
            $table->integer('phone')->nullable();
            $table->string('status')->nullable();
            $table->integer('pin_code')->nullable();
            $table->integer('c_folg')->nullable()->default(0);
            $table->string('motor')->nullable();
            $table->integer('license_number')->nullable()->default(0); // added
            $table->date('end_date'); // added
            $table->integer('Salary')->nullable()->default(0);
            $table->boolean('bonce', 8, 2)->nullable(); // added
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
        Schema::dropIfExists('captains');
    }
}
