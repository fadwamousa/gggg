<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //
    protected $fillable = ['name','vision','message','image','address'];

    public function works(){
        return $this->hasMany(Work::class);
    }
}
