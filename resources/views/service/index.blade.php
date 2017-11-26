@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Purchase Bike
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Purchase Bike</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
                <div class="" > 
                      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#bikemodal" style="    width: 150px;height: 30px;font-size: 15px; padding:3px 0px 0px 0px; ">Add New Bike Services</button>
                </div>
                
<!--            modal-->
            <div class="modal fade" id="bikemodal" role="dialog">
                
                <div class="modal-dialog">
<!--                    modal content-->
                    <div class="modal-content">
                       
                    
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add  Bike Services</h4>
                    </div>
                    <div class="modal-body">

                        <form id="" method="POST" action="{{route('bikeservice.add')}}" enctype="multipart/form-data">
                               
                                <fieldset>
                                    
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-th-list">&nbsp;Bike Model</i></span>
                                     <select class="form-control select2" style="width: 100%;" name="bikemodel" id="" required >

                            
                                          <option>Select</option>
                                          @foreach($b as $bb)
                                          <option value="{{$bb->model}}">{{$bb->model}}</option>
                                            @endforeach
                                         

                                        </select>
                                  </div>
                                    <br/>
                                   <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-product-hunt">&nbsp;Service Name</i></span>
                <input type="text" class="form-control" placeholder="Service Name or Number" name="servicename" required >
              </div><br/>
                                     <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list">&nbsp;Service Type</i></span>
                <select class="form-control select2" style="width: 100%;" name="servicetype" id="" required >

                            
                                          <option>Select</option>
                                          <option value="free">Free</option>
                                          <option value="paid">Paid</option>
                                         </select>
                    <br/>
              </div><br/>
                                     <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money">&nbsp;Time (in Days)</i></span>
                <input type="number" class="form-control" placeholder="Service Time" name="servicetime" required ><br/>
              </div><br/>
                                    <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money">&nbsp;Message</i></span>
                <textarea  name="servicemessage" type="text" placeholder="Service message" class="form-control">
                                        
                                        </textarea><br/>
              </div><br/>
            
<!--
                <div class="input-group">
                                                  <span class="input-group-addon"><i class="fa fa-info-circle">&nbsp;Product Status</i></span>
                                                <select class="form-control" id="Bike_status" name="Bike_status">

                                
                                                  <option value="Available">~Available~</option>
                                                  <option valu="Not Available">~Not Available~</option>
                                
                                                </select>
                   
                </div> 
-->
                     <br/>   
                                     <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="addcategory">Submit</button>
              </div>
            <input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                
                                </fieldset>

                               
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
       
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Bike Model</th>
                  <th>Service Name</th>
                  <th>Type</th>
                  <th>Time Interval</th>
                  <th>Message</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($s as $bb)
                    <tr>
                    <td>{{ $bb->bike_model }}</td>
                    <td>{{ $bb->name}}</td>
                    <td>{{$bb->type}}</td>
                    <td>{{$bb->timeinterval}}</td>
                    <td>{{$bb->message}}</td>
                    <td>*</td>
                   
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
