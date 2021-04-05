<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGouvernoratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gouvernorat', function (Blueprint $table) {
            $table->integer('id', true);
            $table->foreign('id_gouvernorat')->references('id')->on('gouvernorat')->onDelete('cascade');

            $table->longText('nom_gouvernorat_fr')->nullable();
            $table->longText('nom_gouvernorat_ar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gouvernorat');
    }
}
