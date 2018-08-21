<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('browsing', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('type_id');
            $table->timestamps();
        });
        
        Schema::create('borrow', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('type_id');
            $table->timestamp('opening_at')->nullable();
            $table->timestamp('closing_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('purchase', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

        Schema::create('month', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

        Schema::create('recommend', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('browsing');
        Schema::dropIfExists('borrow');
        Schema::dropIfExists('purchase');
        Schema::dropIfExists('month');
        Schema::dropIfExists('recommend');
    }
}
