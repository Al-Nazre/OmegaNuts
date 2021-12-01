<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
     
    
     function index(){

        return view('foodGroups.group');
    }

    function vegetables(){
        
        $foods = Food::where('group', 'vegetable')->paginate(5);
        $title = "Vegetables";
        return view('foodGroups.foods',['foods' => $foods,'title' => $title]);

    }
     function fruits(){
        $foods = Food::where('group', 'fruits')->paginate(5);
        $title = "Fruits";
        return view('foodGroups.foods',['foods' => $foods,'title' => $title]);

    }
     function legumes(){
        $foods = Food::where('group', 'legumes')->paginate(5);
        $title = "Legumes";
        return view('foodGroups.foods',['foods' => $foods,'title' => $title]);

    }
     function nuts(){
        $foods = Food::where('group', 'nuts & seeds')->paginate(5);
        $title = "Nuts & Seeds";
        return view('foodGroups.foods',['foods' => $foods,'title' => $title]);

    }

     function foodinfo($group,$id){
        $food = Food::find($id);
        return view('foodGroups.foodinfo',['food'=>$food]);
    }

    function search(Request $request){
        $query = $request['query'];
        $foods = Food::where('name','LIKE', '%'.$query.'%')->paginate(10);
        if(count($foods)){
        return view('foodgroups.searchresult',['foods' => $foods, 'query' => $query]);
        }
        else{
            
        return view('foodgroups.searchresult',['foods' => $foods,'query' => $query])->with('');
        }
    }
   
}
