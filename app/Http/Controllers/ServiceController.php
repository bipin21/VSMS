<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Bike;
use App\Customer;
use App\Service;



class ServiceController extends Controller
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
            $b=DB::select('select * from bikes');
            $s=DB::select('select * from services order by bike_model');
        return view('service.index',array('user'=>Auth::user(),'b'=>$b,'s'=>$s));
             }
        else{
            return redirect()->back();
        }
    }
     public function addbikeservice(Request $request){
        if(Auth::user()){
            $br=new Service();
            $br->name=Input::get('servicename');
            $br->type=Input::get('servicetype');
            $br->message=Input::get('servicemessage');
            $br->bike_model=Input::get('bikemodel');
            
            $br->timeinterval=Input::get('servicetime');
          
            
            $br->save();
        return redirect()->back();
             }
        else{
            return redirect()->back();
        } 
    }
   
  

}
