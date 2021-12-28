<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_movie extends Model
{
    use HasFactory;
    // RELACIÓN DE UNO A MUCHOS
    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket');
    }
}
