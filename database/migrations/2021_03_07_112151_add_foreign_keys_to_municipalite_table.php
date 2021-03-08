<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMunicipaliteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('municipalite', function (Blueprint $table) {
            $table->foreign('id_gouvernorat', 'municipalite_ibfk_1')->references('id')->on('gouvernorat')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_commune', 'municipalite_ibfk_2')->references('id')->on('commune')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('municipalite', function (Blueprint $table) {
            $table->dropForeign('municipalite_ibfk_1');
            $table->dropForeign('municipalite_ibfk_2');
        });
    }
}
