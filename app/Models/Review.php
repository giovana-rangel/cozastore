<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //Rel N:1
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Rel N:1
    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
