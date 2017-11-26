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
     
        <a href="../../home" class="btn btn-success">Back to Dashboard</a><br><br>
          <div class="box-body">
              <p>
                  Name:&nbsp;{{$d->cusname}}<br/>
                  Address:&nbsp;{{$d->cusaddres}}<br/>
                  Phone:&nbsp;{{$d->cusphone}}<br/>
                  Model:&nbsp;{{$d->bike_model}}<br/>
              
              </p>
             
          <h2 style="text-align:center;color:green;">*** Bike Service History ***</h2>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Service Name</th>
                 
                  <th>service Time</th>
                  <th>service Type</th>
                  <th>Status</th>
                 
                  
                 
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
                    <td>
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
