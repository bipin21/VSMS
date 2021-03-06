<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use Charts;
use App\Staff;
use Carbon\Carbon;

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
            $customer=DB::select('select * from customers');
            $servd=DB::select('select * from customerservices');
            $cdate=Carbon::now();
//            foreach($servd as $servd){
//            $diffd[]=(Carbon::parse($servd->servetime))->diffInDays($cdate);
//            }

             $adate=date('Y-m-d');
 $b=DB::select('SELECT * FROM `bikes` where status=0 ');
           
            $orderid=DB::select('SELECT ordername FROM orders order by id desc limit 1 ');
            $orderid1=DB::select('SELECT ordername FROM ordersparts order by id desc limit 1 ');
              $qparts=DB::select('SELECT * FROM parts where status=0 ');

         

            $at=DB::select('select * from attendences where adate="'.$adate.'"');
        return view('stockdashboard',array('user'=>Auth::user(),'sids'=>$sid,'pr'=>$prd,'att'=>$at,'ddate'=>$servd,'cdate'=>$cdate,'customer'=>$customer,'data'=>$b,'dataparts'=>$qparts,'oid'=>$orderid,'oid1'=>$orderid1));
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
           $now = Carbon::now();

        $result =DB::table('bikes')->whereYear('created_at',$now->year)->whereMonth('created_at',$now->month)->whereDay('created_at',$now->day)->count();


            $biked=DB::table('bikes')->count();

//Donut chart
              $partd=DB::table('parts')->count();
          $chart= Charts::create('donut', 'highcharts')
                ->title('Purchase chart')
                ->labels(['Bike', 'Part'])
                ->values([$result,$partd])
                ->dimensions(400,300)
                ->responsive(false);


                // Area charts
                $saled=Charts::multi('areaspline', 'highcharts')
    ->title('Sales & Purchase chart')
    ->colors(['#ff0000', '#ffffff'])
    ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
    ->dataset('Sales', [3, 4, 3, 5, 4, 10, 12])
    ->dataset('Purchase',  [1, 3, 4, 3, 3, 5, 4]);
             
             //line charts
             $custcount =DB::table('customers')->whereYear('created_at',$now->year)->whereMonth('created_at',$now->month)->whereDay('created_at',$now->day)->count();
              $custcountyear =DB::table('customers')->whereYear('created_at',$now->year)->count();
              $custcountmonth =DB::table('customers')->whereYear('created_at',$now->year)->whereMonth('created_at',$now->month)->count();
             $linechart=Charts::create('line', 'highcharts')
    ->title('Customer chart')
    ->elementLabel('Active Customers')
    ->labels(['Today','Last Month','Last Year'])
    ->values([$custcount,$custcountmonth,$custcountyear])
    ->dimensions(600,400)
    ->responsive(false);
//bar charts
             
             $barchart=Charts::create('bar', 'highcharts')
    ->title('Sales chart')
    ->elementLabel('sales items label')
    ->labels(['First', 'Second', 'Third'])
    ->values([5,10,20])
    ->dimensions(600,400)
    ->responsive(false);
             
             
        return view('report',array('user'=>Auth::user(),'chart'=>$chart,'areachart'=>$saled,'linechart'=>$linechart,'barchart'=> $barchart ));

             }
        else{
            return redirect('stocklogin');
        }
    }
     public function updatereport(Request $request)
    {
         if(Auth::user()){
             $post=$request->all();
             $stdate=$post['startdate'];
             $endate=$post['enddate'];
           $now = Carbon::now();

        $result =DB::table('bikes')->whereBetween('created_at', [$stdate, $endate])->count();


            $biked=DB::table('bikes')->count();


              $partd=DB::table('parts')->count();
          $chart= Charts::create('donut', 'highcharts')
                ->title('My nice chart')
                ->labels(['Bike', 'Part'])
                ->values([$result,$partd])
                ->dimensions(400,300)
                ->responsive(false);


                // Area charts
                $saled=Charts::multi('areaspline', 'highcharts')
    ->title('Sales & Purchase chart')
    ->colors(['#ff0000', '#ffffff'])
    ->labels(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday','Saturday', 'Sunday'])
    ->dataset('Sales', [3, 4, 3, 5, 4, 10, 12])
    ->dataset('Purchase',  [1, 3, 4, 3, 3, 5, 4]);

        return view('report',array('user'=>Auth::user(),'chart'=>$chart,'areachart'=>$saled ));

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
