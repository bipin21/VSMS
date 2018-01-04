<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Bike;
use App\Part;
use DB;
use Carbon\Carbon;

class BillController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('guest', ['except' => 'logout']);
    }

   
//    Billing system for Bike and bikeparts home page
    public function bike()
    {
        if(Auth::user()){
            $b=DB::select('SELECT * FROM `bikes` where status=0 ');
           
            $orderid=DB::select('SELECT ordername FROM orders order by id desc limit 1 ');
            $orderid1=DB::select('SELECT ordername FROM ordersparts order by id desc limit 1 ');
              $qparts=DB::select('SELECT * FROM parts where units>0 ');
//            $q=DB::table('product')->get();
        return view('bill.bikebill',array('user'=>Auth::user(),'data'=>$b,'dataparts'=>$qparts,'oid'=>$orderid,'oid1'=>$orderid1));
             }
        else{
            return redirect()->back();
        }
    }

    //parts bill create and save
     public function partsbillsave(Request $request){
        $post=$request->all();    
        $data=array(
       'ordername'=>$post['ordername1'],
        'cusname'=>$post['customername1'],
        'cusaddres'=>$post['customeraddress1'],
        'cusphone'=>$post['customerphone1'],
        );
           $cudata=array(
       
        'cusname'=>$post['customername1'],
        'cusaddres'=>$post['customeraddress1'],
        'cusphone'=>$post['customerphone1']
        );
         $ci=DB::table('customers')->insertGetId($cudata);
        $j=DB::table('ordersparts')->insertGetId($data);
        if($j > 0){
            for($i=0;$i < count($post['product_id1']); $i++){
                $bp=Part::find($post['product_id1'][$i]);
                
                    $rem=$bp->units-$post['qty1'][$i];
                
               $up=array('units'=>$rem);
        $bkup=Part::find($post['product_id1'][$i])->update($up);
               $datadetail=array(
                'order_id'=>$j,
                'parts_id'=>$post['product_id1'][$i],
                'units'=>$post['qty1'][$i],
                
               
                'bike_model'=>$bp->bike_model,
                'parts_name'=>$post['parts_name1'][$i],
                'parts_no'=>$post['reg_no1'][$i],
                'price'=>$post['price1'][$i]-((($post['dis1'][$i])*$post['price1'][$i])/100),
                'cusname'=>$post['customername1'],
        'cusaddres'=>$post['customeraddress1'],
        'cusphone'=>$post['customerphone1']
                   
               );
                DB::table('partssell')->insert($datadetail);
                //ledger
                $ledgerdata=array(
                'credit'=>$post['price1'][$i]-((($post['dis1'][$i])*$post['price1'][$i])/100),
                'purpose'=>"Bikes parts",
                'debit'=>0,
                'cid'=>$ci
            );
            
            DB::table('ledgers')->insert($ledgerdata);
            
            
            //end of ledger
                
            }
            //ledger
                $ledgerdata=array(
                'credit'=>0,
                'purpose'=>"Bikes parts",
                'debit'=>$post['debit1'],
                'cid'=>$ci
            );
            
            DB::table('ledgers')->insert($ledgerdata);
            
            
            //end of ledger
            return redirect()->back();
        }
    }

    //bike bill create and save
    
   public function bikesellsave(request $request){
        $post=$request->all();
       $up=array('status'=>1);
        $bkup=Bike::find($post['product_id'])->update($up);
        $bikedbdata=DB::select('select * from bikes where id="'.$post['product_id'].'" ');
       foreach($bikedbdata as $bda){
          $bbm= $bda->model;
           $bcn= $bda->chasis_number;
           $ben= $bda->engine_number;
           $brn= $bda->reg_no;
               
       }
// $ct=DB::select('select timeinterval from services where bike_model="'.$ab.'"');
//        if(($post['ordername'])==null){
            $data=array(
           
      'ordername'=>$post['customername'],
        'cusname'=>$post['customername'],
        'cusaddress'=>$post['customeraddress'],
        'cusphone'=>$post['customerphone'],
        );
      
           

        $j=DB::table('orders')->insertGetId($data);
        if($j > 0){
            
//                $c=DB::table('services')->where('bike_model',$post['bike_model']);
               $datadetail=array(
                'order_id'=>$j,
                'bike_id'=>$post['product_id'],
               'bike_model'=>$bbm,
                'chasis'=>$bcn,
                'engine'=>$ben,
                'reg_no'=>$brn,
                'price'=>$post['price']-$post['dis'],
                'cusname'=>$post['customername'],
        'cusaddres'=>$post['customeraddress'],
        'cusphone'=>$post['customerphone']
                   
               );
          
//                DB::table('customer')->insert($datadetail);
                DB::table('bikesales')->insert($datadetail);
            $ci=DB::table('customers')->insertGetId($datadetail);
               $ab=$post['bike_model'];
            
            // prepare ledger
            $ledgerdata=array(
                'credit'=>$post['amount'],
                'purpose'=>"Bikes",
                'debit'=>$post['debit'],
                'cid'=>$ci
            );
            
            DB::table('ledgers')->insert($ledgerdata);
            
            
            //end of ledger
 $cd=DB::table('services')->where('bike_model',$ab)->get();
       foreach($cd as $cds){
       $cid=$cds->name;
       $csv=$cds->type;
       $ct=$cds->timeinterval; 
         
           $dts=Carbon::now();
           $srvt=$dts->addDays($ct);
           
                if($ci > 0){
                $servicedetail=array(
                'cid'=>$ci,
                'bike_id'=>$post['product_id'],
                'bike_model'=>$post['bike_model'],
                'serv_name'=>$cid,
                'serv_type'=>$csv,
                
                'servicetime'=>$ct,
               'servetime'=>$srvt
                
                    
                );
                }
                DB::table('customerservices')->insert($servicedetail); 
       }
        
            
            return redirect()->back();
        }
        
    }


}
