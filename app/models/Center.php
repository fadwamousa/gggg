<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //
    protected $fillable = ['name','vision','message','image','address'];

    public function message(){

        return $this->hasMany(Message::class,'center_id');
    }

    public function phones(){
        return $this->hasMany(PhoneCenter::class,'center_id');
    }

    public function works(){
        return $this->hasMany(Work::class);
    }
}
