<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class target_commite extends Model
{
    //

    protected $fillable = ['target','committes_id'];

    public function committe(){
        return $this->belongsTo(Committe::class,'committes_id');
    }
}
