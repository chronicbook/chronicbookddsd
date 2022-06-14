<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentaire', function (Blueprint $table) {
            $table->id();
            $table->integer("ID_L");
            $table->integer("ID_H");
            $table->string("EDITEUR");
            $table->string("CONTENU");
            $table->date("DATE")->nullable();
            $table->time("HEURE")->nullable();
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
        Schema::dropIfExists('comentaire');
    }
}
