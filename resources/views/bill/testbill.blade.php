@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Invoice
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Invoice</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
       <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">
    function totalamount(){
        var t=0;
        $('.amount').each(function(i,e){
           var amt=$(this).val()-0;
            t +=amt;
        });
        $('.total').html(t);
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
            '<td><input type="text" name="amount" class="amount form-contol"></td>'+
            '<td><a href="" class="btn btn-danger delete">Delete</a><a href="" class="btn btn-success">Edit</a></td></tr>';
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

<div class="col-md-12">
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
          <td style="border: 0 !important" ><input type="text" value="00123" name="ordername"/></td>
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
            <select name="product_id" class="form-control product_id">
                <option>select</option>
                @foreach($data as $r)
                <option data-price="{{ $r->price }}" value="{{ $s = $r->id }}">
                {{ $r->model }}</option>
                @endforeach
                </select>
            </td>
        
            @foreach($data as $rr)
            
        <input style="display:none;" type="text" name="reg_no" class="qty form-contol" value="{{ $rr->reg_no }}" >
        <input style="display:none;" type="text" name="chasis" class=" form-contol" value="{{ $rr->chasis_number }}" >
        <input style="display:none;" type="text" name="bike_model" class=" form-contol" value="{{ $rr->model }}" >
        <input style="display:none;" type="text" name="engine" class="form-contol" value="{{ $rr->engine_number }}" >
        <input style="display:none;" type="text" name="tdate" class="form-contol" value="<?php echo date('Y-m-d'); ?>" >
          
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
        <td colspan="2" class="total-line" style="text-align:center;" > Subtotal Rs. </td>
        </tr>
        <tr>
        <td colspan="3" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center;"> Discount. </td>
        </tr>
        <tr>
        <td colspan="3" class="blank" ></td>
        <td colspan="2" class="total-line" style="text-align:center;"> Total Rs.  <b class="total" >0</b> </td>
        </tr>
        <tr>
        <td colspan="3" class="blank" ></td>
        <td colspan="1" class="total-line" style="text-align:center;"> Amount Paid</td>
        <td colspan="1" class="total-line" style="text-align:center;"> Rs.<input type="text" name="debit" class="getmoney form-control"/></td>
        </tr>
        <tr>
        <td colspan="3" class="blank" ></td>
        <td colspan="1" class="total-line" style="text-align:center;"> Due Amount  </td>
        <td colspan="1" class="total-line" style="text-align:center;"> Rs. <input type="text" class="backmoney form-control"/> </td>
        </tr>
    </tbody>
    <tfoot>
<!--
        <tr> <th colspan="4">Total <b class="total" >0</b></th></tr>
        <tr><th colspan="4">GetMoney <input type="text" name="debit" class="getmoney form-control"/></th></tr>
        <tr>
        <th colspan="7">BackMoney <input type="text" class="backmoney form-control"/></th></tr>
        
-->
        <th colspan="5"><input type="submit" value="Sell Bike " name="save" class="btn btn-primary" style="height:50px;width:250px;font-size: 35px;"/>
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
				
			
								
                                        </section>


<footer class="footer text-center"> 2018 &copy; VSMS- Stock Management System by Valiant Tech Pvt. Ltd. </footer>
                                              
</div>
@endsection
