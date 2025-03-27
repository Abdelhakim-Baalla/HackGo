<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description'
    ];

    public function utilisateur() 
    {
        return $this->belongsToMany(Utilisateur::class);
    }
}
