<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisiteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiteurs', function (Blueprint $table) {
            $table->string('cin', 254);
            $table->string('nom', 254);
            $table->string('prenom', 254);
            $table->string('email', 254);
            $table->string('tel', 254);
            $table->string('provenance', 254);
            $table->string('motif', 254);
            $table->string('nom_service', 254);
            $table->date('date_visite', 254);

            $table->primary('cin');

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
        Schema::dropIfExists('visiteurs');
    }
}
