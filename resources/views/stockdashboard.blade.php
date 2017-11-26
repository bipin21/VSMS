@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper" style="background:#fff;">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                       <span style="font-size:15px;display:inline-block;">English Date:&nbsp;{{$sd=date('Y-m-d')}}&nbsp;&nbsp;&nbsp;</span>
<!--
                 
                          {{ $ad=date('Y-m-d',strtotime('+5 days'))}} 
-->
                           <br/>
                          <?php 
                           echo  "\n";
                            echo "start date  ".$sd=date('2017-09-10');
                           echo " end date  ".$ad=date('Y-m-d',strtotime('+5 days'));
                          

 $diff = abs(strtotime($ad) - strtotime($sd));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$days1 = floor(($diff)/ (60*60*24));

printf("<br/> Difference is %d years, %d months, %d days\n", $years, $months, $days);
                            echo "<br/> Only Days= ".$days1;
                            ?>
                           
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
                                       <div style="margin-bottom:10px;">
                                      
                                        </div>
                                        <div class="col-md-4">
				
                                        
                                         
                                        </div>
                                        <div class="col-md-4" style="text-align:center;">
                                           
                                            
                         <form class="form" action="{{route('attendence.add')}}" method="post">
                             <div class="form-group">
                                  <span style="border: 1px solid rgb(219, 219, 219);display:inline-block !important;  padding: 3px 0px 3px 6px; border-radius:3px; height:30px; background-color: rgba(234, 234, 234, 0.5); width:400px;  ">
<iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=666666&aj_time=yes&font_size=15&line_brake=0&bikram_sambat=0&api=0511y0h448" width="405" height="30"></iframe></span>
                                           
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
                                     <th style="text-align:center;">SN</th>
                                     <th style="text-align:center;">Name</th>
                                     <th style="text-align:center;">Presence</th>
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
                                       
                                            <p>active</p>
                                           
                                            
                                             </td>
                                         </tr>
                                         
                                         @endforeach
                                        
                                     </tbody>
                                     
                                 </table>
                                        </div>
                                        <div class="col-md-4 notify" style="margin:0px !important;padding:0px !important;">
<!--                                            Counting values-->
                                             <?php $c=0; ?>
                                             @foreach($pr as $p)
                                           <div class="hidden" style="display:none;">{{ $s=$p->items}}</div> 
                                            @if($s>10)
                                            @else
                                             <?php $c++ ?>
                                             @endif
                                             @endforeach
                                            
                                        <h2>Notifications {{ $c}}</h2>
                                           
                                            @foreach($pr as $p)
                                           <div class="hidden" style="display:none;">{{ $s=$p->items}}</div> 
                                            <ul>
                                            @if($s>10)
                                               
                                         <li>
                                               @else
                                             <?php $c++ ?>
                                            <script>alert('Item:{{ $p->product_name}} Left {{ $p->items }}')</script>
                                             
                                              <div class="alert alert-warning alert-dismissable fade in" style="float:left;width:90%;">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   
                                                    <strong>Warning!</strong> <p>Item: {{ $p->product_name}} Left {{ $p->items }}</p>
                                            </div>
                                             
                                               
                                                </li>
                                             @endif
                                            </ul>
                                            @endforeach
                                           
                                        </div>
								
								
                                        
						
					
					
					
					
					</div>
				</div>
			</div>
								
		



</div>
<footer class="footer text-center"> 2018 &copy; VSMS- Stock Management System by Valiant Tech Pvt. Ltd. </footer>
@endsection
