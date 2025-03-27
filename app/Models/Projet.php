<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'github',
        'titre'
    ];

    public function equipe() 
    {
        return $this->hasOne(Equipe::class);
    }
}
