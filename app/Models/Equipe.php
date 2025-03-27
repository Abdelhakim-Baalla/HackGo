<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom'
    ];

    public function utilisateur() 
    {
        return $this->hasMany(Utilisateur::class);
    }

    public function projet() 
    {
        return $this->hasOne(projet::class);
    }

    public function note() 
    {
        return $this->hasMany(Note::class);
    }
}
