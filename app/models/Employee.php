<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    protected $fillable = ['name','career_id'];

    public function career(){
        return $this->belongsTo(Career::class);
    }
}
