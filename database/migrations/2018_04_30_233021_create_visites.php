<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visites', function (Blueprint $table) {

            $table->increments('id');

            $table->string('cin_visiteur');
            $table->string('nom_service');
            $table->string('etat_visite')->default('En Cours');
            $table->string('nom_motif');
            $table->date('date_visite');
            $table->dateTime('heure_entrer')->nullable();
            $table->dateTime('heure_sortie')->nullable();

            $table->integer('id_visiteur')->unsigned();
            $table->integer('id_motif')->unsigned();

            $table->foreign('id_visiteur')->references('id')->on('visiteurs')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_motif')->references('id')->on('motifs')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

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
        Schema::dropIfExists('visites');
    }
}
