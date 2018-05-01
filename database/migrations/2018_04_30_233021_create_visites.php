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

            $table->increments('num_visite');

            $table->string('cin', 254);
            $table->foreign('cin')->references('cin')->on('visiteurs')
                ->onDelete('RESTRICT')
                ->onUpdate('CASCADE');

            $table->integer('num_motif')->unsigned();
            $table->foreign('num_motif')->references('num_motif')->on('motifs')
                ->onDelete('RESTRICT')
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
