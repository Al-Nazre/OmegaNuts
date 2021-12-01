<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\Container;
use Illuminate\Support\Facades\Auth;

class ContainerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){

        $container = Container::where('user_id', Auth::user()->id )->paginate(10);

        return view('container', [
            'container' => $container
        ]);
    }

    function create(Request $request){

        $request->validate([
        'container_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
    
        //image upload
        $imageName = time().'.'.$request->container_image->extension();  
        $request->container_image->move(public_path('images/container'), $imageName);

  
        $container = new Container;
        $container->user_id = Auth::user()->id;
        $container->container_name = request('container_name');
        $container->container_volume = request('container_volume');
        $container->container_image = $imageName;
        $container->favorite = $request->has('favorite');
        
        
    
        
        // return back()
        //             ->with('success','You have successfully upload image.')
        //                         ->with('image',$imageName);
        

        $container->save();

        return redirect('/container')->with('msg', 'Your Container has added!');
    }

    function update(Request $request, $id){

        $container = Container::find($id);
        $request->validate([
        'container_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
        
        if($request->hasfile('container_image'))
        {
        $destination = 'images/container/'.$container->container_image;

        //deleting existing image
        if(File::exists($destination)){
            File::delete($destination);
        }

        //image upload
        $imageName = time().'.'.$request->container_image->extension();  
        $request->container_image->move(public_path('images/container/'), $imageName);
        $container->update([
            'container_image' => $imageName
        ]);
        
        }

        $container->container_name = request('container_name');
        $container->container_volume = request('container_volume');
        $container->favorite = $request->has('favorite');
        $container->update();

        session()->flash('success', 'Users info updated');
        return redirect()->back();
    }

    
    
}
