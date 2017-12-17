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

                    <button type="button" class="btn btn-success btn-lg" ><a href="addserv" style="color:#fff;">Add  Services</a></button>
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
