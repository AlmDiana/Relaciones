<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;
    // RELACIÓN DE UNO A UNO
    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }

    // RELACIÓN DE UNO A UNO
    public function location()
    {
        return $this->hasOne(Location::class);
    }
}
