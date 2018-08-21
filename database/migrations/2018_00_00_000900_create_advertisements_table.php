<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisement_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('manager_id');
            $table->string('name');
            $table->string('bio');
            $table->string('size');
            $table->unsignedTinyInteger('price')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
        
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->string('image');
            $table->string('status')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('manager_id');
            $table->unsignedInteger('advertisement_category_id');
            $table->timestamp('opening_at')->nullable();
            $table->timestamp('closing_at')->nullable();
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
        Schema::dropIfExists('advertisement_categories');
        Schema::dropIfExists('advertisements');
    }
}
