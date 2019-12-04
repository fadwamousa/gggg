<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Kindergarten extends Model
{
    //
    protected $fillable = ['name'];

    public function photos(){
        return $this->hasMany(PhotoKindergarten::class,'Kindergarten_id');
    }
}
