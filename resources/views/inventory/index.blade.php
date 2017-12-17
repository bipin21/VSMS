@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Inventory Bike
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Inventory Bike</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
        <a href="home" class="btn btn-success">Back to Dashboard</a><br><br>
        {{$tdt}}
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  
                  <th>Bike Model</th>
                  <th>Stock Remains</th>
                  
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $c)
                    <tr>
                        
                    <td>{{$c->model}}</td>
                    <td>{{$c->units}}</td>
                    
                    <td>Check</td>
                    
                    
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
