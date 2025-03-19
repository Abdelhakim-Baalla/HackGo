<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description'
    ];

    public function hackathon() 
    {
        return $this->belongsTo(Hackathon::class);
    }
}
