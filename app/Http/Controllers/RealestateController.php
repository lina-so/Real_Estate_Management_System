<?php

namespace App\Http\Controllers;

use App\Realestate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
use File;
// use Illuminate\Support\Facades\Storage;

class RealestateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

  
       //process upload images
        $des='/images/'.Auth::user()->name.'_'.time();

        if($request->hasFile("image"))
        {
            $file=$request->file("image");
            foreach($file as $files)
            {
                $filename = $files->getClientOriginalName();
            
                $image_name = time().'.'.$files->getClientOriginalExtension();
                $request['user_id']=$real->id;
                $request['image']=$image_name;
                $real->image = $image_name;
        
                // $des='/images/'.Auth::user()->name.'_'.time();
                $files->storeAs($des,$filename);


            }
        }

        
        
        //process cover image

        if($request->hasFile("cover"))
        {
            $file=$request->file("cover");
            // $image = Realestate::where('user_id', '=', Auth::user()->id)->get();
            $image_name='cover' .'.'.$files->getClientOriginalExtension();
            $real->cover = $image_name;
            $files->storeAs($des, $image_name);
        }

        $real->save();
        // return $des;
        // return $request;
        // return redirect()->route('show');
        // return Redirect::route('clients.show, $id')->with( ['data' => $data] );
        return redirect()->route('show')->with(['userFolderName' => $des] );

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
    public function edit(Realestate $id)
    {
        $realestate=Realestate::find($id);
        // $realestate=Realestate::findOrFail($id);
        // echo '<pre>';
        // print_r($realestate);
        // die();
        // dd($realestate);
        return view('edit' , compact('realestate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Realestate  $realestate
     * @return \Illuminate\Http\Response
     */
    
    

    public function update(Request $request,  $id)
    {
        
        $realestate=Realestate::find($id);
        // $realestate=Realestate::findOrFail($id);

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

        // $data=array(
        //     'location'  => $request->input('location'),
        //     'city' => $request->input('city'),
        //     'floor' => $request->input('floor'),
        //     'area' => $request->input('area'),
        //     'price' => $request->input('price'),
        //     'number_of_rooms' => $request->input('number_of_rooms'),
        //     'number_of_path_rooms' => $request->input('number_of_path_rooms'), 
        //     'type' => $request->input('type'),
        //     'property_type' => $request->input('property_type'),
        // );
        $realestate->location=$request->location;
        $realestate->city=$request->city;
        $realestate->floor=$request->floor;
        $realestate->area=$request->area;
        $realestate->price=$request->price;
        $realestate->number_of_rooms=$request->number_of_rooms;
        $realestate->number_of_path_rooms=$request->number_of_path_rooms;
        $realestate->type=$request->type;
        $realestate->property_type=$request->property_type;

        //  update upload images
         $des='/images/'.Auth::user()->name.'_'.time();

         if($request->hasFile("image"))
         {
             $file=$request->file("image");
             foreach($file as $files)
             {
                 $filename = $files->getClientOriginalName();
             
                 $image_name = time().'.'.$files->getClientOriginalExtension();
                 $request['user_id']=$realestate->id;
                 $request['image']=$image_name;
                 $old_image=$realestate->image;
                //  File::delete(public_path('images/'. $oldFilename));
                Storage::disk('public_uploads')->delete('public/app/images/'.$old_image);
                 $realestate->image = $image_name;

                 $files->storeAs($des,$filename);
 
 
             }
         }
         
         //update cover image
 
         if($request->hasFile("cover"))
         {
             $file=$request->file("cover");
             // $image = Realestate::where('user_id', '=', Auth::user()->id)->get();
             $image_name='cover' .'.'.$files->getClientOriginalExtension();
             $old_image=$realestate->cover;
             //  File::delete(public_path('images/'. $oldFilename));
             Storage::disk('public_uploads')->delete('public/app/images/'. $old_image);
             $realestate->cover = $image_name;
             $files->storeAs($des, $image_name);
         }
        $realestate->update();
    
        // DB::table('realestate')->where('id',$id)->update($data);
        // $real = Realestate::update($request->all());
        // return view('show');
        // return redirect('show');
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
