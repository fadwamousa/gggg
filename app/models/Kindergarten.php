<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Kindergarten extends Model
{
    //
    protected $fillable = ['name'];

    protected $table = 'kindergartens';
    public function photos(){
        return $this->hasMany(PhotoKindergarten::class,'kindergarten_id');
    }
}
