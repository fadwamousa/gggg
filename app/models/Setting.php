<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = ['name','logo','email','phone_number'];

    public function photos(){
        return $this->hasMany(PhotoWebsite::class,'setting_id');
    }
}
