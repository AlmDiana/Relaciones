<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    // RELACIÓN DE MUCHOS A MUCHOS 
    public function students()
    {
        return $this->belongsToMany(Student::class)->withTimestamps();
    }
}
