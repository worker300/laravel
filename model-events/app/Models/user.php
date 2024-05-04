<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    public function post(){
        return $this->hasMany(post::class);
    }

    protected static function booted() : void{
        static::deleted(function($user){
            $user->post()->delete();
        });
    }
}              
