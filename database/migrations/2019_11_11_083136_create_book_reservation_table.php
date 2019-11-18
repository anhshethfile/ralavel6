<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_reservation', function (Blueprint $table) {
            $table->string('AccessionNo','255');
            $table->integer('staff_id','100');
            $table->string('delete','10');
            $table->string('status','10');
            $table->string('remarks','100');
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
        Schema::dropIfExists('book_reservation');
    }
}
