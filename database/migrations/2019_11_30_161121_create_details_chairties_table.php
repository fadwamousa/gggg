<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsChairtiesTable extends Migration
{

    public function up()
    {
        Schema::create('details_chairties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('heading');
            $table->text('body');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('details_chairties');
    }
}
