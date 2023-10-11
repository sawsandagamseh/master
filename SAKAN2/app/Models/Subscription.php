<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin-id', 'id');
    }


    public function subscriptionBookings()
    {
        return $this->hasMany(SubscriptionBooking::class, 'subscription-id', 'id');
    }
}
