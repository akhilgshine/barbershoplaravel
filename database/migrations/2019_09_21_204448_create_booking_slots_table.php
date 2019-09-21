<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('booking_slots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('barber_id')->unsigned()->index();;
            $table->timestamp('booking_time');


            $table->timestamps();
            $table->foreign('barber_id')->references('id')->on('barbers')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_slots');

    }
}
