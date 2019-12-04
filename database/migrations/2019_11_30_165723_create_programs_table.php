<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{

    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('attachment');
            $table->date('date_program');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
