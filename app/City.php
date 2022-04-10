<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Realestate;

class City extends Model
{
    protected $fillable = [
        'country',
    ];

    public function realestates(){
     
        return $this->hasMany('App\Realestate' ,'city_id');
    
    }

    public function Desires(){
     
        return $this->hasMany('App\Desire' ,'city_id');
    
    }
}
