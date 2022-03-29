<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desire extends Model
{
    protected $fillable = [
        'location', 'city', 'floor','area','price','number_of_rooms',
        'number_of_path_rooms',
    ];

    public function user(){
        return $this->belongsTo('App\User' , 'user_id');
    }



}
