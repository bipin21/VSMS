<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Staff;
use Carbon;

class HomeController extends Controller
{
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
            $sid=DB::select('select * from staff');
            $prd=DB::select('select * from product');
             $adate=date('Y-m-d');
            
            
            $at=DB::select('select * from attendences where adate="'.$adate.'"');
        return view('stockdashboard',array('user'=>Auth::user(),'sids'=>$sid,'pr'=>$prd,'att'=>$at));
        }
        else{
            return redirect()->back();
        }
    }
     public function dashboard()
    {
         if(Auth::user()){
        return view('stockdashboard',array('user'=>Auth::user()));
             }
        else{
            return redirect()->back();
        }
    }
    
    
     public function purchase()
    {
         if(Auth::user()){
        return view('purchase.index',array('user'=>Auth::user()));
             }
        else{
            return redirect('stocklogin');
        }
    }
    
     public function report()
    {
         if(Auth::user()){
           
        return view('report',array('user'=>Auth::user() ));
        
             }
        else{
            return redirect('stocklogin');
        }
    }
    
    
//    public function chartjs()
//{
//    $viewer = View::select(DB::raw("SUM(numberofview) as count"))
//        ->orderBy("created_at")
//        ->groupBy(DB::raw("year(created_at)"))
//        ->get()->toArray();
//    $viewer = array_column($viewer, 'count');
//    
//    $click = Click::select(DB::raw("SUM(numberofclick) as count"))
//        ->orderBy("created_at")
//        ->groupBy(DB::raw("year(created_at)"))
//        ->get()->toArray();
//    $click = array_column($click, 'count');
//    
//    return view('chartjs')
//            ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))
//            ->with('click',json_encode($click,JSON_NUMERIC_CHECK));
//}
    
}
