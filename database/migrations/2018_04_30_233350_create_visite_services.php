<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisiteServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visite_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_service')->unsigned();
            $table->integer('id_visite')->unsigned();

            $table->foreign('id_service')
                ->references('id')->on('services')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_visite')
                ->references('id')->on('visites')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            //$table->primary('num_service', 'num_visite');

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
        Schema::dropIfExists('visite_services');
    }
}
