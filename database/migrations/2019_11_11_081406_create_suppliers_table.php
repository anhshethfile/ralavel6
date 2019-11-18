<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('l_name','100');
            $table->string('f_name','100');
            $table->string('gender','10');
            $table->string('books','100');
            $table->string('newspaper','100');
            $table->string('magazines','100');
            $table->string('address','100');
            $table->string('contact_no','100');
            $table->string('email_id','100');
            $table->string('remarks','100');
            $table->string('delete','10');
            $table->string('status','10');
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
        Schema::dropIfExists('suppliers');
    }
}
