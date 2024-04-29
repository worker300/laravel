<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;

    protected $guarded =[];
    public $timestamps = false;

    public function posts(){
        return $this->morphedByMany(post::class,'taggable');
    }
    public function videos(){
        return $this->morphedByMany(video::class,'taggable');
    }
}
