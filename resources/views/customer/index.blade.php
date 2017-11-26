@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Customer
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
     
        <a href="home" class="btn btn-success">Back to Dashboard</a><br><br>
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Bike_model</th>
                  <th>Reg_no</th>
                  <th>Price</th>
                  
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($d as $da)
                    <tr>
                      
                    <td>{{$da->cusname}}</td>
                    <td>{{$da->cusaddres}}</td>
                    <td>{{$da->cusphone}}</td>
                    <td>{{$da->bike_model}}</td>
                    <td>{{$da->reg_no}}</td>
                    <td>{{$da->price}}</td>
                    <td>
                        <a  href="{{route('customers.edit',$da->id)}}">
                      <button class="btn btn-primary">View Details</button>
                      </a>&nbsp;&nbsp;
                       <a href="">Edit</a>
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
