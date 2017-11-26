<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Bike;
use App\Part;

use DateTime;
class PurchaseController extends Controller
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
        $bk=DB::select('select * from bikes');    
        return view('purchase.index',array('user'=>Auth::user(),'b'=>$bk));
             }
        else{
            return redirect()->back();
        }
    }
     public function purchaseparts()
    {
         if(Auth::user()){
             $bk=DB::select('select * from parts'); 
        return view('purchase.parts',array('user'=>Auth::user(),'b'=>$bk));
             }
        else{
            return redirect('stocklogin');
        }
    }
    public function addbike(Request $request){
        if(Auth::user()){
            $br=new Bike();
            $br->model=Input::get('model_name');
            $br->color=Input::get('color');
            $br->engine_number=Input::get('engine');
            $br->chasis_number=Input::get('chasis');
            $br->reg_no=Input::get('reg_no');
            $br->price=Input::get('unitprice');
            
            $br->datetaken=Input::get('datetaken');
            $br->status=0;
            $br->save();
        return redirect()->back();
             }
        else{
            return redirect()->back();
        } 
    }
     public function addbikeparts(Request $request){
        if(Auth::user()){
            $br=new Part();
            $br->parts_no=Input::get('partsno');
            $br->parts_name=Input::get('partsname');
            $br->color=Input::get('color');
            $br->bike_model=Input::get('model_name');
            
            $br->price=Input::get('unitprice');
          
            $br->datetaken=Input::get('datetaken');
            $br->status=0;
            $br->save();
        return redirect()->back();
             }
        else{
            return redirect()->back();
        } 
    }
   
  

}
