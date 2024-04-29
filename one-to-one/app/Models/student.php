<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function contact(){
        return $this->hasOne(contact::class);
    }
}
