<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Number;

class user extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    // public function setEmailAttribute($value){
    //     $this->attributes['email'] = strtolower('$value');
    // }
    
    // public function setUserNameAttribute($value){
    //     $this->attributes['user_name'] = strtolower('$value');
    // }
    
    // public function setPasswordAttribute($value){
    //     $this->attributes['password'] = bcrypt('$value');
    // }
    
    
    // public function getDobAtrribute($value){
    //     return date('d M Y' , strtotime($value));
    // }

    // public function getUserNameAtrribute($value){
    //     return ucwords($value);
    // }
    
    // public function getSalaryAttribute($value){
    //     // return Number::currency($value , in:'INR' );
    //     return Number::spell($value);
    // }


    protected function UserName(): Attribute{
        return Attribute::make(
            get: fn(string $value) => ucwords($value),
            set: fn(string $value) => strtolower($value),
        );
    }

}
