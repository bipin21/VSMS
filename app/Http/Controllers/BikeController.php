<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Bike;
use App\Part;
use DB;
use Carbon\Carbon;

class BikeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('guest', ['except' => 'logout']);
    }

    
     public function index()
    {
        if(Auth::user()){
            $adt=Carbon::now();
            $b=DB::select('SELECT id,model,COUNT(model) as units FROM `bikes` where status="0" GROUP by id,model');
             $b1=DB::select('SELECT * FROM `parts` ');
        return view('inventory.index',array('user'=>Auth::user(),'data'=>$b,'tdt'=>$adt,'data1'=>$b1));
             }
        else{
            return redirect()->back();
        }
    }
   
    public function edit($id){
         if(Auth::user()){
        $editid=Bike::find($id);
        return view('inventory.editbike',compact('editid'),array('user'=>Auth::user()));
              }
        else{
            return redirect()->back();
        }
    }
     public function update(Request $request,$id){
        
         if(Auth::user()){
            $post=$request->all();
             $today=Carbon::now();
             $data=array(
                 'model'=>$post['model_name'],
                 'color'=>$post['color'],
                 'units'=>$post['quantity'],
                 'engine_number'=>$post['engine'],
                 'chasis_number'=>$post['chasis'],
                 'reg_no'=>$post['reg_no'],
                 'purchaseprice'=>$post['purchaseprice'],
                 'price'=>$post['unitprice'],
                 'datetaken'=>$post['datetaken'],
                 'status'=>$post['status']
            
           
           
                        );
         $ct= Bike::find($post['bikeeditid']);
             $ct->update($data);
        return redirect()->back();
             }
        else{
            return redirect()->back();
        }
    }
     public function destroy($id){
         if(Auth::user()){
        Bike::find($id)->delete();
        return redirect()->back();
              }
        else{
            return redirect()->back();
        }
    }

   
  

}
