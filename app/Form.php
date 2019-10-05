<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = "forms";
    protected $fillable = ['name', 'form_type_id', 'description', 'form_status_id'];

    public function type()
    {
        return $this->hasOne('App\FormType', 'id', 'form_type_id');
    }

    public function status()
    {
        return $this->hasOne('App\FormStatus', 'id', 'form_status_id');
    }
}
