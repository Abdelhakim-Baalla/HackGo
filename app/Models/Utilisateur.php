<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password'
    ];

    public function role() 
    {
        return $this->belongsToMany(Role::class);
    }

    public function equipe() 
    {
        return $this->belongsTo(Equipe::class);
    }

    public function hackathon() 
    {
        return $this->hasOne(Hackathon::class);
    }
}
