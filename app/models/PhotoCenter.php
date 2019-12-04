<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PhotoCenter extends Model
{
    //
    protected $fillable = ['phone','center_id'];

    public function center(){
        return $this->belongsTo(Center::class);
    }
}
