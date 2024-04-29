<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = "my_table"; 
    protected $primaryKey = "student_id";
    public $timestamps = false; 

    protected $attributes =[
        'city' => 'goa'
    ];
}
