<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Realestate;

class ViewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function yourReal($id)
    {
        $user=Auth::user();
        $realestates = Realestate::whereHas('user', function($q) use($id) {
            $q->where('id', $id);
        })->get();
        // dd($realestates);
        return view('yourReal' , compact('realestates','user'));
    }

}