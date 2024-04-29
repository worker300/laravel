<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    public $guarded = [];

    public function image(){
        return $this->morphOne(image::class, 'imagable');
    }
}
