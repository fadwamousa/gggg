<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleIdToUsers extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->bigInteger('role_id')->index()->unsigned()->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
