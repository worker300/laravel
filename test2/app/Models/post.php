<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $with = ["users"];

    public function users(){
        return $this->belongsTo(user::class)->select(["name" , "eamil" , "id"]);
    }
}
