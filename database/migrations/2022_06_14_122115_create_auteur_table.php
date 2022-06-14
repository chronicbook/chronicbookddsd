<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auteur', function (Blueprint $table) {
            $table->id();
            $table->foreignId("ADMINS_ID")->constrained("admins");
            $table->string("NOM_AUTEUR");
            $table->string("PRENOM_AUTEUR");
            $table->string("LOGIN_AUTEUR");
            $table->string("EMAIL_AUTEUR");
            $table->string("TEL_AUTEUR");
            $table->string("VILLE_AUTEUR");
            $table->string("REFERENCE_AUTEUR");
            $table->string("PWD_AUTEUR");
            $table->string("PROFIL_AUTEUR");
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
        schema::table("auteur",function (Blueprint $table){
            $table->dropConstrainedForeignId("ADMINS_ID");
        });
        Schema::dropIfExists('auteur');
    }
}
