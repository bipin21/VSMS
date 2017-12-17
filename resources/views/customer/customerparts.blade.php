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
    '<td><select name="product_id[]" class="form-control product_id">'+product+'</select></td>'+
        '<td> @foreach($data as $rr)<input style="display:none;" type="text" name="reg_no[]" class="qty form-contol" value="{{ $rr->parts_no }}" ><input style="" type="text" name="parts_name[]" class="qty form-contol" value="{{ $rr->parts_name }}" >@endforeach</td>'+
            '<td><input type="text" name="price[]" class="price form-contol"></td>'+
            '<td><input type="number" name="dis[]" class="dis form-contol"></td>'+
            '<td><input type="text" name="amount[]" class="amount form-contol"></td>'+
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
             var total=(price) + ((price * dis)/100);
             tr.find('.amount').val(total);
             totalamount()
        });
         $('.body').delegate('.qty,.dis','keyup',function(){
             var tr=$(this).parent().parent();
             
             var dis=tr.find('.dis').val()-0;
             var price=tr.find('.price').val()-0;
             var total=(price) + (( price * dis)/100);
             tr.find('.amount').val(total);
             totalamount()
        });
        
    });
</script>

<div class="col-md-12">
<form  action="{{action('BillController@partsbillsave')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token()}}" />
<table class="table">
    <tr>
        <td>Order Name</td><td><input type="text" class="form-control" name="ordername"/></td>
    </tr>
        <tr>
          <td>Customer Name</td><td><input type="text" class="form-control" name="customername" value="{{$da->cusname}}"/></td>
    </tr>
    <tr>
          <td>Customer Address</td><td><input type="text" class="form-control" name="customeraddress" value="{{$da->cusaddres}}"/></td>
    </tr>
    <tr>
          <td>Custom Phone</td><td><input type="text" class="form-control" name="customerphone" value="{{$da->cusphone}}"/></td>
    </tr>
</table>
<input type="submit" value="Order" name="save" class="btn btn-primary"/>
<table class="table table-bordered table-hover">
    <thead>
    <th>N</th>
   
    <th>Parts_Name</th>
    <th>Parts_No</th>
    <th>Price</th>
    <th>Add Cost</th>
    <th>Amount</th>
    <th><input type="button" class="btn btn-primary add" value="Add Row +" />
            </th>
        
        
        
        
    </thead>
    <tbody class="body">
        <tr>
        <th class="no">1</th>
            <td>
            <select name="product_id[]" class="form-control product_id">
                <option>select</option>
                @foreach($data as $r)
                <option data-price="{{ $r->price }}" value="{{  $r->id }}">
                {{ $r->parts_name }}</option>
                @endforeach
                </select>
            </td>
        <td>
            @foreach($data as $rr)
            <div style="display:none;">{{$s1=$rr->id}}</div>
           
        <input style="display:none;" type="text" name="reg_no[]" class="qty form-contol" value="{{ $rr->parts_no }}" >
        <input style="display:none;" type="text" name="parts_name[]" class="qty form-contol" value="{{ $rr->parts_name }}" >
         
             @endforeach
        </td>
            <td>
        <input type="text" name="price[]" class="price form-contol">
        </td>
            <td>
        <input type="number" name="dis[]" class="dis form-contol">
        </td>
            <td>
        <input type="text" name="amount[]" class="amount form-contol">
        </td>
            <td>
   <a href="" class="btn btn-danger delete">Delete</a>
   <a href="" class="btn btn-success">Edit</a>
        </td>
        </tr>
    </tbody>
    <tfoot>
        <tr> <th colspan="7">Total <b class="total">0</b></th></tr>
        <tr><th colspan="7">GetMoney <input type="text" name="debit" class="getmoney form-control"/></th></tr>
        <tr>
        <th colspan="7">BackMoney <input type="text" class="backmoney form-control"/></th></tr>
    
    </tfoot>
</table>

</form>

    
    </div>

								
								
                                        
							
					
					</div>
				
			
								
                                        </section>


<footer class="footer text-center"> 2018 &copy; VSMS- Stock Management System by Valiant Tech Pvt. Ltd. </footer>
                                              
</div>
@endsection
