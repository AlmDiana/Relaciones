<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // RELACIÓN DE MUCHOS A MUCHOS 
    public function classes()
    {
        return $this->belongsToMany(Classe::class)->withTimestamps();
    }
}
