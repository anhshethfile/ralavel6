<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('staff_name', '250');
            $table->string('dateofjoining', '100');
            $table->string('father_name', '10');
            $table->string('temporary_address', '250');
            $table->string('permanent_address', '250');
            $table->string('designation', '100');
            $table->string('qualification', '250');
            $table->string('DOB', '250');
            $table->string('phone_no', '250');
            $table->string('mobile_no', '250');
            $table->string('email', '100')->unique();
            $table->string('photo', '250');
            $table->string('status', '250');
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
        Schema::dropIfExists('staff');
    }
}
