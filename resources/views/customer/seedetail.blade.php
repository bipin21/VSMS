@extends('layouts.mast1')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Customer Profile
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Customer</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
        <a href="../../customer" class="btn btn-success">Back to Customer</a><br><br>
          <div class="box-body">
              <p>
                  Name:&nbsp;{{$d->cusname}}<br/>
                  Address:&nbsp;{{$d->cusaddres}}<br/>
                  Phone:&nbsp;{{$d->cusphone}}<br/>
                  Model:&nbsp;{{$d->bike_model}}<br/>
              
              </p>
                    <a  href="{{route('ledgers.edit',$d->id)}}">
                      <button class="btn btn-primary">View  Ledger Details</button>
                      </a>&nbsp;&nbsp;
              <a  href="{{route('customerparts.edit',$d->id)}}">
                      <button class="btn btn-primary">Add new Parts</button>
                      </a>&nbsp;&nbsp;
          <h2 style="text-align:center;color:green;">*** Bike Service History ***</h2>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Service Name</th>
                 
                  <th>service Time</th>
                  <th>service Type</th>
                  <th>Status</th>
                  <th>Message</th>
                 
                  
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($da as $dd)
                    <tr>
                    
                 
                    <td>{{$dd->serv_name}}</td>
                    <td>{{$dd->servicetime}}</td>
                    <td>{{$dd->serv_type}}</td>
                   
                    <td><?php if(($dd->serv_status)== null){ ?> <?php 
                        
                        echo "Not defined";
}
                        else
                        {
                        echo $dd->serv_status;   
                        }
                        
                    ?>
                        
                        </td>
                         <td>{{$dd->message}}</td>
                    <td>
                        <a name="editserv" role="button"  class="btn btn-success form-control" data-toggle="modal" data-target="#editmodal{{$dd->id}}"> 
                        Edit
                        </a>
                        <div class="modal fade" id="editmodal{{$dd->id}}" role="dialog"> 
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title">Edit Service</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('customersupdate.update')}}" method="post"  enctype="multipart/form-data">
                                            <fieldset>
                                               <div class="input-group">
                                                  
                                                    <input  style="display:none;" type="text" class="form-control" name="serviceid" value="{{$dd->id}}"/>
                                                </div>
                                                
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-first-order">&nbsp;Service Name</i></span>
                                                    <input type="text" class="form-control" name="servicename" value="{{$dd->serv_name}}"required/>
                                                </div><br/>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-first-order">&nbsp;Service Time</i></span>
                                                    <input type="text" class="form-control" name="servicetime" value="{{$dd->servicetime}}" required/>
                                                </div><br/>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-first-order">&nbsp;Service Type</i></span>
                                                    <input type="text" class="form-control" name="servicetype" value="{{$dd->serv_type}}" required/>
                                                </div><br/>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-first-order">&nbsp;Service Status</i></span>
                                                    <input type="text" class="form-control" name="servicestatus" value="{{$dd->serv_status}}" required/>
                                                </div><br/>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-first-order">&nbsp;Message</i></span>
                                                   <textarea name="message" class="form-control" >
                                                    {{$dd->message}}
                                                    </textarea>
                                                </div><br/>
                                               
                                                
                                                <div class="input-group">
                                                    <input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          
                                                    <input type="submit" class="btn btn-success" value="update" name="updateservice"/>
                                                </div>
                                            </fieldset>
                                            
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="close btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </td>
                    
                    </tr>
                   @endforeach
                   
                  </tbody>
              </table>
              
        </div>
    
    </div>
</section><!-- /.content -->
								
								
                                        
							
					
					</div>
				</div>
			</div>
								
		


<footer class="footer text-center"> 2018 &copy; VSMS- Stock Management System by Valiant Tech Pvt. Ltd. </footer>
           
</div>
@endsection
