<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            $table->bigIncrements('id',100);
            $table->string('enrollment_no',250);
            $table->unsignedInteger('u_id');
            // $table->integer('u_id',100);
            $table->string('name',100);
            $table->string('gender',10);
            $table->string('father_name',250);
            $table->string('mother_name',250);
            $table->string('father_cn',100);
            $table->string('permanent_address',250);
            $table->string('temp_address',250);
            $table->string('contact_no',250);
            $table->string('email_id',250);
            $table->string('dob',250);
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
        Schema::dropIfExists('students');
    }
}
