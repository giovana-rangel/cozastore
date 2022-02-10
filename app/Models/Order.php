<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //Rel N:1
    public function ticket(){
        return $this->belongsTo('App\Models\Ticket');
    }
}
