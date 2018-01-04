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
    public function edit($id){
         if(Auth::user()){
        $editid=Staff::find($id);
        return view('staff.edit',compact('editid'),array('user'=>Auth::user()));
              }
        else{
            return redirect()->back();
        }
    }
     public function update(Request $request,$id){
        
         if(Auth::user()){
           $post=$request->all();
             
             $data=array(
                 'name'=>$post['sname'],
                 'address'=>$post['saddress'],
                 'phone'=>$post['sphone'],
                 'sdate'=>$post['sdate'],
                 'stype'=>$post['stype'],
                 'spost'=>$post['spost']
                        );
         $ct= Staff::find($post['editid']);
             $ct->update($data);
//        Staff::find($id)->update($request->all());
            
        return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    }
     public function destroy($id){
         if(Auth::user()){
        Staff::find($id)->delete();
        return redirect()->back();
              }
        else{
            return redirect()->back();
        }
    }
    
   
  

}
