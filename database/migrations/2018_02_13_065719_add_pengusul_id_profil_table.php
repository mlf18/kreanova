<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPengusulIdProfilTable extends Migration
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
            $table->integer('pengusul_id')->after('pengembangan');
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
            $table->dropColumn('pengusul_id');
        });
    }
}
