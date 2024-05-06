<?php

namespace App\Models;

use App\Http\Controllers\postcontroller;
use App\Models\Scopes\userscope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ScopedBy([userscope::class])]

class user extends Model
{
    use HasFactory;

    // protected static function booted (): void{
        
    //     // static::addGlobalScope('userdetail', function(Builder $builder){
    //     //     $builder->where('status',1);
    //     // });

    //     static::addGlobalScope(new userscope);
    // }

    public function posts(){
        return $this->hasMany(post::class);
    }

    // public function scopeActive ($query){
    //     return $query->where('status',1);
    // }
    
    public function scopeCity ($query , $cityname){
        return $query->whereIn('city',$cityname);
    }
    
    public function scopeSort ($query ){
        return $query->orderby('name','asc');
    }
}
