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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->text('body');
            $table->unsignedTinyInteger('layer')->default(0);
            $table->string('status')->nullable();
            $table->unsignedInteger('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn')->nullable();
            $table->string('name');
            $table->text('body');
            $table->string('image');
            $table->unsignedInteger('count_body')->default(0);
            $table->unsignedInteger('price')->default(0);
            $table->string('status')->nullable();
            $table->boolean('is_complete')->default(false);
            $table->boolean('is_vip')->default(false);
            $table->boolean('is_mothy')->default(false);
            $table->boolean('is_18')->default(false);
            $table->unsignedInteger('author_id');
            // $table->unsignedInteger('post_category_id');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('book_id');
            $table->unsignedTinyInteger('no')->default(0);
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('chapter_id');
            $table->unsignedTinyInteger('no')->default(0);
            $table->string('name');
            $table->text('body');
            $table->unsignedInteger('count_body');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('chapter_id');
            $table->unsignedTinyInteger('no')->default(0);
            $table->string('name');
            $table->text('body');
            $table->unsignedInteger('count_body');
            $table->softDeletes();
            $table->timestamps();
        });
        
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('body');
            $table->string('status')->nullable();
            $table->unsignedInteger('count_body')->default(0);
            $table->unsignedInteger('parent_id')->default(0);
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('user_id');
            $table->softDeletes();
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('books');
        Schema::dropIfExists('chapters');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('comments');
    }
}
