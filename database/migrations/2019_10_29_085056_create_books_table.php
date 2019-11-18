<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('created_by');
            $table->unsignedInteger('last_updated_by')->nullable();
            $table->string('isbn_number', '25')->unique();
            $table->string('code', '15');
            $table->string('title', '250');
            $table->string('sub_title', '250')->nullable();
            $table->text('image')->nullable();
            $table->string('language', '100')->nullable();
            $table->string('editor', '200')->nullable();
            $table->string('categories', '200')->nullable();
            $table->string('edition', '200')->nullable();
            $table->string('edition_year', '200')->nullable();
            $table->string('publisher', '200')->nullable();
            $table->string('publish_year', '200')->nullable();
            $table->string('series', '200')->nullable();
            $table->string('author', '200');
            $table->string('rack_location', '200')->nullable();
            $table->string('price', '200');
            $table->string('total_pages', '200')->nullable();
            $table->string('source', '200')->nullable();
            $table->string('notes', '200')->nullable();

            $table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
