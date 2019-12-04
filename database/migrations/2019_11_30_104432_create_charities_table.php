<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharitiesTable extends Migration
{

    public function up()
    {
        Schema::create('charities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vision');
            $table->string('message');
            $table->string('name');
            $table->string('slug');
            $table->text('wakf_body');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('charities');
    }
}
