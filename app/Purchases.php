<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $fillable = [
        'price',
    ];


    public function Realestates(){
        return $this->hasMany('App\Realestate' , 'real_id');
    }

    public function User(){
        return $this->hasMany('App\User' , 'user_id');
    }
}
