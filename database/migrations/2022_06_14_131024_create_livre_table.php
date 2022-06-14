<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livre', function (Blueprint $table) {
            $table->id();
            $table->foreignId("AUTEUR_ID")->constrained("auteur");
            $table->string("TITRE");
            $table->string("DESCRIPTION");
            $table->string("CATEGORIE");
            $table->string("PRIX");
            $table->string("FICHIER");
            $table->string("AFFICHE");
            $table->string("NB_LIKE");
            $table->string("NB_ACHAT");
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table("etudians",function (Blueprint $table){
            $table->dropConstrainedForeignId("AUTEUR_ID");
        });
        Schema::dropIfExists('livre');
    }
}
