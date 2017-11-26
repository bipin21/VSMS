<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Customer;
use DB;

class SaleController extends Controller
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
            $cs=DB::select('select * from customers order by id desc');
        return view('sale.index',array('user'=>Auth::user(),'cs'=>$cs));
             }
        else{
            return redirect()->back();
        }
    }
     public function parts()
    {
        if(Auth::user()){
            $cs=DB::select('select * from partssell order by id desc');
        return view('sale.parts',array('user'=>Auth::user(),'cs'=>$cs));
             }
        else{
            return redirect()->back();
        }
    }
   
  

}
