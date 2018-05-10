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

            $table->increments('id');
            $table->integer('id_droit')->unsigned();
            $table->integer('id_visite')->unsigned();

            $table->foreign('id_droit')
                ->references('id')->on('droitacces')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_visite')
                ->references('id')->on('visites')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            //$table->primary('num_droit', 'num_visite');

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
