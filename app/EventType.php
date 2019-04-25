<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $fillable = ['name' , 'status'];
    protected $table = 'event_types';
}
