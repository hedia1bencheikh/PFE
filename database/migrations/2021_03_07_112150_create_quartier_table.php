<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quartier', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_projet')->nullable()->index('id_projet');
            $table->string('nom', 1000)->nullable();
            $table->float('lat', 10, 6);
            $table->float('lng', 10, 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quartier');
    }
}
