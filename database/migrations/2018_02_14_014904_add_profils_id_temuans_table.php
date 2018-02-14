<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfilsIdTemuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('temuans', function (Blueprint $table) {
            $table->integer('profil_id')->unsigned();
            $table->foreign('profil_id')->references('id')->on('profils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('temuans', function (Blueprint $table) {
            $table->dropColumn('profil_id');
        });
    }
}
