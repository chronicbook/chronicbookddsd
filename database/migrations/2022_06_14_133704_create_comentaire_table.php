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
            $table->foreignId("ID_L")->constrained();
            $table->integer("ID_H");
            $table->string("EDITEUR");
            $table->string("CONTENU");
            $table->date("DATE")->nullable();
            $table->time("HEURE")->nullable();
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
        schema::table("comentaire",function (Blueprint $table){
            $table->dropConstrainedForeignId("ID_L");
        });
        Schema::dropIfExists('comentaire');
    }
}
