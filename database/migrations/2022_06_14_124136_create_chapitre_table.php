<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapitreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapitre', function (Blueprint $table) {
            $table->id();
            $table->foreignId("ID_H")->constrained("historique");
            $table->string("TITRE_C");
            $table->string("INTRO_C");
            $table->string("TEXTE_C");
            $table->string("NB_V");
            $table->string("NB_LIKE");
            $table->string("NUMERO_CHAP");
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table("etudians",function (Blueprint $table){
            $table->dropConstrainedForeignId("ADMINS_ID");
        });
        Schema::dropIfExists('chapitre');
    }
}
