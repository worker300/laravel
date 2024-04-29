<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(user::class);
    }
    public function posts(){
        return $this->hasManyThrough(post::class, user::class);
    }
}
