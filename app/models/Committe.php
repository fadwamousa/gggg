<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Committe extends Model
{
    //
    protected $fillable = ['name','image','attachment'];

    public function targets(){
        return $this->hasMany(target_commite::class,'committes_id');
    }
}
