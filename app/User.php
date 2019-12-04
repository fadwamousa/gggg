<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name','email','password','is_active' ,'role_id'
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function isAdmin(){


    
        if($this->role){
            if($this->role->name == 'admin' && $this->is_active ==1){
                return true;
            }

        }

        return false;

    }
   

   
}
