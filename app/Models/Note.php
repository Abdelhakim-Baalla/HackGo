<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'note',
        'commentaire'
    ];

    public function equipe() 
    {
        return $this->hasOne(Equipe::class);
    }

    public function membreJury() 
    {
        return $this->belongsToMany(MembreJury::class);
    }
}
