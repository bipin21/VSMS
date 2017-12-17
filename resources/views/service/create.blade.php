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
 
    $(function(){
        
        $('.body').delegate('.servicetype','change',function(){
           var tr=$(this).parent().parent(); 
             var st=tr.find('.servicetype option:selected').val();
             if(st=='free'){
                 tr.find('.cost').val('0.00');
             }
             else{
                tr.find('.cost').val(''); 
             }
        });
         $('.body').delegate('.delete','click',function(){
            $(this).parent().parent().remove();
            
        });
       $('.add').click(function(){
           var product=$('.service_id').html();
           var n=($('.body tr').length-0)+1;
           var tr='<tr><th class="no">'+n+'</th>'+
    '<td><input type="text" name="service_id[]" class="form-control service_id" /></td>'+
        '<td><select class="form-control servicetype" name="servicetype[]"><option>Select</option><option value="free">Free</option><option value="paid">Paid</option></select></td>'+'<td><input type="text" name="timedays[]" class="timedays form-contol"  style="width:90px;"></td>'+
               '<td>  <input type="text" name="cost[]" class="cost form-contol"  style="width:110px;"></td>'+
            '<td> <textarea name="message[]" class="message form-contol"  style="width:400px;"></textarea></td>'+
            '<td><a href="" class="btn btn-danger delete">Delete</a></td></tr>';
           
           
          
   $('.body').append(tr);
       });
       
        
        
        
    });
</script>

<div class="col-md-12">
<form  action="{{action('ServiceController@saveservice')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token()}}" />
<table class="table">
    <tr>
        <td>Bike Model</td><td>
        <select name="bikemodel" class="form-control">
        <option>Select</option>
            @foreach($b as $bk)
        <option>{{$bk->model}}</option>
            @endforeach
        </select></td>
    </tr>
     
</table>

<table class="table table-bordered table-hover">
    <thead>
    <th>N</th>
   
    <th>Servie Name</th>
    <th>Service Type</th>
    <th>Time (in Days)</th>
    <th>Service Cost (NRs.)</th>
    <th>Message</th>
    <th>
            </th>
        
        
        
        
    </thead>
    <tbody class="body">
        <tr>
        <th class="no">1</th>
            <td>
            <input type="text" name="service_id[]" class="form-control service_id" />
              
            </td>
        <td>
           <select class="form-control servicetype" name="servicetype[]">
            <option>Select</option>
            <option value="free">Free</option>
            <option value="paid">Paid</option>
            </select>
        </td>
            <td>
        <input type="text" name="timedays[]" class="timedays form-contol" style="width:90px;">
        </td>
            <td>
        <input type="text" name="cost[]" class="cost form-contol" style="width:110px;">
        </td>
            <td>
          <textarea name="message[]" class="message form-contol" style="width:400px;">
                
                </textarea>
        </td>
            <td>
   <a href="" class="btn btn-danger delete">Delete</a>
  
        </td>
        </tr>
    </tbody>
   
</table>
    <input type="button" class="btn btn-primary add" value="Add Row +" />
<input type="submit" value="Save Services" name="save" class="btn btn-success"/>
</form>

    
    </div>

								
								
                                        
							
					
					</div>
				
			
								
                                        </section>


<footer class="footer text-center"> 2018 &copy; VSMS- Stock Management System by Valiant Tech Pvt. Ltd. </footer>
                                              
</div>
@endsection
