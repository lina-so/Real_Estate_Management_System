<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Realestate;
use App\City;
use DB;

class VarComposer
{
    public function __construct(){}

    public function compose(View $view)
    {
        $details=Realestate::find(3);
        $cities = DB::select('select * from cities');
        $view->with('details',$details)->with('cities', $cities);
    }
}