<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Enquiry;
use Auth;

class EnquiryController extends Controller
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
            $data=DB::select('select * from enquiries');
        return view('enquiry.index',array('user'=>Auth::user(),'datas'=>$data));
            
             }
        else{
            return redirect()->back();
        }
    }
    public function add()
    {
        if(Auth::user()){
        return view('enquiry.create',array('user'=>Auth::user()));
             }
        else{
            return redirect()->back();
        }
    }
    public function create(Request $request)
    {
        if(Auth::user()){
            $enq=new Enquiry();
            $enq->name=Input::get('ename');
            $enq->address=Input::get('eaddress');
            $enq->phone=Input::get('ephone');
            $enq->date=Input::get('edate');
            $enq->topic=Input::get('etopic');
            $enq->message=Input::get('edetails');
            $enq->save();
       return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    }
    
   
  

}
