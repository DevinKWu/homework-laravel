<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarqueesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marquees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status')->nullable();
            // $table->unsignedInteger('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('marquee_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sender_id');
            $table->unsignedInteger('receiver_id');
            $table->unsignedInteger('marquee_id');
            $table->string('body');
            $table->unsignedTinyInteger('price')->default(0);
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
        Schema::dropIfExists('marquees');
        Schema::dropIfExists('marquee_history');
        // Schema::dropIfExists('advertisements');
    }
}
