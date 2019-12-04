<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PhotoKindergarten extends Model
{
    //
    protected $fillable = ['image','Kindergarten_id'];

    public function kindergarten(){
        return $this->belongsTo(Kindergarten::class);
    }
}
