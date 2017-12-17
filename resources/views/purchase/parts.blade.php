@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Purchase Parts
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Purchase Parts</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
      
                <div class="col-md-3" > 
                      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#bikemodal" style="    width: 150px;height: 30px;font-size: 15px; padding:3px 0px 0px 0px; ">Add New Bike Parts</button>
                </div>
        <div class="col-md-9">
            @if ($message = Session::get('success'))
					<div class="alert alert-success" role="alert">
						{{ Session::get('success') }}
					</div>
				@endif

				@if ($message = Session::get('error'))
					<div class="alert alert-danger" role="alert">
						{{ Session::get('error') }}
					</div>
				@endif

				<h3>Import File Directly:</h3>
				<form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">

					<input type="file" name="import_file" style="margin: 0;    display: inline-block;
    margin-top: -12px;
    padding: 0;
    height: 20px;" />
					{{ csrf_field() }}
					

					<button class="btn btn-primary" style="    display: inline-block;">Import CSV or Excel File</button>

				</form>
				<br/>
        </div>
                
<!--            modal-->
            <div class="modal fade" id="bikemodal" role="dialog">
                
                <div class="modal-dialog">
<!--                    modal content-->
                    <div class="modal-content">
                       
                    
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add New Bike Parts</h4>
                    </div>
                    <div class="modal-body">

                        <form id="" method="POST" action="{{route('bikeparts.add')}}" enctype="multipart/form-data">
                               
                                <fieldset>
                                    <div class="input-group">
               
                                        <span class="input-group-addon"><i class="fa fa-first-order">&nbsp;Bike Model Name</i></span>
                                        <input type="text" name="model_name" class="form-control" required />
                                       
                                      </div>
                                    <br/>
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-th-list">&nbsp;Color</i></span>
                                     <select class="form-control select2" style="width: 100%;" name="color" id="" required >

                            
                                          <option>Select</option>
                                          <option value="red">Red</option>
                                          <option value="black">Black</option>
                                          <option value="white">White</option>
                                         

                                        </select>
                                  </div>
                                    <br/>
                                   <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-product-hunt">&nbsp;Parts Number</i></span>
                <input type="text" class="form-control" placeholder="Parts Number" name="partsno" required >
              </div><br/>
                                    <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-product-hunt">&nbsp;Parts Name</i></span>
                <input type="text" class="form-control" placeholder="Parts Name" name="partsname" required >
              </div><br/>
                           
                                    
                                   
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o">&nbsp;Unit Price in NRS</i></span>
                 <input type="text" class="form-control" placeholder="Unit Price" name="unitprice" required ><br/>
              </div><br/>
                                      <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-picture-o">&nbsp;Date Taken</i></span>
                 <input type="date" class="form-control"  name="datetaken" required ><br/>
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
                  <th>Color</th>
                  <th>Date</th>
                  <th>Parts Number</th>
                  <th>Parts name</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($b as $bk)
                    <tr>
                    <td> <?php if(($bk->bike_model)== null){ ?> <?php 
                        
                        echo "Not defined";
}
                        else
                        {
                        echo $bk->bike_model;   
                        }
                        
                    ?></td>
                    <td>
                        <?php if(($bk->color)== null){ ?> <?php 
                        
                        echo "Not defined";
}
                        else
                        {
                        echo $bk->color;   
                        }
                        
                    ?></td>
                    <td>{{$bk->datetaken}}</td>
                    <td>{{$bk->parts_no}}</td>
                    <td>{{$bk->parts_name}}</td>
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
