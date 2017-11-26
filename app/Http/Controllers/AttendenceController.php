<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Staff;
use App\Attendence;
use DateTime;

class AttendenceController extends Controller
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
//        if(Auth::user()){
//            $data=DB::select('select * from staff');
//        return view('staff.index',array('user'=>Auth::user(),'data'=>$data));
//             }
//        else{
//            return redirect()->back();
//        }
    }
//    public function add()
//    {
//        if(Auth::user()){
//        return view('staff.create',array('user'=>Auth::user()));
//             }
//        else{
//            return redirect()->back();
//        }
//    }
    public function create(Request $request)
    {
        if(Auth::user()){
            $att=new Attendence();
            $adate=date('Y-m-d');
            $dd=$att->staff_id=Input::get('scode');
            $att->adate=$adate;
            $d=DB::select('select count(*) from staff where id="'.$dd.'"');
//            $d1=DB::select('select count(adate) from staff left join attendences on staff.id=attendences.staff_id="'.$dd.'" and attendences.adate="'.date('Y-m-d').'"');
                        

             $d1=DB::select('select count(*) from attendences where staff_id="'.$dd.'" and adate="'.$adate.'" group by staff_id,adate');
          
            if(($d=1) and (empty($d1))){
         
             
            
               $att->save();
               
           
          }
                
          
            
            else{
               
            }
       return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    }
    
   
  

}
