@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Inventory Parts
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Inventory Parts</a></li>
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
                
              
                  <th>Parts Model</th>
                  <th>Stock</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $c)
                    <tr>
                        
                    <td>{{$c->parts_name}}</td>
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
