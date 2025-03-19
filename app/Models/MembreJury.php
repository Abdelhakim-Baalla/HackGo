<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembreJury extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'code'
    ];

    public function note() 
    {
        return $this->belongsToMany(Note::class);
    }
}
