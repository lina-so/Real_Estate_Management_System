<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realestate extends Model
{
    public function Purchases(){
        return $this->belongsTo('App\Purchases' , 'real_id');
    }

    public function Sales(){
        return $this->belongsTo('App\Sales' , 'real_id');
    }

    public function User(){
        return $this->belongsTo('App\User' , 'user_id');
    }
}
