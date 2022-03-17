<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public function Realestates(){
        return $this->hasMany('App\Realestate' , 'real_id');
    }

    public function User(){
        return $this->hasMany('App\User' , 'user_id');
    }
}
