<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PhotoKindergarten extends Model
{
    //
    protected $fillable = ['image','kindergarten_id'];

    protected $table = 'photo_kindergartens';

    public function kindergarten(){
        return $this->belongsTo(Kindergarten::class);
    }
}
