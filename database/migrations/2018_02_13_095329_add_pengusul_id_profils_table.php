<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPengusulIdProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('profils', function (Blueprint $table) {
            $table->integer('pengusul_id')->unsigned();
            $table->foreign('pengusul_id')->references('id')->on('pengusuls');
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
        Schema::table('profils', function (Blueprint $table) {
            $table->dropForeign(['pengusul_id']);
            $table->dropColumn('pengusul_id');
        });
    }
}
