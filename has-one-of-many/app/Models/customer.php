<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;



    public function orders(){
        return $this->hasMany(order::class);
    }
    public function latestOrder(){
        return $this->hasOne(order::class)->latestOfMany();
    }
    public function olestOrder(){
        return $this->hasOne(order::class)->oldestOfMany();
    }
    public function largestOrder(){
        return $this->hasOne(order::class)->ofMany('amount','max');
    }
    public function smallesttOrder(){
        return $this->hasOne(order::class)->ofMany('amount','min');
    }
}
