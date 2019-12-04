<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration
{

    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('career_name');
            $table->date('date_hiring');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
