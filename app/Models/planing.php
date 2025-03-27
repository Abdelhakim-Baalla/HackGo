<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planing extends Model
{
    use HasFactory;

    protected $fillable = [
        'activites'
    ];

    public function hackathon() 
    {
        return $this->hasOne(Hackathon::class);
    }
}
