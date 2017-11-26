@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><i class="fa fa-dashboard">&nbsp;</i>Dashboard &nbsp;<i class="fa fa-angle-right"></i>&nbsp;Purchase</h4> </div>
                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                      
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard">&nbsp;</i>Dashboard &nbsp;<i class="fa fa-angle-right"></i>&nbsp;Purchase</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
									<h2 style="font-weight: bold; text-transform: uppercase">

									Enquiry Timeline
									<div class="col-md-2 col-sm-4 col-xs-12 pull-right">
										
									</div>
                                                                                     
								</h2>
                                         <section class="content-header">
      <h1>
       Events
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
     
        <a href="" class="btn btn-success">Back to Dashboard</a><br><br>
            <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data"><input name="" type="hidden" value="">
            
                <div class="form-group">
                <label for="picture">Image</label><br>
                <input id="profile-img" name="file" type="file"  required>
                <i style="color:red;">Image size 850*480 or 1200*800</i>
<img src="" id="profile-img-tag" width="200px" />

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>      </div>
                 <div class="form-group">
                <label for="title">Event Name</label>
                <input class="form-control" name="ename" type="text" id="title" required> 
                </div>
                <div class="form-group">
                <label for="title">Event Type</label>
                <input class="form-control" name="etype" type="text" id="title" required> 
                </div>
              
                <div class="form-group">
                <label for="title">Event Location</label>
                <input class="form-control" name="elocation" type="text" id="title" required> 
                </div>
                <div class="form-group">
                <label for="title">Event Start Date</label>
                <input class="form-control" name="esd" type="date" id="title" required> 
                </div>
                <div class="form-group">
                <label for="title">Event Start Time</label>
                <input class="form-control" name="est" type="time" id="title" required> 
                </div>
                 <div class="form-group">
                <label for="title">Event Close Date</label>
                <input class="form-control" name="ecd" type="date" id="title" required> 
                </div>
                <div class="form-group">
                <label for="title">Event Close Time</label>
                <input class="form-control" name="ect" type="time"  required> 
                </div>
                <div class="form-group">
                <label for="title">Event Details</label>
                <textarea class="form-control" name="edetails" required>
                    
                    </textarea>
                </div>
                

          
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
