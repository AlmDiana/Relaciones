<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    // RELACIÓN DE UNO A MUCHOS
    public function customer_movie()
    {
        return $this->belongsTo(Customer_movie::class);
    }
}
