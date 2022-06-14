<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auteur extends Model
{
    use HasFactory;
    protected $table = 'auteur';

    public function classe (){
        $this->hasOne(admins::class);
    }
}
