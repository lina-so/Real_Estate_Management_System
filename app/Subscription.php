<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'subscription_by_month', 'subscription_by_year',
    ];
    public function users(){
        return $this->hasMany('App\User' , 'user_id');
    }
}
