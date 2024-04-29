<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    public function posts(){
        return $this->hasMany(post::class);
    }
    public function country(){
        return $this->belongsTo(country::class);
    }
}
