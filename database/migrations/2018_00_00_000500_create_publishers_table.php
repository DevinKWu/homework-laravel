<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->nullable();
            $table->string('name')->unique();
            $table->string('status')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar')->nullable();
            $table->string('name')->unique();
            $table->unsignedTinyInteger('sex')->default(0);
            $table->string('status')->nullable();
            $table->text('bio')->nullable();
            $table->unsignedInteger('count_book')->default(0);
            $table->unsignedInteger('count_mothy')->default(0);
            $table->unsignedInteger('count_recommend')->default(0);
            $table->unsignedInteger('count_gift')->default(0);
            $table->unsignedInteger('price')->default(0);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('publisher_id');
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
        Schema::dropIfExists('publishers');
        Schema::dropIfExists('authors');
    }
}
