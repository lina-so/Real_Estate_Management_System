<?php

namespace App\Http\Controllers;

use App\Realestate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
use File;

class RealestateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $realestate = Realestate::all(); 
        $reals = Realestate::latest()->paginate(8); 
        return view('show' , compact(['reals']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Add');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $real = new  Realestate;
        $real->location  = $request->location;
        $real->city  = $request->city;
        $real->floor  = $request->floor;
        $real->area  = $request->area;
        $real->price  = $request->price;
        $real->number_of_rooms  = $request->number_of_rooms;
        $real->number_of_path_rooms  = $request->number_of_path_rooms;
        $real->state  = $request->state;
        $real->type  = $request->type;
        $real->property_type  = $request->property_type;
        $real->user_id = Auth::id();

        if($request->hasFile("cover"))
        {
            $file=$request->file("cover");
            $image_name=time().'.'.$file->getClientOriginalExtension();
            $real->cover = $image_name;
            $file->move('upload/cover', $image_name);
        }

       

        if($request->hasFile("image"))
        {
            $file=$request->file("image");
            foreach($file as $files)
            {
                $filename = $files->getClientOriginalName();
                $extension = $files->getClientOriginalExtension();
                $image_name = time().'.'.$files->getClientOriginalExtension();
                $request['user_id']=$real->id;
                $request['image']=$image_name;
                $real->image = $image_name;
                // $files->move('upload/images', $image_name);
                $des='/images/'.Auth::user()->name.'_'.time();
                $files->storeAs($des,$filename);
              
                
            }
        }
        
        $real->save();
        return $request;
        // return redirect()->route('show')->with('success','property added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Realestate  $realestate
     * @return \Illuminate\Http\Response
     */
    public function show(Realestate $realestate)
    {
        return view('show',compact('realestate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Realestate  $realestate
     * @return \Illuminate\Http\Response
     */
    public function edit(Realestate $realestate)
    {
        return view('edit' , compact('realestate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Realestate  $realestate
     * @return \Illuminate\Http\Response
     */
    
    

    public function update(Request $request, Realestate $realestate)
    {
        $request->validate([
            'location'  => 'required',
            'city' => 'required',
            'floor' => 'required',
            'area' => 'required',
            'price' => 'required',
            'number_of_rooms' => 'required',
            'number_of_path_rooms' => 'required',
            'type' => 'required',
            'property_type' => 'required',
        ]);

        $real = Realestate::update($request->all());
        return redirect()->route('show')->with('success','property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Realestate  $realestate
     * @return \Illuminate\Http\Response
     */

    public function destroy(Realestate $realestate)
    {
        $realestate->delete();
        return redirect()->route('show')->with('success','property deleted successfully');
    }
}
