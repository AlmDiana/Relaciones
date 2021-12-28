<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // RELACIÓN DE UNO A MUCHOS
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
