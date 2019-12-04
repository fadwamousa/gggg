<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    protected $fillable = ['phone_number','setting_id'];

    public function setting(){
        return $this->belongsTo(Phone::class);
    }
}
