<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // RELACIÓN DE UNO A MUCHOS
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
