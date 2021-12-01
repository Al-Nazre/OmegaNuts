<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use File;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        
        //passing the user model in the view
        return view('profile')->with('user', auth()->user());
    }

    function update(Request $request){
        $user = auth()->user();

         $request->validate([
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
        
        if($request->hasfile('profile_image'))
        {
        $destination = 'images/profile/'.$user->profile_image;

        //deleting existing image
        if(File::exists($destination)){
            File::delete($destination);
        }

        //image upload
        $imageName = time().'.'.$request->profile_image->extension();  
        $request->profile_image->move(public_path('images/profile'), $imageName);
        $user->update([
            'profile_image' => $imageName
        ]);
        
        }
        $user->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'weight' => $request->weight,
            
        ]);

        session()->flash('success', 'Users info updated');
        return redirect()->back();
    }
    
    function goal(Request $request){
             $user = auth()->user();

             $user->update([
            'goal' => $request->goal
            
        ]);

        session()->flash('success', 'Users info updated');
        return redirect()->back();

    }
}
