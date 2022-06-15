<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auteur extends Model
{
    use HasFactory;
    protected $table = 'auteur';
    protected $filetable =['NOM_AUTEUR','PRENOM_AUTEUR','LOGIN_AUTEUR','TEL_AUTEUR','EMAIL_AUTEUR','REFERENCE_AUTEUR','VILLE_AUTEUR','PWD_AUTEUR','PROFIL_AUTEUR'];

    public function admins (){
        return $this->belongsTo(admins::class);
    }
}
