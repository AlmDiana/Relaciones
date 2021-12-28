<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;

    //RELACIÓN DE UNO A UNO
    public function processor()
    {
        return $this->hasOne(Processor::class);
    }
}
