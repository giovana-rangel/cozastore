<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    //Rel N:N
    public function products(){
        return $this->belongsToMany('App\Models\Product');
    }
}
