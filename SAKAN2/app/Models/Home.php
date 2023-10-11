<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent-id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category-id', 'id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'home-id', 'id');
    }
  
}
