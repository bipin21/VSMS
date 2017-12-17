  @extends('layouts.mast')
@section('content')
<div id="wrapper">
     
        <!-- Page Content -->
        <div class="navbar-static-top" id="wrapper" style="top: 17%;
    overflow: hidden;
    position: fixed;
    z-index: 0;">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Purchase <small>ITEMS</small></h4> </div>
                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">

                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"><a href="#">Purchase</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
</div>
                <!-- row -->
                <div id="page-wrapper">
                  <div class=" panel left-panel cf col-md-2" style="    margin: 0px;
    left: 0%;
    top: 29%;
    position: fixed;">
                      <div class="pull-right col-md-12" style="padding: 0px; height: 440px;">
                      <div class="title" style="position:fixed; width: 16%; z-index:1;">
                       <pre style="background:#09649a !important; color:white">     SEARCH    </pre>
                       </div>
                      <div class="white-box" style="height:440px; padding: 15px 3px 3px 3px !important; z-index:0;">

                        <style>
                      
						ul, li{
							list-style-type: none;
						}
						li:hover{
							cursor:pointer;
						}
						input{
							width:100%;
							line-height:0;
						}
						th{
							font-size:12px;
						}
						
                        </style>
						<div class="services" style="margin-top:16%">
						<table>
						<tr>
						<th>Order#</th>
						<td><input type="text" name="orderNumber"/></td>
						</tr>
						
						<tr>
						<th>Payment Status</th>
						<td><input type="text" name="paymentStatus"/></td>
						</tr>
						<tr>
						<th>Customer</th>
						<td><input type="text" name="customer"/></td>
						</tr>
						<tr>
						<th></th>
						<td><button style="padding: 0px 4px; height: auto; margin-top: 4px;" class="pull-right">Reset</button></td>
						</tr>
						</table>
						</div>


                  </div>
                </div>
              </div>
              <div class="col-md-10" style="left: 17%; top: 19%; position: fixed;">
                <div class="row col-md-12" style="height: 440px; overflow-y: scroll;margin-top:4%;">
                  <style>
				  .nab .navbar-top-links>li>a {
  
     line-height: 30px !important;
    min-height: 30px !important;
}
                  .form-group{
                    margin: 5px;
                  }
                  .form-control{
                    height:25px;
                  }
                  .col-in{
                    margin:5px;
                    padding: 0;
                  }
				  .nab{
					padding:5px;
				  }
				  .billInput{
					  width: 60%;
					  margin: 0px;
				  }
				  .billInput1{
					  width: 40%;
					  margin: 0;
				  }
				  .desCol{
					  width: 39%;
				  }
				  .soldItemsRow{
					  text-align: right;
					  
				  }
				  .soldItemsRow td, th{padding: 5px;}
				  a:hover{
					  padding:0;
					cursor:pointer !important;
				  }
				 
                  </style>
                    <!--col -->
                    <div class="title" style="z-index:1; position:fixed; width:80%; height:30px; background:#09649a !important; color:white;" >
                     <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs" style="height:30px">
					 <li class="nab"><a href="#" style="    vertical-align: middle;margin: -5px;height: 30px; padding: 8px; line-height: 30px !important;
    min-height: 30px !important;"><i class="fa fa-floppy-o"> Save </i></a><li>
					 <li class="nab"><a href="#"  style="    vertical-align: middle;margin: -5px;height: 30px; padding: 8px; line-height: 30px !important;
    min-height: 30px !important;" ><i class="fa fa-print"> Print VAT Bill</i></a></li>
					 <li class="nab"><a href="#"  style="    vertical-align: middle;margin: -5px;height: 30px; padding: 8px; line-height: 30px !important;
    min-height: 30px !important;"><i class="fa fa-print"> Print Normal Bill</i></a></li>
					 <li class="nab"><a href="#"  style="    vertical-align: middle;margin: -5px;height: 30px; padding: 8px; line-height: 30px !important;
    min-height: 30px !important;"><i class="fa fa-trash"> Delete </i></a></li>
					 </ul>
                     </div>
                        <div class="white-box" style=" height: 440px; padding:0 !important; margin-top: 40px;">
                            <div class="col-in row">
                               <div class="col-md-12">
                                 <div class="tab" style="margin:0 !important;">
                                   <ul id="myTab" class="nav nav-tabs">
                                          <li class="active"><a href="#home" data-target="#home, #home_else" data-toggle="tab">Bikes</a></li>
                                          <li><a href="#profile" data-target="#profile, #profile_else" data-toggle="tab">Parts</a></li>
                                      </ul>

                                     </div>




                                <div id="myTabContent" class="tab-content" style="margin-top:5px !important;">
                                    <div class="tab-pane fade in active" id="home_else">
                                     <table border=1>
<tr>
<td>
<style>
.customer th, td, .transaction th, td, .addItem th, td{
	font-size:11px;
	text-align:left;

}
.customer{
	margin: 1px 0 0 1px;
}
.transaction{
	margin:-96px 1px 0 500px;
}
table{
	border-spacing:0;
}
table .addItem{
	width:100%;
}
input{
	line-height: 0;
}
</style>

<div class="customer">
<table>
<tr>
<th>Customer</th>
<td><input /></td>
</tr>
<tr>
<th>Contact</th>
<td><input /></td>
</tr>
<tr>
<th>Address</th>
<td><textarea style="width:100%;" ></textarea></td>
</tr>
<tr>
<th>Customer PAN</th>
<td><input /></td>
</tr>
</table>
</div>

<div class= "transaction" style="margin-left: 500px; margin-top: -117px;" >
<table>
<tr>
<th>Invoice#</th>
<td><input /></td>
</tr>
<tr>
<th>Transaction Date</th>
<td><input /></td>
</tr>
<tr>
<th>Customer Ref. No</th>
<td><input /></td>
</tr>
<tr>
<th>Contact Person</th>
<td><input /></td>
</tr>
<tr>
<th>Contact Person Address</th>
<td><input /></td>
</tr>
</table>
</div>
<hr/>
<a href="#"><i class="fa fa-plus">Add Row</i></a>
<hr/>

<div class="addItem" style="margin:3px;">

<div class="col-md-12" style="width:100%;">
<table border=1px; style="width:100%;">
<tr>
<th>S.N.</th>
<th style="width:305px !important;">Description of Goods</th>
<th>QTY</th>
<th>UOM</th>
<th>Original Rate</th>
<th>Unit Rate</th>
<th>Discount %</th>
<th>Amount</th>
</tr>
<tr>
<td></td>
<td style="width: 30px;"><select style="width:100%;"/></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
</tr>
<tr>
<td colspan=2>Total</td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>

</tr>
</table>
</div>
<div class="calculation pull-right" style="margin: 5px; 1px 0 0;">
<table>
<tr>
<th>Sub Total:</th>
<td style="text-align:right;"><b>NRs. 0.00</b></td>
</tr>
<tr>
<th>Discount (0.00%):</th>
<td><input /></td>
</tr>
<tr>
<th>Taxable Amount:</th>
<td style="text-align:right;"><b>NRs. 0.00</b></td>
</tr>
<tr>
<th>VAT @13%:</th>
<td><input /></td>
</tr>
<tr>
<th style="font-size: 14px;">Total Amount:</th>
<td style="text-align:right; font-size: 14px;"><b>NRs. 0.00</b></td>
</tr>
</table>
</div>

<div class="narration pull-left" style="margin-top: 30px;">
<table>
<tr>
<td>Narration</td>
<td style="width: 500px;"><textarea style="width: 100%;"></textarea></td>
</tr>

<tr>
<td>Amount in words:</td>
<td style="width: 500px;"><input style="width:100%;"/></td>
</tr>

</table>

</div>



<!--Main table ending starts-->
</td>
</tr>
</table>
                                    </div>
                                    <div class="tab-pane fade" id="profile_else">
                                        <table border=1>
<tr>
<td>
<style>
.customer th, td, .transaction th, td, .addItem th, td{
	font-size:11px;
	text-align:left;

}
.customer{
	margin: 1px 0 0 1px;
}
.transaction{
	margin:-96px 1px 0 500px;
}
table{
	border-spacing:0;
}
table .addItem{
	width:100%;
}
input{
	line-height: 0;
}
</style>

<div class="customer">
<table>
<tr>
<th>Customer</th>
<td><input /></td>
</tr>
<tr>
<th>Contact</th>
<td><input /></td>
</tr>
<tr>
<th>Address</th>
<td><textarea style="width:100%;" ></textarea></td>
</tr>
<tr>
<th>Customer PAN</th>
<td><input /></td>
</tr>
</table>
</div>

<div class= "transaction" style="margin-left: 500px; margin-top: -117px;" >
<table>
<tr>
<th>Invoice#</th>
<td><input /></td>
</tr>
<tr>
<th>Transaction Date</th>
<td><input /></td>
</tr>
<tr>
<th>Customer Ref. No</th>
<td><input /></td>
</tr>
<tr>
<th>Contact Person</th>
<td><input /></td>
</tr>
<tr>
<th>Contact Person Address</th>
<td><input /></td>
</tr>
</table>
</div>
<hr/>
<a href="#"><i class="fa fa-plus">Add Row</i></a>
<hr/>

<div class="addItem" style="margin:3px;">

<div class="col-md-12" style="width:100%;">
<table border=1px; style="width:100%;">
<tr>
<th>S.N.</th>
<th>Description of Goods</th>
<th>QTY</th>
<th>UOM</th>
<th>Original Rate</th>
<th>Unit Rate</th>
<th>Discount %</th>
<th>Amount</th>
</tr>
<tr>
<td></td>
<td style="width: 30px;"><select style="width:100%;"/></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
</tr>
<tr>
<td colspan=2>Total</td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>

</tr>
</table>
</div>
<div class="calculation pull-right" style="margin: 5px; 1px 0 0;">
<table>
<tr>
<th>Sub Total:</th>
<td style="text-align:right;"><b>NRs. 0.00</b></td>
</tr>
<tr>
<th>Discount (0.00%):</th>
<td><input /></td>
</tr>
<tr>
<th>Taxable Amount:</th>
<td style="text-align:right;"><b>NRs. 0.00</b></td>
</tr>
<tr>
<th>VAT @13%:</th>
<td><input /></td>
</tr>
<tr>
<th style="font-size: 14px;">Total Amount:</th>
<td style="text-align:right; font-size: 14px;"><b>NRs. 0.00</b></td>
</tr>
</table>
</div>

<div class="narration pull-left" style="margin-top: 30px;">
<table>
<tr>
<td>Narration</td>
<td style="width: 500px;"><textarea style="width: 100%;"></textarea></td>
</tr>

<tr>
<td>Amount in words:</td>
<td style="width: 500px;"><input style="width:100%;"/></td>
</tr>

</table>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>


            </div>
            


            <script>
            /*$(document).ready(function(){

              document.getElementById("Bikes").style.display = "block";
              evt.currentTarget.className += " active";
            })*/

$("#treeview").hummingbird();
</script>

                                            
</div>
                            <footer class="footer text-center"> 2018 &copy; VSMS- Stock Management System by Valiant Tech Pvt. Ltd. </footer>
  
@endsection