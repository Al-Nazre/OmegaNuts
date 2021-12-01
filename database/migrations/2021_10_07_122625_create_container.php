<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('container', function (Blueprint $table) {
             $table->id();
            $table->integer('user_id');
            $table->string('container_image');
            $table->string('container_name');
            $table->integer('container_volume');
            $table->boolean('favorite')->deafult(false);
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
        Schema::dropIfExists('container');
    }
}
