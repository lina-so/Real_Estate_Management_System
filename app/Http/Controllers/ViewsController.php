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
        return view('yourReal' , compact('realestates','user'));
    }

    public function details($id)
    {
        $details=Realestate::find($id);
        $type= gettype($details);
        return view('details' , compact('details'));
    }

    
    public function getPubliclyStorgeFile($filename)

    {
        $path = storage_path('app/images/loloo_4_07-04-22_15_50_04/'. $filename);
    
        if (!File::exists($path)) {
            abort(404);
        }
    
        $file = File::get($path);
        $type = File::mimeType($path);
    
        $response = Response::make($file, 200);
    
        $response->header("Content-Type", $type);
    
        return $response;
    
    }	

}