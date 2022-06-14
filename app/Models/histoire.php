<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class histoire extends Model
{
    use HasFactory;

    public function histoire(){
        $this->hasOne(auteur::class);
    }
}
