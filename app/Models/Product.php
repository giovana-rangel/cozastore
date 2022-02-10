<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    use HasFactory;

    //Rel 1:N
    public function categories(){
        return $this->hasMany('App\Models\Category');
    }

    //Rel 1:N
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }

    //Rel 1:N
    public function images(){
        return $this->hasMany('App\Models\Images');
    }
    
    //Rel N:N
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    //Rel N:N
    public function colors(){
        return $this->belongsToMany('App\Models\Color');
    }
    
    //Rel N:N
    public function sizes(){
        return $this->belongsToMany('App\Models\Size');
    }
}
