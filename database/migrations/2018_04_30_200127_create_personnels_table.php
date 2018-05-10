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
            $table->increments('id');
            $table->string('cin_personnel', 254)->unique();
            $table->integer('id_role')->unsigned();
            $table->integer('id_service')->unsigned();
            $table->string('nom_personnel', 254);
            $table->string('prenom_personnel', 254);
            $table->string('type_personnel', 254);
            $table->string('email', 254)->unique();
            $table->string('mot_passe', 254);

            $table->foreign('id_role')
                ->references('id')->on('roles')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->foreign('id_service')
                ->references('id')->on('services')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            //$table->primary('cin_personne');

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
