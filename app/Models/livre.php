<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livre extends Model
{
    use HasFactory;
    protected $table = 'livre';
    public function livre(){
        return $this->belongsTo(auteur::class);
    }
}
