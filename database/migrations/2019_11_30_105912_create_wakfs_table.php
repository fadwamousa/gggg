<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWakfsTable extends Migration
{

    public function up()
    {
        Schema::create('wakfs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('heading');
            $table->text('body');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('wakfs');
    }
}
