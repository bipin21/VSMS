<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Bike;
use App\Part;

use DateTime;
use Excel;
use Carbon\Carbon;
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
   
    //excel bike
    
    public function savebikes(Request $request){
      if(Auth::user()){
         if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();

			$data = Excel::load($path, function($reader) {})->get();
             $cdate=Carbon::now();

			if(!empty($data) && $data->count()){

				foreach ($data->toArray() as $key => $value) {
					if(!empty($value)){
                                                
						foreach ($value as $v) {		
							$insert[] = ['model' => $v['model'], 'color' => $v['color'],'engine_number' => $v['engine_number'],'chasis_number' => $v['chasis_number'],'reg_no' => $v['reg_no'],'price' => $v['price'],'datetaken' =>$cdate,'status'=>0];
						}
					}
				}

				
				if(!empty($insert)){
					DB::table('bikes')->insert($insert);
					return back()->with('success','Insert Record successfully.');
				}

			}

		}

		return back()->with('error','Please Check your file, Something is wrong there.');
             }
        else{
            return redirect()->back();
        }  
  }
    //excel part
  public function saveparts(Request $request){
      if(Auth::user()){
         if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();

			$data = Excel::load($path, function($reader) {})->get();

			if(!empty($data) && $data->count()){

				foreach ($data->toArray() as $key => $value) {
					if(!empty($value)){
						foreach ($value as $v) {		
							$insert[] = ['parts_no' => $v['parts_no'], 'parts_name' => $v['parts_name'],'price' => $v['price'],'status'=>0];
						}
					}
				}

				
				if(!empty($insert)){
					DB::table('parts')->insert($insert);
					return back()->with('success','Insert Record successfully.');
				}

			}

		}

		return back()->with('error','Please Check your file, Something is wrong there.');
             }
        else{
            return redirect()->back();
        }  
  }

}
