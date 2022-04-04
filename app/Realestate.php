<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
class Realestate extends Model
{

    protected $fillable = [
        'address', 'floor','area','price','number_of_rooms',
        'number_of_path_rooms','cover','image','image_path',
    ];

    public function Purchases(){
        return $this->belongsTo('App\Purchases' , 'real_id');
    }

    public function Sales(){
        return $this->belongsTo('App\Sales' , 'real_id');
    }

    public function User(){
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function city(){
        return $this->belongsTo('App\City' , 'city_id');
    }

    public function real_likes()
    {
        return $this->hasMany('App\Favoraite');
    }
    public function Users(){
        return $this->belongsToMany(User::class , 'favoraites');
    }


}


