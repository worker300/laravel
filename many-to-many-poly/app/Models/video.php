<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $guarded =[];
    public $timestamps = false;

    public function tags(){
        return $this->morphToMany(tag::class,'taggable');
    }
}
