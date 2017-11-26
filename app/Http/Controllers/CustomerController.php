<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Customer;
use App\Service;
use DB;

class CustomerController extends Controller
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
            $d=DB::select('select * from customers order by id desc');
            $s=DB::select('select * from services');
        return view('customer.index',array('user'=>Auth::user(),'d'=>$d,'s'=>$s));
             }
        else{
            return redirect()->back();
        }
    }
    public function customerservicesave(request $request){
        $post=$request->all();
        
        $data=array(
      
        'cid'=>$post['cid'],
        'bike_id'=>$post['bike_id'],
        'bike_model'=>$post['bike_model'],
                'serv_name'=>$post['servicename'],
                'serv_status'=>$post['servicestatus'],
                'servicetime'=>$post['servicetime'],
              
               );
                DB::table('customerservices')->insert($data);
                
            
            return redirect()->back();
        
    }
  
    public function edit($id){
        $cs=Customer::find($id);
        $da=DB::select('select * from customerservices where cid="'.$id.'"');
        return view('customer.seedetail',array('user'=>Auth::user(),'d'=>$cs,'da'=>$da));
    }

}
