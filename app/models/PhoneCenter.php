<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PhoneCenter extends Model
{
    //
    protected $fillable = ['phone','center_id'];

    public function center(){
        return $this->belongsTo(Center::class);
    }
}
