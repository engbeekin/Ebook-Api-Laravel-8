<?php

use App\Models\Categories;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('book_name');
            $table->string('author')->nullable();
            $table->text('book_description')->nullable();
            $table->string('book_image')->nullable();
            $table->string('file_upload')->nullable();
            $table->integer('book_pages')->nullable();
            $table->date('publishing_year')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('book_type_id')->nullable();


            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('book_type_id')->references('id')->on('book_types')->onDelete('cascade');


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
