<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hackathon extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'date'
    ];

    public function utilisateur() 
    {
        return $this->hasOne(Utilisateur::class);
    }

    public function planing() 
    {
        return $this->hasOne(planing::class);
    }

    public function theme() 
    {
        return $this->hasMany(Theme::class);
    }

    public function rule() 
    {
        return $this->hasMany(Rule::class);
    }
}
