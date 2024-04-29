<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];


    public function student(){
        return $this->belongsTo(student::class);
    }
}
