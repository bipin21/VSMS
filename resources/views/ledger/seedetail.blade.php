@extends('layouts.mast1')
@section('content')
        <!-- Page Content -->
        <div id="">
        
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
								
                                         <section class="content-header">
      <h1>
       Ledger History
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
     
        <a href="../../customer" class="btn btn-success">Back to Customer</a><br><br>
          <div class="box-body">
              <p>
                  Name:&nbsp;{{$d->cusname}}<br/>
                  Address:&nbsp;{{$d->cusaddres}}<br/>
                  Phone:&nbsp;{{$d->cusphone}}<br/>
                  Model:&nbsp;{{$d->bike_model}}<br/>
              
              </p>
             
          <h2 style="text-align:center;color:green;">*** Ledger history ***</h2>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Ledger No</th>
                 
                  <th>Credit</th>
                  <th>purpose</th>
                  <th>Debit</th>
                  <th>Date</th>
                 
                  
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    $amount=0;
                    ?>
                    @foreach($da as $dd)
                    <tr>
                    
                 
                    <td>{{$dd->id}}</td>
                    <td>{{$dd->credit}}</td>
                    <td>{{$dd->purpose}}</td>
                    <td>{{$dd->debit}}</td>
                    <td>{{$dd->created_at}}</td>
                   
                   
                    <td>check</td>
                   
                  
                 
                    <?php  
                        $amount=($amount+$dd->debit)-$dd->credit;
                        ?>
                    </tr>
                   @endforeach
                   
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="4">Total</td>
                        <td colspan="2" class="total"><?php 
                            echo "Nrs. ";
                            if($amount >0 ){
                            echo abs($amount); 
                                echo " Debit";
                            }
                            else
                            {
                            echo abs($amount); 
                                echo " Credit";
                            }
                            
                            
                            ?></td>
                      </tr>
                  </tfoot>
              </table>
              
        </div>
    
    </div>
</section><!-- /.content -->
								
								
                                        
							
					
					</div>
				</div>
			</div>
								
		

           
</div>
@endsection
