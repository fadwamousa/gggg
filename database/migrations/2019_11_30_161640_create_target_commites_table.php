<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTargetCommitesTable extends Migration
{

    public function up()
    {
        Schema::create('target_commites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('target');
            $table->bigInteger('committes_id')->index()->unsigned();
            $table->foreign('committes_id')->references('id')->on('committes')->onDelete('cascade');
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
        Schema::dropIfExists('target_commites');
    }
}
