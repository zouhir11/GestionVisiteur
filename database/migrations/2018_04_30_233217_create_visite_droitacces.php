<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisiteDroitacces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visite_droitacces', function (Blueprint $table) {

            $table->integer('num_droit')->unsigned();
            $table->integer('num_visite')->unsigned();

            $table->foreign('num_droit')
                ->references('num_droit')->on('droitacces')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('num_visite')
                ->references('num_visite')->on('visites')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->primary('num_droit', 'num_visite');

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
        Schema::dropIfExists('visite_droitacces');
    }
}
