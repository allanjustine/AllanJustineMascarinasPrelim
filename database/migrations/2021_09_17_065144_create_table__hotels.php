<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hotels', function (Blueprint $table) {
            $table->id();
            $table->string('yourName', 100)->nullable;
            $table->string('yourAddress', 100)->nullable;
            $table->string('hotelName', 100)->nullable;
            $table->string('hotelNumber', 100)->nullable;
            $table->string('hotelAddress', 100)->nullable;
            $table->date('dateAttended')->nullable;
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
        Schema::dropIfExists('Hotels');
    }
}
