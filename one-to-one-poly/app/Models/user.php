<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    public $guarded = [];
    public $timestamps = false;

    public function image(){
        return $this->morphOne(image::class, 'imagable');
    }
}
