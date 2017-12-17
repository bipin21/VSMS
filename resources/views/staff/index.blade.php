@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Staff
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Staff</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
        <a href="addstaff" class="btn btn-success">Add New Staff</a><br><br>
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Post</th>
                  <th>Type</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Start Date</th>
                  <th>Attendence</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    
                        @foreach($data as $d)
                    <tr>
                    <td>{{$d->name}}</td>
                    <td>{{$d->spost}}</td>
                    <td>{{$d->stype}}</td>
                    <td>{{$d->address}}</td>
                    <td>{{$d->phone}}</td>
                    <td>{{$d->sdate}}</td>
                    <td>
                        <?php 
                        $cn=0;
                        foreach($data1 as $d1){
                          if($d->id==$d1->staff_id){
                              
                          
                            
                        $cn++;
                          }
                        }
                        echo $cn;
                        ?>
                        </td>
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
