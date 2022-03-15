<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public function Realestates(){
        return $this->hasMany('App\Realestate' , 'real_id');
    }
}
