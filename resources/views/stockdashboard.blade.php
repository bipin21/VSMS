@extends('layouts.mast')
@section('content')

        <!-- Page Content -->
        <div class="navbar-static-top" id="wrapper" style="    top: 10%;
    overflow: hidden;
    position: fixed;
    z-index: 0;">
            

<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
<span style="display:inline-block !important;  padding: 0; border-radius:3px; height:30px; width:500px;  ">
<iframe style="margin-top: 2%;" scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="http://rajanmaharjan.com.np/getdate/index.php?dateType=np" height="30"></iframe></span>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                          
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
</div>
                <!-- row -->
                <div id="page-wrapper">
                  <div class=" panel left-panel cf col-md-3" style="height:100%;margin: 0px; left: 0%; top: 21%; position: fixed;">
                                    <?php $c=0; ?>
                                             @foreach($pr as $p)
                                           <div class="hidden" style="display:none;">{{ $s=$p->items}}</div> 
                                            @if($s>10)
                                            @else
                                             <?php $c++ ?>
                                             @endif
                                             @endforeach
                      <div class="pull-right col-md-12" style="padding: 0px; height:440px;  overflow-y: scroll;">
                      <div class="title" style="position:fixed;width: 300px;">
                       <pre style="background:#09649a !important; color:white">Notifications  {{ $c}}</pre>
                       </div>
                      <div class="white-box" style=" padding: 15px 3px 3px 3px !important">
            
                        @foreach($pr as $p)
                            <div class="hidden" style="display:none;">{{ $s=$p->items}}</div>
                      @if($s>10)
                      @else
                                             <?php $c++;  
                                             @session_start(); 
                                             $_SESSION['item'] = $p->product_name;
                                              $_SESSION['left'] = $p->items; ?>
                            <div class="alert fade in" style="padding: 29px 0 0 0; margin-bottom:0 !important" >
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: blue;">&times;</a>
                              <pre style="background:#cd2f2f!important; color:#ddd;"><span style="color: #fff;">Warning!!</span> The item count of <span style="color: #fff; font-weight: bold;">{{ $_SESSION['item'] }} Left {{ $_SESSION['left'] }}</span></pre>
                            </div>
                            <?php @session_destroy(); ?>
                           @endif
                            @endforeach

<!--                                      Code for to check customer service day is less than 7 days to come-->
                                            @foreach($ddate as $ser)
                                            
                                        
                                                @if($ser->servetime > $cdate)
                                               <div style="display:none;">{{$diffd=(\Carbon\Carbon::parse($ser->servetime))->diffInDays($cdate)}}</div> 
                                             
                                                  @if($diffd>0 && 7 > $diffd )
                                                @foreach($customer as $cst)
                                                 <?php 
                                                if($ser->cid==$cst->id){
                                                    ?>
                          <div class="alert fade in" style="padding: 29px 0 0 0; margin-bottom:0 !important" >
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: blue;">&times;</a>
                              <pre style="background:#cd2f2f!important; color:#ddd;"><span style="color: #fff;">Warning!!</span>Service Days For: <span style="color: #fff; font-weight: bold;"> <?php
                                                   echo $ser->serv_name."Service Of<br> Customer  ".$cst->cusname."<br>only ".$diffd."days Left <br>ad: ".$cst->cusaddres.",ph: ".$cst->cusphone;
                                                ?></span></pre>
                            </div>
                                          
                                               
                                              
                                               
                                                <?php
                                                }
                                                ?>
                                                @endforeach
                                                @endif
                                                
                                                @endif
                                            
<!--                                            End of service time comparision-->
                                            @endforeach
                             <div class="alert fade in" style="padding: 0" >
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color: blue;">&times;</a>
                              <pre style="background:orange !important; color:white"><span style="color: blue;">Warning!!</span> The product count of <span style="color: black; font-weight: bold;"> {{ $p->product_name}} Left {{ $p->items }} </span></pre>
                            </div>
                            
                           
                           
                         
                     </div>
                </div>
              </div>
              <div class="col-md-9" style="left: 25%; top: 21%; position: fixed;">
                <div class="row col-md-7" style="height: 440px; overflow-y: scroll;">
                  <style>
                  .form-group{
                    margin: 5px;
                  }
                  .form-control{
                    height:25px;
                  }
                  .col-in{
                    margin:5px;
                    padding: 0;
                  }
                  </style>
                    <!--col -->
                    <div class="title" >
                     <pre style="background:#09649a !important; color:white">   Enquiry </pre>
                     </div>
                        <div class="white-box">
                            <div class="col-in row">
                               <div class="col-md-12">
                                 <form method="POST" action="{{ url('/addenquiry') }}" accept-charset="UTF-8" enctype="multipart/form-data"><input name="" type="hidden" value="">


                                      <div class="form-group">
                                     <label for="title">Full Name</label>
                                     <input class="form-control" name="ename" type="text" id="title" required>
                                     </div>

                                   <div class="form-group">
                                     <label for="eaddress">Address</label>
                                     <input class="form-control" name="eaddress" type="text" id="address" style="width: 100%;
    height: 100%;" required>
                                     </div>
                                     <div class="form-group">
                                     <label for="ephone"> Phone</label>
                                     <input class="form-control" name="ephone" type="number" id="phone" required>
                                     </div>
                                     <div class="form-group">
                                     <label for="etopic"> Enquiry About</label>
                                     <input class="form-control" name="etopic" type="text" id="title" required>
                                     </div>
                                     <div class="form-group">
                                     <label for="edetails">Message</label>
                                     <textarea class="form-control" name="edetails" required>

                                         </textarea>
                                     </div>

                               <input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group" style="margin-top: 5%;">
                                 <input class="btn btn-danger" type="reset" value="Clear">
                                 <input class="btn btn-primary" type="submit" value="Submit" name="addcontent"> <br><br>
                               </div>
                               </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <div class="col-md-5" style="overflow-y:scroll; height: 440px;" >
                  <div class="title" >
                   <pre style="background:#09649a !important; color:white">   Attendance </pre>
                   </div>
                  <div class="white-box" >

                    <form class="form" action="{{route('attendence.add')}}" method="post">
                        <div class="form-group">
                                <h2>Today's Attendence</h2>
                            <label>Select Staff</label>
<!--                    <input type="text" name="scode" placeholder="Enter Staff Code"/>-->
                            <select name="scode" required>
                                <option>Select</option>
                                @foreach($sids as $sid)
                            <option value="{{ $sid->id }}" >{{ $sid->name }}</option>
                                @endforeach
                            </select>


                        </div>
                        <input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
      <input type="hidden" name="_token" value="{{csrf_token()}}"/>

       <input class="btn btn-danger" type="reset" value="Clear">
       <input class="btn btn-primary" type="submit" value="Submit" name="addcontent"> <br><br>
                       </form>
                       <table class="table example1">
                       <thead >
                       <th style="text-align:left; color:black;">SN</th>
                       <th style="text-align:left; color:black;">Name</th>
                       <th style="text-align:left; color:black">Status</th>
                       </thead>
                       <tbody>
                       <div style="display:none;"> {{$i=1}}</div>
                       @foreach($att as $at )

                       <tr>
                       <td>{{ $i++ }}</td>
                       <td>

                       <div style="display:none;">{{$id1=$at->staff_id}}
                           @foreach($sids as $sid )
                          {{ $id2=$sid->id}}

                        </div>
                       @if($id1==$id2){{$sid->name}}
                        @endif
                       <div style="display:none">  @endforeach</div>

                        </td>

                       <td>

                       <p>Present</p>


                        </td>
                       </tr>

                       @endforeach

                       </tbody>

                       </table>

              </div>
            </div>
        <!-- 
<script src="resources/js/jquery-2.2.4.min.js"></script> -->
<script>
// alertify.alert('Ready!');


</script>

  
@endsection
