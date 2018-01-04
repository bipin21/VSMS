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
        <li><a href="#">Add Content</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
        <a href="staff" class="btn btn-success">Back to Staff</a><br><br>
            {!! Form::model($editid, ['method' => 'PATCH','route' => ['staff.update', $editid->id]]) !!}
            
               
                 <div class="form-group">
                <label for="title">Full Name</label>
                <input class="form-control" name="sname" type="text" value="{{$editid->name}}" id="title" required> 
                </div>
                
              <div class="form-group">
                <label for="title">Address</label>
                <input class="form-control" name="saddress" type="text" value="{{$editid->address}}" id="title" required> 
                </div>
                <div class="form-group">
                <label for="title"> Phone</label>
                <input class="form-control" name="sphone" type="text" id="title" value="{{$editid->phone}}" required> 
                </div>
               
                <div class="form-group">
                <label for="title"> Start Date</label>
                <input class="form-control" name="sdate" type="date" value="{{$editid->sdate}}" id="title" required> 
                </div>
                 <div class="form-group">
                <label for="title"> Post</label>
                <input class="form-control" name="spost" type="text" value="{{$editid->spost}}" id="title" required> 
                </div> 
                 <div class="form-group">
                <label for="title"> Type</label>
                <input class="form-control" name="stype" type="text" id="title" value="{{$editid->stype}}" required> 
                </div>

                

           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          <input type="hidden" name="editid" value="{{$editid->id}}"/>
            <input class="btn btn-danger" type="reset" value="Clear">
            <input class="btn btn-primary" type="submit" value="Submit" name="addcontent"> <br><br>                                                             
       {!! Form::close() !!}
    
    </div>
</section><!-- /.content -->
								
								
                                        
							
					
					</div>
				</div>
			</div>
								
		


<footer class="footer text-center"> 2018 &copy; VSMS- Stock Management System by Valiant Tech Pvt. Ltd. </footer>
</div>
@endsection
