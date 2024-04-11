<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserTableAddIsAdmin extends Migration
{
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->boolean('is_admin')->default(0);
        });
    }

    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            if (Schema::hasColumns('users',['is_admin'])) {
                $table->dropColumn('is_admin');
            }
        });
    }
}
