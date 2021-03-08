<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projet', function (Blueprint $table) {
            $table->foreign('id_commune', 'projet_ibfk_1')->references('id')->on('commune')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_gouvernorat', 'projet_ibfk_2')->references('id')->on('gouvernorat')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_municipalite', 'projet_ibfk_3')->references('id')->on('municipalite')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projet', function (Blueprint $table) {
            $table->dropForeign('projet_ibfk_1');
            $table->dropForeign('projet_ibfk_2');
            $table->dropForeign('projet_ibfk_3');
        });
    }
}
