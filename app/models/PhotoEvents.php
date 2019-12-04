<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PhotoEvents extends Model
{
    //
    protected $fillable = ['path','event_id'];

    public function event(){
        return $this->belongsTo(Event::class);
    }
}
