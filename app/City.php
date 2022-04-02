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
}
