<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = ['heading','body','center_id'];

    public function center(){
        return $this->belongsTo(Center::class);
    }
}
