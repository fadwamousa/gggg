<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = ['name','logo','email','twitter','insta','snapchat'];

    public function phones(){
        return $this->hasMany(Phone::class,'setting_id');
    }
}
