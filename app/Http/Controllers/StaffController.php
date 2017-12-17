<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Staff;

class StaffController extends Controller
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
            $data=DB::select('select * from staff');
            $data1=DB::select('select * from attendences');
        return view('staff.index',array('user'=>Auth::user(),'data'=>$data,'data1'=>$data1));
             }
        else{
            return redirect()->back();
        }
    }
    public function add()
    {
        if(Auth::user()){
        return view('staff.create',array('user'=>Auth::user()));
             }
        else{
            return redirect()->back();
        }
    }
    public function create(Request $request)
    {
        if(Auth::user()){
            $staff=new Staff();
            $staff->name=Input::get('sname');
            $staff->address=Input::get('saddress');
            $staff->phone=Input::get('sphone');
            $staff->sdate=Input::get('sdate');
            $staff->stype=Input::get('stype');
            $staff->spost=Input::get('spost');
           
           
           $staff->save();
       return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    }
    
   
  

}
