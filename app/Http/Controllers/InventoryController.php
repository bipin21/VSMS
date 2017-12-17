<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Bike;
use App\Part;
use DB;
use Carbon\Carbon;

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
            $adt=Carbon::now();
            $b=DB::select('SELECT model,COUNT(model) as units FROM `bikes` where status="0" GROUP by model');
        return view('inventory.index',array('user'=>Auth::user(),'data'=>$b,'tdt'=>$adt));
             }
        else{
            return redirect()->back();
        }
    }
     public function indext()
    {
        if(Auth::user()){
            $adt=Carbon::now();
            $b=DB::select('SELECT model,COUNT(model) as units FROM `bikes` where status="0" GROUP by model');
             $b1=DB::select('SELECT parts_name,COUNT(parts_name) as units FROM `parts` GROUP by parts_name');
        return view('inventory.test',array('user'=>Auth::user(),'data'=>$b,'tdt'=>$adt,'data1'=>$b1));
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
