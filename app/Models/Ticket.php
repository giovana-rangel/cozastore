<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    //Rel N:1
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Rel 1:N
    public function orders(){
        return $this->hasMany('App\Models\Ticket');
    }
}
