<?php

namespace App;

use App\Realestate;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $table = 'reserves';
    protected $fillable =[
        'user_id',
        'real_id',
    ];

    public function realestates()
    {
        return $this->belongsTo('App\Realestate');
    }
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
