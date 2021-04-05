<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_gouvernorat')->nullable()->index('id_gouvernorat');
            $table->foreign('id_gouvernorat')->references('id')->on('gouvernorat')->onDelete('cascade');

            $table->integer('rang_projet')->nullable();
            $table->integer('id_commune')->nullable()->index('id_commune');
            $table->integer('id_municipalite')->nullable()->index('id_municipalite');
            $table->integer('nombre_quartier')->nullable();
            $table->integer('nombre_maison')->nullable();
            $table->integer('nombre_habitant')->nullable();
            $table->integer('superficie_quartier')->nullable();
            $table->integer('superficie_quartier_couvert')->nullable();
            $table->integer('rapport_superificie')->nullable();
            $table->integer('taux_habitation')->nullable();
            $table->integer('rapport_depense_maison')->nullable();
            $table->longText('composante_projet')->nullable();
            $table->float('assainissement_qte', 20, 3)->nullable();
            $table->integer('assainissement_cout')->nullable();
            $table->integer('assainissement_taux')->nullable();
            $table->integer('eclairage_public_qte')->nullable();
            $table->integer('eclairage_public_cout')->nullable();
            $table->integer('eclairage_public_taux')->nullable();
            $table->float('voirie_qte', 20, 3)->nullable();
            $table->integer('voirie_cout')->nullable();
            $table->integer('voirie_taux')->nullable();
            $table->float('eau_potable_qte', 20, 3)->nullable();
            $table->integer('eau_potable_cout')->nullable();
            $table->integer('eau_potable_taux')->nullable();
            $table->float('drainage_qte', 20, 3)->nullable();
            $table->integer('drainage_cout')->nullable();
            $table->integer('drainage_taux')->nullable();
            $table->integer('amel_habitat_qte')->nullable();
            $table->integer('amel_habitat_cout')->nullable();
            $table->integer('socio_collectif_cout')->nullable();
            $table->integer('industriel_cout')->nullable();
            $table->integer('cout_total')->nullable();
            $table->float('lat', 10, 6);
            $table->float('lng', 10, 6)->unsigned();
            $table->string('type', 30);
            $table->string('image1', 30);
            $table->string('image2', 30);
            $table->string('image3', 30);
            $table->string('image4', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projet');
    }
}
