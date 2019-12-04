<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsActiveToUsers extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->integer('is_active')->default(0);
        });
    }


    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('is_active');
        });
    }
}
