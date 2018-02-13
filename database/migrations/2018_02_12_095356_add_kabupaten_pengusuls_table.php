<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKabupatenPengusulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pengusuls', function (Blueprint $table) {
            $table->string('kabupaten')->after('lembaga');
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
        Schema::table('pengusuls', function (Blueprint $table) {
            $table->dropColumn('kabupaten');
        });
    }
}
