@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Enquiry
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">AddEnquiry</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
        <a href="addenquiry" class="btn btn-success">Add New Enquiry</a><br><br>
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Date</th>
                  <th>Enquiry About</th>
                  <th>Message</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($datas as $data)
                    <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->topic}}</td>
                    <td>{{$data->message}}</td>
                    <td><i class="fa fa-edit"></i><i class="fa fa-trash"></i></td>
                    
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
