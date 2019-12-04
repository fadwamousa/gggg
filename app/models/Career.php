<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //

    protected $fillable = ['career_name'];

    public function employees(){

        return $this->hasMany(Employee::class);

    }
}
