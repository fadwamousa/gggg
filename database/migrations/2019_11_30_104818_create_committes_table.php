<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommittesTable extends Migration
{

    public function up()
    {
        Schema::create('committes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
            $table->string('attachment')->nullable();//PDF
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('committes');
    }
}
