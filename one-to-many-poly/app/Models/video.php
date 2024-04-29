<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comments(){
        return $this->morphMany(comment::class, 'commentable');
    }

    public function oldestcomment(){
        return $this->morphOne(comment::class, 'commentable')->oldestOfMany();
    }
    public function latestcomment(){
        return $this->morphOne(comment::class, 'commentable')->latestOfMany();
    }
}
