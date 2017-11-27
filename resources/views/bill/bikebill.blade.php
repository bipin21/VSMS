@extends('layouts.mast')
@section('content')
 <link rel='stylesheet' type='text/css' href='print/style.css' />
  <link rel='stylesheet' type='text/css' href='print/print.css' media="print" />
 
        <!-- Page Content -->
        <div class="navbar-static-top" id="wrapper" style="top: 10%; overflow: hidden; position: fixed;">
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
                  <div class=" panel left-panel cf col-md-2" style="margin: 0px; left: 0%; top: 19%; position: fixed;">
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
                <div class="row col-md-12" style="height: 440px; overflow-y: scroll;">
			
                  <style>
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
					  margin:10px;
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
					<form action="vatbill" method="post">
                    <div class="title" style="z-index:1; position:fixed; width:80%; height:30px; background:#09649a !important; color:white; top:19%" >
                     <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs" style="height:30px">
					 <li class="nab"><a href="#" style="    vertical-align: middle;margin: -5px;height: 30px; padding: 8px; line-height: 30px !important;
    min-height: 30px !important;"><i class="fa fa-floppy-o"> Save </i></a><li>
					 <li class="nab"><a href="#"  onclick='printDiv();' style="    vertical-align: middle;margin: -5px;height: 30px; padding: 8px; line-height: 30px !important;
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
                                 <!--    <table border=1>
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

</style> -->

<div id="printarea">
<div id="page-wrap">

    <textarea id="header">TAX INVOICE</textarea>
    
    <div id="identity">
     <textarea id="address">Customer Name:
Street Name
Location
Phone: </textarea>
<div id="pan">
<textarea>
PAN: </textarea>
</div>
 <div class="seller">
<textarea id="logo">Seller's Name & Address:
TVS SHOWROOM SINDHULI NEPAL
PAN NO: 23749277
Branch:Sindhuli  Phone:9843837438
E-mail:tvs@hotmail.com </textarea>
            </div>
    
    </div>
    
    <div style="clear:both"></div>
    <div class="manual_date">
      <textarea id="today_date">Date: December 15, 2017 </textarea>
     </div>
    <div id="customer">
     <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                </table>
    
    </div>
    
    <table id="items">
    
      <tr>
          <th>Item</th>
          <th>Description</th>
          <th>Unit Cost</th>
          <th>Quantity</th>
          <th>Price</th>
      </tr>
      
      <tr class="item-row">
          <td class="item-name"><div class="delete-wpr"><textarea>Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
          <td class="description"><textarea>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td>
          <td><textarea class="cost">$650.00</textarea></td>
          <td><textarea class="qty">1</textarea></td>
          <td><span class="price">$650.00</span></td>
      </tr>
      
      <tr class="item-row">
          <td class="item-name"><div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

          <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
          <td><textarea class="cost">$75.00</textarea></td>
          <td><textarea class="qty">3</textarea></td>
          <td><span class="price">$225.00</span></td>
      </tr>
      
      <tr id="hiderow">
        <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
      </tr>
      
      <tr>
          <td colspan="2" class="blank"> </td>
          <td colspan="2" class="total-line">Subtotal</td>
          <td class="total-value"><div id="subtotal">$875.00</div></td>
      </tr>
      <tr>

          <td colspan="2" class="blank"> </td>
          <td colspan="2" class="total-line">Total</td>
          <td class="total-value"><div id="total">$875.00</div></td>
      </tr>
      <tr>
          <td colspan="2" class="blank"> </td>
          <td colspan="2" class="total-line">Amount Paid</td>

          <td class="total-value"><textarea id="paid">$0.00</textarea></td>
      </tr>
      <tr>
          <td colspan="2" class="blank"> </td>
          <td colspan="2" class="total-line balance">Balance Due</td>
          <td class="total-value balance"><div class="due">$875.00</div></td>
      </tr>
    
    </table>
    
    <div id="terms">
      <h5>Terms</h5>
      <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
    </div>
  
  </div>
</div>
</div>
</div>
<script src="resources/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src='print/jquery.jqprint-0.3.js'></script>

<script type='text/javascript' src='print/example.js'></script>
<script type="text/javascript">
  function printDiv(){
    //alert("clicked");
     $('#printarea').jqprint();
  }
</script>
@endsection
