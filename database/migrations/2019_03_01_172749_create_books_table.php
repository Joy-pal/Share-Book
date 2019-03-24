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
            $table->increments('book_id');
            $table->unsignedSmallInteger('book_user_id');
            $table->string('book_name');
            $table->string('book_slug',100)->unique();
            $table->string('book_author');
            $table->longText('book_description')->nullable();
            $table->string('book_condition')->default('old');
            $table->float('book_price', 8, 2);
            $table->boolean('book_price_negotiable')->default(false);
            $table->year('book_published_at');
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
        Schema::dropIfExists('books');
    }
}
