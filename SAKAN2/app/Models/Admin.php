<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    
    protected $fillable = [
        "id",
        "first_name",
        "second_name",
        "last_name",
        "about",
        "image",
        "phone",
        "password",
        "email"
    
    ];



    public function subscriptions()
    {
        return $this->hasMany(Subscription::class, 'admin-id', 'id');
    }
}
