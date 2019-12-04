<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{

    protected $fillable = ['name','vision','message','slug','wakf_body'];

}
