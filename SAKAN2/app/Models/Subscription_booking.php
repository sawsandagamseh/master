<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription_booking extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'subscription-id', 'id');
    }
}
