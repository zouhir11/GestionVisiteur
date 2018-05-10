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

            $table->integer('id_visiteurs')->unsigned();
            $table->integer('id_motif')->unsigned();

            $table->foreign('id_visiteurs')->references('id')->on('visiteurs')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_motif')->references('id')->on('motifs')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->dateTime('date_visite');
            $table->dateTime('heure_entrer');
            $table->dateTime('heure_sortie');

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
