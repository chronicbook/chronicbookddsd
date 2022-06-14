<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livre extends Model
{
    use HasFactory;

    public function livre(){
        $this->hasOne(auteur::class);
    }
}
