<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apointment extends Model
{
    use HasFactory;

    public function home()
    {
        return $this->belongsTo(Home::class, 'home-id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer-id', 'id');
    }
}
