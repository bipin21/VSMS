@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Ledger Report
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Ledger</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container box-success"><br>
     
                <div class="" > 
                      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#bikemodal" style="    width: 150px;height: 30px;font-size: 15px; padding:3px 0px 0px 0px; ">Add New Ledger</button>
                </div>
                
<!--            modal-->
            <div class="modal fade" id="bikemodal" role="dialog">
                
                <div class="modal-dialog">
<!--                    modal content-->
                    <div class="modal-content">
                       
                    
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add New Ledger</h4>
                    </div>
                    <div class="modal-body">

                        <form id="" method="POST" action="{{route('ledger.add')}}" enctype="multipart/form-data">
                               
                                <fieldset>
                                    <div class="input-group">
               
                                        <span class="input-group-addon"><i class="fa fa-first-order">&nbsp;Customer Name</i></span>
                                        <select name="customer" class="form-control">
                                            <option>Select</option>
                                            @foreach($cuse as $cse)
                                            <option value="{{$cse->id}}">{{$cse->cusname}}</option>
                                            @endforeach
                                        </select>
                                       
                                      </div>
                                    <br/>
                                  
                                   <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-product-hunt">&nbsp;Credit</i></span>
                <input type="text" class="form-control" placeholder="Credit Nrs." name="credit" value="0.0" >
              </div><br/>
                                     <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list">&nbsp;Purpose</i></span>
                <input type="text" class="form-control" placeholder="Purpose" name="purpose"  ><br/>
              </div><br/>

                                    <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-money">&nbsp;Debit</i></span>
                <input type="text" class="form-control" placeholder="Debit Nrs." name="debit"  value="0.0"><br/>
              </div><br/>
           

                     <br/>   
                                     <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="addcategory">Submit</button>
              </div>
            <input type="hidden" name="userid" value="{{Auth::user()->id}}"/>
           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                
                                </fieldset>

                               
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
       
          <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Credit</th>
                  <th>Debit</th>
                  <th>Latest Date</th>
                  
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($ledger as $ld)
                 @foreach($cus as $cu)
                           <?php 
                           if($cu->id==$ld->cid){
                           ?>
                  
                   <tr>
                       <td>
                       
                           {{$cu->cusname}}
                         
                       </td>
                       
                       <td>{{$ld->credit}}</td>
                       <td>{{$ld->debit}}</td>
                       <td>{{$ld->created_at}}</td>
                        
                        <td><a  href="{{route('ledgers.edit',$ld->cid)}}">
                      <button class="btn btn-primary">View Details</button>
                      </a>&nbsp;&nbsp;
                       <a href="">Edit</a></td>
                    </tr>
                    <?php 
                           }
                           ?>
                        @endforeach
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
