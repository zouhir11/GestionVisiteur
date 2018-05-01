<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->string('cin_personne', 254);
            $table->integer('num_role')->unsigned();
            $table->string('num_service', 254);
            $table->string('nom_personne', 254);
            $table->string('prenom_personne', 254);
            $table->string('type_personne', 254);
            $table->string('email', 254);
            $table->string('mot_passe', 254);

            $table->foreign('num_role')
                ->references('num_role')->on('roles')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('num_service')
                ->references('num_service')->on('services')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->primary('cin_personne');

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
        Schema::dropIfExists('personnels');
    }
}
