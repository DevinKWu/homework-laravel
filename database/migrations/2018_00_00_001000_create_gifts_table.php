<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gifts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedTinyInteger('price')->default(0);
            $table->string('status')->nullable();
            $table->unsignedInteger('manager_id');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('gift_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sender_id');
            $table->unsignedInteger('receiver_id');
            $table->unsignedInteger('good_id');
            $table->unsignedInteger('book_id');
            $table->unsignedTinyInteger('quantity')->default(0);
            $table->unsignedTinyInteger('price')->default(0);
            $table->timestamps();
        });
        // Schema::create('advertisements', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('url');
        //     $table->string('image');
        //     $table->string('status')->nullable();
        //     $table->unsignedInteger('user_id');
        //     $table->unsignedInteger('manager_id');
        //     $table->unsignedInteger('advertisement_category_id');
        //     $table->timestamp('opening_at')->nullable();
        //     $table->timestamp('closing_at')->nullable();
        //     $table->softDeletes();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gifts');
        Schema::dropIfExists('gift_history');
    }
}
