<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\Food;


class TempController extends Controller
{
    function index(){
        return view('foodgroups.temp');
    }

    function create(Request $request){

        $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'name' => 'required' ,
        'group' => 'required' ,
        'energy' => 'required' ,
        'calcium' => 'required' ,
        'vitamin_c' => 'required' ,
        'about' => 'required' ,               
    ]);
        
        
         if($request->hasfile('image')){
        //image upload
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images/foods'), $imageName);

        //     $foods->save([
        //     'image' => $imageName
        // ]);
        }

        $foods = new Food;
        $foods->name = request('name');
        $foods->image = $imageName;
        $foods->group = request('group');
        $foods->energy = request('energy');
        $foods->calcium = request('calcium');
        $foods->vitamin_c = request('vitamin_c');
        $foods->about = request('about');

        $foods->save();
         session()->flash('success', 'Users info updated');
        return redirect()->back()->with('msg','Users info updated');
    }
 
  
}
