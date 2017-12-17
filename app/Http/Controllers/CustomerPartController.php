<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Customer;
use App\Service;
use App\Customerservice;
use DB;
use Carbon\Carbon;

class CustomerPartController extends Controller
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
 
 
  
    public function edit($id){
        $cs=Customer::find($id);
         $q=DB::table('parts')->get();
        return view('customer.customerparts',array('user'=>Auth::user(),'da'=>$cs,'data'=>$q));
    }  

 

}
