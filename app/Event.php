<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    // mass assignable attributes
    protected $fillable = ['event_name','from_date','to_date','from_time','to_time','dow'];
    
}
