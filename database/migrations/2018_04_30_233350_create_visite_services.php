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

            $table->string('num_service', 254);
            $table->integer('num_visite')->unsigned();

            $table->foreign('num_service')
                ->references('num_service')->on('services')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('num_visite')
                ->references('num_visite')->on('visites')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->primary('num_service', 'num_visite');

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
