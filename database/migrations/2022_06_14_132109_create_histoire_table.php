<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histoire', function (Blueprint $table) {
            $table->id();
            $table->foreignId("AUTEUR_ID")->constrained("auteur");
            $table->string("TITRE");
            $table->string("INTRO");
            $table->string("AFFICHE");
            $table->integer("NB_L");
            $table->integer("NB_V");
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
        schema::table("histoire",function (Blueprint $table){
            $table->dropConstrainedForeignId("AUTEUR_ID");
        });
        Schema::dropIfExists('histoire');
    }
}
