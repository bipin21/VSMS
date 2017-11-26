<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Bike;
use App\Part;
use DB;

class InventoryController extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()){
            $b=DB::select('SELECT model,COUNT(model) as units FROM `bikes` GROUP by model');
        return view('inventory.index',array('user'=>Auth::user(),'data'=>$b));
             }
        else{
            return redirect()->back();
        }
    }
      public function parts()
    {
        if(Auth::user()){
            $b=DB::select('SELECT parts_name,COUNT(parts_name) as units FROM `parts` GROUP by parts_name');
        return view('inventory.parts',array('user'=>Auth::user(),'data'=>$b));
             }
        else{
            return redirect()->back();
        }
    }
   
  

}
