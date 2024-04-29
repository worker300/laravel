<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    public function phonenumber(){
        return $this->hasOneThrough(phone_number::class, company::class);
    }

    public function company(){
        return $this->hasOne(company::class);
    }
}
