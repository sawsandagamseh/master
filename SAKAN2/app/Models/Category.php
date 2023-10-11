<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'id',
        
        'name',
    ];
    protected $guarded = [];

    public function homes()
    {
        return $this->hasMany(Home::class, 'category-id', 'id');
    }
}
