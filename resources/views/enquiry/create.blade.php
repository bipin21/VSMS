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
        <li><a href="#">Add Content</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
        <a href="enquiry" class="btn btn-success">Back to Enquiry</a><br><br>
            <form method="POST" action="{{route('enquiry.add')}}" accept-charset="UTF-8" enctype="multipart/form-data"><input name="" type="hidden" value="">
            
               
                 <div class="form-group">
                <label for="title">Full Name</label>
                <input class="form-control" name="ename" type="text" id="title" required> 
                </div>
                
              <div class="form-group">
                <label for="title">Address</label>
                <input class="form-control" name="eaddress" type="text" id="title" required> 
                </div>
                <div class="form-group">
                <label for="title"> Phone</label>
                <input class="form-control" name="ephone" type="text" id="title" required> 
                </div>
                <div class="form-group">
                <label for="title"> Enquiry About</label>
                <input class="form-control" name="etopic" type="text" id="title" required> 
                </div>
                <div class="form-group">
                <label for="title"> Date</label>
                <input class="form-control" name="edate" type="date" id="title" required> 
                </div>
                
                <div class="form-group">
                <label for="title">Message</label>
                <textarea class="form-control" name="edetails" required>
                    
                    </textarea>
                </div>
                
<input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
          
            <input class="btn btn-danger" type="reset" value="Clear">
            <input class="btn btn-primary" type="submit" value="Submit" name="addcontent"> <br><br>                                                             
        </form>
    
    </div>
</section><!-- /.content -->
								
								
                                        
							
					
					</div>
				</div>
			</div>
								
		


<footer class="footer text-center"> 2018 &copy; VSMS- Stock Management System by Valiant Tech Pvt. Ltd. </footer>
</div>
@endsection
