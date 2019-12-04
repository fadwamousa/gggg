<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //
    protected $fillable = ['projects','center_id'];

    public function center(){
        return $this->belongsTo(Center::class);
    }
}
