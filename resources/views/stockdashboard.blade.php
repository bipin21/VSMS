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
                  <div class="divheader" style="    background: #09649a;
    /* background-color: #09649a; */
    color: white;
    padding: 5px 0px 1px 20px;">
                  <p>Save Sales Record</p>
                  </div>
                     <div class="row col-md-12" style="height: 440px; overflow-y: scroll;">
			
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
				  .nab{
					  margin:10px;
				  }
				  .billInput{
					  width: 60%;
					  margin: 0px;
				  }
				  .billInput1{
					  width: 40%;
					  margin: 0;
				  }
				  .desCol{
					  width: 39%;
				  }
				  .soldItemsRow{
					  text-align: right;
					  
				  }
				  .soldItemsRow td, th{padding: 5px;}
				  a:hover{
					  padding:0;
					cursor:pointer !important;
				  }
				 
                  </style>
                    <!--col -->
				
                        <div class="white-box" style=" padding:0 !important; margin-top: 10px;">
                            <div class="col-in row">
                               <div class="col-md-12">
                                 <div class="tab" style="margin:0 !important;">
                                   <ul id="myTab" class="nav nav-tabs">
                                          <li class="active"><a href="#home" data-target="#home, #home_else" data-toggle="tab">Bikes</a></li>
                                          <li><a href="#profile" data-target="#profile, #profile_else" data-toggle="tab">Parts</a></li>
                                      </ul>

                                     </div>




                                <div id="myTabContent" class="tab-content" style="margin-top:5px !important;">
                                    <div class="tab-pane fade in active" id="home_else">
                                 <!--    <table border=1>
<tr>
<td>
<style>
.customer th, td, .transaction th, td, .addItem th, td{
	font-size:11px;
	text-align:left;

}
.customer{
	margin: 1px 0 0 1px;
}
.transaction{
	margin:-96px 1px 0 500px;
}
table{
	border-spacing:0;
}
table .addItem{
	width:100%;
}
input{
	line-height: 0;
}

</style> -->

<div id="printarea">
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">
    function totalamount(){
        var t=0;
        $('.amount').each(function(i,e){
           var amt=$(this).val()-0;
            t +=amt;
        });
        $('.total').html(t);
        $('.stotal').html(t);
    }
    $(function(){
        $('.getmoney').change(function(){
           var total=$('.total').html();
            var getmoney=$(this).val();
            var t=getmoney-total;
            $('.backmoney').val(t).toFixed(2);
        });
       $('.add').click(function(){
           var product=$('.product_id').html();
           var n=($('.body tr').length-0)+1;
           var tr='<tr><th class="no">'+n+'</th>'+
    '<td><select name="product_id" class="form-control product_id">'+product+'</select></td>'+
        ' @foreach($data as $rr)<input style="display:none;" type="text" name="reg_no" class="qty form-contol" value="{{ $rr->reg_no }}" ><input style="display:none;" type="text" name="chasis" class="qty form-contol" value="{{ $rr->chasis_number }}" >        <input style="display:none;" type="text" name="bike_model" class="qty form-contol" value="{{ $rr->model }}" >        <input style="display:none;" type="text" name="engine" class="qty form-contol" value="{{ $rr->engine_number }}" >@endforeach'+
            '<td><input type="text" name="price" class="price form-contol"></td>'+
            '<td><input type="text" name="dis" class="dis form-contol"></td>'+
            '<td><input type="text" name="amount" class="amount form-contol"></td></tr>';
   $('.body').append(tr);
       });
        $('.body').delegate('.delete','click',function(){
            $(this).parent().parent().remove();
            totalamount()
        });
         $('.body').delegate('.product_id','change',function(){
            var tr= $(this).parent().parent();
             var unitprice = tr.find('.product_id option:selected').attr('data-price');
//             alert(unitprice);
             tr.find('.price').val(unitprice);
             
              var tr=$(this).parent().parent();
             var reg=tr.find('.reg').val()-0;
             var dis=tr.find('.dis').val()-0;
             var price=tr.find('.price').val()-0;
             var total=(price) - ((price * dis)/100);
             tr.find('.amount').val(total);
             totalamount()
        });
         $('.body').delegate('.qty,.dis','keyup',function(){
             var tr=$(this).parent().parent();
             
             var dis=tr.find('.dis').val()-0;
             var price=tr.find('.price').val()-0;
             var total=(price) - (( price * dis)/100);
             tr.find('.amount').val(total);
             totalamount()
        });
        
    });
</script>

<div class="col-md-12" style="background:#fff;">
<form  action="{{action('BillController@bikesellsave')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token()}}" />
<!--
<table class="table">
    <tr>
        <td>Order Name</td><td><input type="text" class="form-control" name="ordername" required/></td>
    </tr>
        <tr>
          <td>Customer Name</td><td><input type="text" class="form-control" name="customername" required/></td>
    </tr>
    <tr>
          <td>Customer Address</td><td><input type="text" class="form-control" name="customeraddress" required/></td>
    </tr>
    <tr>
          <td>Custom Phone</td><td><input type="text" class="form-control" name="customerphone" required/></td>
    </tr>
</table>
-->
<table >
        <tr >
          <tr>
          <th class="meta-head"  style="border: 0 !important">Invoice #</th>
             @foreach($oid as $od)
              <p style="display:none;"><?php  $ood =$od->ordername;
                 
                  ?></p>
          <td style="border: 0 !important" ><input type="text" value="{{ $ood+1  }}" name="ordername"/></td>
              @endforeach
          </tr>
          <tr>
          
          <th style="border: 0 !important" >Date:</th>
              <td style="border: 0 !important"><span id="">{{ new Date()}} </span></td><br/>

          </tr>
          <tr>
          <th style="border: 0 !important">Customer Name:</th>
          <td style="border: 0 !important"><input type="text" id="customer_name" name="customername"/></td>
      
          <th style="border: 0 !important">Street Name:</th>
          <td style="border: 0 !important"><input type="text" id="street_name" name="streetName"/></td>
       
          <th style="border: 0 !important">Location</th>
          <td style="border: 0 !important"><input type="text" id="location" name="customeraddress"/></td>
        
          
        </tr>
    <tr>
    <th style="border: 0 !important">Phone:</th>
          <td style="border: 0 !important"><input type="text" id="phone" name="customerphone"/></td>
        
          <th style="border: 0 !important">PAN:</th>
          <td style="border: 0 !important"><input type="text" id="pan" name="pan" onchange="change()"/></td>
    </tr>

                </table>
<table class="" id="items">
    <thead>
    <th>N</th>
    <th>Bike Model</th>
    
    <th>Price</th>
    <th>Discount</th>
    <th>Amount</th>
   
        
        
        
        
    </thead>
    <tbody class="body" >
        <tr>
        <th class="no">1</th>
            <td>
            <select name="product_id" class="form-control product_id" style="height: 40px;">
                <option>select</option>
                @foreach($data as $r)
                <option data-price="{{ $r->price }}" value="{{ $s = $r->id }}">
                {{ $r->model}}</option>
                @endforeach
                </select>
            </td>
        
            @foreach($data as $rr)
             <?php 
            if($s==$rr->id){
            ?>
        <input style="display:none;" type="text" name="reg_no" class="qty form-contol" value="{{ $rr->reg_no }}" >
        <input style="display:none;" type="text" name="chasis" class=" form-contol" value="{{ $rr->chasis_number }}" >
        <input style="display:none;" type="text" name="bike_model" class=" form-contol" value="{{ $rr->model }}" >
        <input style="display:none;" type="text" name="engine" class="form-contol" value="{{ $rr->engine_number }}" >
        <input style="display:none;" type="text" name="tdate" class="form-contol" value="<?php echo date('Y-m-d'); ?>" >
          <?php 
            }
            ?>
             @endforeach
       
            <td>
        <input type="text" name="price" class="price form-contol">
        </td>
            <td>
        <input type="text" name="dis" class="dis form-contol">
        </td>
            <td>
        <input type="text" name="amount" class="amount form-contol">
        </td>
           
        </tr>
        <tr>
        <td colspan="3" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center;height: 40px;" > Subtotal Rs. <b class="stotal" >0</b> </td>
        </tr>
        <tr>
        <td colspan="3" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center;height: 40px;"> Discount. </td>
        </tr>
        <tr>
        <td colspan="3" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center;height: 40px;"> Total Rs.  <b class="total" >0</b> </td>
        </tr>
        <tr>
        <td colspan="3" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center; "> Amount Paid  Rs.<input type="text" name="debit" class="getmoney form-control" style=" width: 60% !important;
    height:40px !important; display:inline-block;"/></td>
        </tr>
        <tr>
        <td colspan="3" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center; "> Due Amount  Rs. <input type="text" class="backmoney form-control" style=" width: 60% !important;
    height:40px !important; display:inline-block;" /> </td>
        </tr>
    </tbody>
    <tfoot>

        <th colspan="5"><input type="submit" value="Sell Bike " name="save" class="btn btn-primary" style="height:50px;width:250px;font-size: 35px;"/>
<!--             <input type="submit" value="Print & Save" onclick="printval('printablearea')"  name="save" class="btn btn-success" style="float:right;height:50px;width:250px;font-size: 35px;"/>-->
           
        </th>
    </tfoot>
</table>

   
</form>

    
    <script type="text/javascript">
        function printval(divname){
            var printcontents=document.getElementById(divname);
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = originalContents;
            window.print();
        }
    </script> 
    </div>

								
								
                                        
</div>
</div>
                                           <div class="tab-pane fade in " id="profile_else">
                                

<div id="printarea">

<script type="text/javascript">
    function totalamount1(){
        var t1=0;
        $('.amount1').each(function(i,e){
           var amt1=$(this).val()-0;
            t1 +=amt1;
        });
       
        $('.total1').html(t1);
        $('.subtotal').html(t1);
    }
    $(function(){
        $('.getmoney1').change(function(){
           var total1=$('.total1').html();
            var getmoney1=$(this).val();
            var t1=getmoney1-total1;
            $('.backmon').val(t1).toFixed(2);
        });
        $('.totaldis').change(function(){
           var ttl=$('.subtotal').html();
            var tdis=$(this).val();
            var finaltotal=ttl-((ttl*tdis)/100);
            $('.total1').val(finaltotal).toFixed(2);
        });
       $('.add1').click(function(){
           var product1=$('.product_id1').html();
           var n1=($('.body1 tr').length-0)+1;
           var tr1='<tr><th class="no1">'+n1+'</th>'+
    '<td><select name="product_id1[]" class="form-control product_id1" style="height: 40px;">'+product1+'</select></td>'+
            '<td><input type="text" name="price1[]" class="price1 form-contol"></td>'+
               '<td><input type="number" name="qty1[]" class="qty1 form-contol"></td>'+
            '<td><input type="number" name="dis1[]" class="dis1 form-contol"></td>'+
            '<td><input type="text" name="amount1[]" class="amount1 form-contol"></td></tr>';
   $('.body1').append(tr1);
       });
        $('.body1').delegate('.delete1','click',function(){
            $(this).parent().parent().remove();
            totalamount1()
        });
         $('.body1').delegate('.product_id1','change',function(){
            var tr1= $(this).parent().parent();
             var unitprice1 = tr1.find('.product_id1 option:selected').attr('data-price1');
//             alert(unitprice);
              tr1.find('.qty1').val(1);
             tr1.find('.price1').val(unitprice1);
             
              var tr1=$(this).parent().parent();
             var reg1=tr1.find('.reg1').val()-0;
             var reg1=tr1.find('.reg1').val()-0;
             var dis1=tr1.find('.dis1').val()-0;
             var q1=tr1.find('.qty1').val()-0;
             var price1=tr1.find('.price1').val()-0;
             var total1=(price1*q1) - ((price1 * dis1*q1)/100);
             tr1.find('.amount1').val(total1);
            
             totalamount1()
        });
         $('.body1').delegate('.qty1,.dis1','keyup',function(){
             var tr1=$(this).parent().parent();
             
             var dis1=tr1.find('.dis1').val()-0;
             var price1=tr1.find('.price1').val()-0;
             var q1=tr1.find('.qty1').val()-0;
             var total1=(price1*q1) - (( price1 * dis1*q1)/100);
             tr1.find('.amount1').val(total1);
             totalamount1()
        });
        
    });
</script>
<div class="col-md-12" style="background:#fff;">
<form  action="{{action('BillController@partsbillsave')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token()}}" />

    <p>parts</p>
<table >
        <tr >
          <tr>
          <th class="meta-head"  style="border: 0 !important">Invoice #</th>
              @foreach($oid1 as $od1)
              <p style="display:none;"><?php  $ood1 =$od1->ordername;
                 
                  ?></p>
          <td style="border: 0 !important" ><input type="text" value="{{ $ood1+1  }}" name="ordername1"/></td>
              @endforeach
          </tr>
          <tr>
          
          <th style="border: 0 !important" >Date:</th>
              <td style="border: 0 !important"><span id="">{{ new Date()}} </span></td><br/>

          </tr>
          <tr>
          <th style="border: 0 !important">Customer Name:</th>
          <td style="border: 0 !important"><input type="text" id="customer_name" name="customername1"/></td>
      
          <th style="border: 0 !important">Street Name:</th>
          <td style="border: 0 !important"><input type="text" id="street_name" name="streetName1"/></td>
       
          <th style="border: 0 !important">Location</th>
          <td style="border: 0 !important"><input type="text" id="location" name="customeraddress1"/></td>
    </tr>
    <tr>
          <th style="border: 0 !important">Phone:</th>
          <td style="border: 0 !important"><input type="text" id="phone" name="customerphone1"/></td>
        
          <th style="border: 0 !important">PAN:</th>
          <td style="border: 0 !important"><input type="text" id="pan" name="pan" onchange="change()"/></td>
        </tr>

                </table>
<table class="" id="items">
    <thead>
    <th>N</th>
    <th>Parts Name</th>
    
    <th>Price</th>
    <th>Qunatity</th>
    <th>Discount</th>
    <th>Amount</th>
   
        
        
        
        
    </thead>
    <tbody class="body1" >
        <tr>
        <th class="no1">1</th>
            <td>
            <select name="product_id1[]" class="form-control product_id1" style="height: 40px;">
                 <option>select</option>
                @foreach($dataparts as $r1)
                <option data-price1="{{ $r1->price }}" value="{{  $r1->id }}">
                {{ $r1->parts_name }}</option>
                @endforeach
                </select>
            </td>
        
            @foreach($dataparts as $rr1)
            
         <div style="display:none;">{{$s1=$rr1->id}}</div>
           
        <input style="display:none;" type="text" name="reg_no1[]" class="qty form-contol" value="{{ $rr1->parts_no }}" >
        <input style="display:none;" type="text" name="parts_name1[]" class="qty form-contol" value="{{ $rr1->parts_name }}" >
         
        <input style="display:none;" type="text" name="tdate" class="form-contol" value="<?php echo date('Y-m-d'); ?>" >
          
             @endforeach
       
            <td>
        <input type="text" name="price1[]" class="price1 form-contol">
        </td>
            <td>
        <input type="number" name="qty1[]" class="qty1 form-contol">
        </td>
            <td>
        <input type="text" name="dis1[]" class="dis1 form-contol">
        </td>
            <td>
        <input type="text" name="amount1[]" class="amount1 form-contol">
        </td>
           
        </tr>
        
         </tbody>
    <tfoot>
        <tr>
        <td colspan="6"><input type="button" class="btn btn-primary add1" value="Add Row +" /></td>
            
        </tr>
<!--
        <tr id="hiderow">
        <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
      </tr>
-->
        <tr>
        <td colspan="4" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center;height: 40px;" > Subtotal Rs. <b class="subtotal" >0</b> </td>
        </tr>
        <tr>
        <td colspan="4" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center;height: 40px;"> Discount. <input type="text" name="totaldis1" class="totaldis form-control" style=" width: 60% !important;
    height:40px !important; display:inline-block;"/></td>
        </tr>
        <tr>
        <td colspan="4" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center;height: 40px;"> Total Rs.  <b class="total1" >0</b> </td>
        </tr>
        <tr>
        <td colspan="4" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center; "> Amount Paid  Rs.<input type="text" name="debit1" class="getmoney1 form-control" style=" width: 60% !important;
    height:40px !important; display:inline-block;"/></td>
        </tr>
        <tr>
        <td colspan="4" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center; "> Due Amount  Rs. <input type="text" class="backmon form-control" style=" width: 60% !important;
    height:40px !important; display:inline-block;" /> </td>
        </tr>
   

        <th colspan="6"><input type="submit" value="Sell Bike " name="save" class="btn btn-primary" style="height:50px;width:250px;font-size: 35px;"/>
             <input type="submit" value="Print & Save" onclick="printval('printablearea')"  name="save" class="btn btn-success" style="float:right;height:50px;width:250px;font-size: 35px;"/>
           
        </th>
    </tfoot>
</table>

   
</form>

    
    <script type="text/javascript">
        function printval(divname){
            var printcontents=document.getElementById(divname);
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = originalContents;
            window.print();
        }
    </script> 
    </div>

								
								
                                        
</div>
</div>
                    </div>
                                </div>
                            </div>
                         </div>
                  </div>
                    </div>
</div>



        <!-- 
<script src="resources/js/jquery-2.2.4.min.js"></script> -->
<script>
// alertify.alert('Ready!');


</script>

  
@endsection
