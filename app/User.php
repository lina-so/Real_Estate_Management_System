<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use  Laravel\Passport\PassportServiceProvider;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Subscriptions(){
        return $this->belongsTo('App\Subscription' , 'user_id');
    }

    public function Realestats(){
        return $this->hasMany('App\Realestate' , 'user_id');
    }

    public function Purchases(){
        return $this->hasMany('App\Purchases' , 'user_id');
    }

    public function Sales(){
        return $this->hasMany('App\Sales' , 'user_id');
    }

    public function Desires(){
     
            return $this->hasMany('App\Desire' ,'user_id');
        
    }
    public function real_likes()
    {
        return $this->hasMany('App\Favoraite');
    }

    public function real_served()
    {
        return $this->hasMany('App\Reserve');
    }

    // public function favoraites(){
    //     return $this->belongsToMany('App\Favoraite', 'favoraites', 'real_id', 'user_id'); 
    //  }

     
    // public function favoraiteHas($realId){
    //     return self::favoraites()->where('priduct_id',$realId)->exists();
    //  }

    //  public function Realestatss(){
    //     return $this->belongsToMany('App\Realestate', 'Favoraites', 'real_id', 'user_id'); 
    //  }

}
