<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{

    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_template');
            $table->string('attachment');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('templates');
    }
}
