<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $fillable = ['bank_name','account_name','account_number','IBAN_number','image'];

    protected $table = 'accounts';

}
