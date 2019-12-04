<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = ['event_name'];
    public function photos(){
        return $this->hasMany(PhotoEvents::class,'event_id');
    }
}
