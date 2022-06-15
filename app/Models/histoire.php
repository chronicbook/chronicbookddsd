<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class histoire extends Model
{
    use HasFactory;
    protected $table = 'histoire';
    public function histoire(){
        return $this->belongsTo(auteur::class);
    }
}
