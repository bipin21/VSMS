@extends('layouts.mast')
@section('content')
<!-- <?php

if (isset($_POST['VatBill']) || isset($_POST['NormalBill'])) {
    // handle textarea

    if (!empty($_POST['VatBill'])) {
        header('Location: /vat-bill.blade.php');
        exit();
    }

   // header('Location: /action2.php');
    exit();
}

?> -->
 
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
<style type="text/css" media="print">
.dontprint
{ display: none; }
#printarea {display: block}
</style>
<div id="printarea">
<div class="customer">
<table>
<tr>
<th>Customer</th>
<td><input name="customer"/></td>
</tr>
<tr>
<th>Contact</th>
<td><input name="contact" /></td>
</tr>
<tr>
<th>Address</th>
<td><textarea style="width:100%;"  name="address"></textarea></td>
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
<td><input name="invoice" /></td>
</tr>
<tr>
<th>Transaction Date</th>
<td><input name="transaction_date" /></td>
</tr>
<tr>
<th>Customer Ref. No</th>
<td><input name="customer_ref_no" /></td>
</tr>
<tr>
<th>Contact Person</th>
<td><input name="contact_person" /></td>
</tr>
<tr>
<th>Contact Person Address</th>
<td><input name="contact_address"/></td>
</tr>
</table>
</div>
<hr/>
<span onclick="insertRow('myTable');"> 
<a href="#"><i class="fa fa-plus">Add Row</i></a></span>
<hr/>

<div class="addItem" style="margin:3px;">

<div class="col-md-12" style="width:100%;">
<table border=1px; style="width:100%;" id="myTable">
<tr>
<th  style="width:20px !important;">S.N.</th>
<th style="width:305px !important;">Description of Goods</th>
<th>QTY</th>
<th>UOM</th>
<th>Original Rate</th>
<th>Unit Rate</th>
<th>Discount %</th>
<th>Amount</th>
</tr>
<tr id="rows">
<td>1</td>
<td style="width: 30px;"><select style="width:100%;"/></td>
<td><input name="quantity" id="quantity" type="text"/></td>
<td><input name="uom" id="uom" type="text"/></td>
<td><input name="originalRate" id="originalRate" type="text"/></td>
<td><input name="unitRate" id="unitRate" type="text"/></td>
<td><input name="discount" id="discount" type="text"/></td>
<td><span id="amount"></span></td>
</tr>

</table>
<table border=1px; style="width:100%;">
<tr>
<td style="width:427px !important;" colspan=2>Total</td>
<td style="width: 105px !important;"><span id="totalQuantity"></span></td>
<td style="width: 105px !important;"></td>
<td style="width: 105px !important;"><span id="totalOriginalRate"></span></td>
<td style="width: 105px !important;"><span id="totalUnitRate"></span></td>
<td style="width: 105px !important;"><span id="totalDiscount"></span></td>
<td style="width: 105px !important;"><span id="totalItemAmount"></span></td>
</tr>
</table>
</div>
<div class="calculation pull-right" style="margin: 5px; 1px 0 0;">
<table>
<tr>
<th>Sub Total:</th>
<td style="text-align:right;"><b>NRs. <span id="subTotal">0.00</span></b></td>
</tr>
<tr>
<th>Discount (0.00%):</th>
<td><input id="netDiscount" type="text"/></td>
</tr>
<tr>
<th>Taxable Amount:</th>
<td style="text-align:right;"><b>NRs. <span id="totalTaxable"></span></b></td>
</tr>
<tr>
<th>VAT @13%:</th>
<td><span id="totalVat"></span></td>
</tr>
<tr>
<th style="font-size: 14px;">Total Amount:</th>
<td style="text-align:right; font-size: 14px;"><b>NRs. <span id="result"></span></b></td>
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

<span onclick="insertRow1('myTable1');">
<a href="#"><i class="fa fa-plus">Add Row</i></a></span>
<hr/>

<div class="addItem" style="margin:3px;">

<div class="col-md-12" style="width:100%;">
<table border=1px; style="width:100%;" id="myTable1">
<tr>
<th  style="width:20px !important;">S.N.</th>
<th style="width:305px !important;">Description of Goods</th>
<th>QTY</th>
<th>UOM</th>
<th>Original Rate</th>
<th>Unit Rate</th>
<th>Discount %</th>
<th>Amount</th>
</tr>
<tr>
<td>1</td>
<td style="width: 30px;"><select style="width:100%;"/></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
<td><input /></td>
</tr>

</table>
<table border=1px; style="width:100%;">
<tr>
<td style="width:427px !important;" colspan=2>Total</td>
<td style="width: 105px !important;"><input /></td>
<td style="width: 105px !important;"><input /></td>
<td style="width: 105px !important;"><input /></td>
<td style="width: 105px !important;"><input /></td>
<td style="width: 105px !important;"><input /></td>
<td style="width: 105px !important;"><input /></td>

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
<td><span id="vat"></span></td>
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
						</form>
                    </div>
                    <!-- /.col -->
                </div>

            
<script src="http://code.jquery.com/jquery-latest.min.js""></script>

		
			<script type="text/javascript">
/*--This JavaScript method for Print command--*/
    function PrintDoc(area) {
        var toPrint = document.getElementById(area);
        var popupWin = window.open('', '_blank','location=no');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" href="print.css" /></head><body onload="window.print()">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }
/*--This JavaScript method for Print Preview command--*/
    function PrintPreview() {
        var toPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank', 'location=no,left=200px');
        popupWin.document.open();
        popupWin.document.write('<html><title>::Print Preview::</title><link rel="stylesheet" type="text/css" href="Print.css" media="screen"/></head><body">')
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');
        popupWin.document.close();
    }

 //$("#treeview").hummingbird();
 var tableCount={};
 var index = 1;
    function insertRow(id){
		console.log(id);
                var table=document.getElementById(id);
                var row=table.insertRow(table.rows.length);
                var cell1=row.insertCell(0);
                var t1=document.createElement("input");
					t1.value=index+1;
                    t1.id = "txtSn"+index;
                    cell1.appendChild(t1);
                var cell2=row.insertCell(1);
                var t2=document.createElement("select");
				$(t2).width(305);
                    t2.id = "txtDescription"+index;
                    cell2.appendChild(t2);
                var cell3=row.insertCell(2);
                var t3=document.createElement("input");
                    t3.id = "txtQty"+index;
                    cell3.appendChild(t3);
                var cell4=row.insertCell(3);
                var t4=document.createElement("input");
                    t4.id = "txtUom"+index;
                    cell4.appendChild(t4);
				var cell5=row.insertCell(4);
                var t5=document.createElement("input");
                    t5.id = "txtOriginal"+index;
                    cell5.appendChild(t5);
				var cell6=row.insertCell(5);
                var t6=document.createElement("input");
                    t6.id = "txtUnit"+index;
                    cell6.appendChild(t6);
				var cell7=row.insertCell(6);
                var t7=document.createElement("input");
                    t7.id = "txtDiscount"+index;
                    cell7.appendChild(t7);
				var cell8=row.insertCell(7);
                var t8=document.createElement("input");
                    t8.id = "txtAmount"+index;
                    cell8.appendChild(t8);

		  tableCount.rows=index++;
		  console.log(tableCount);
		  
		  
    }
	console.log("totalRows:"+(tableCount.rows));
	
var index1 = 1;

    function insertRow1(id){
		console.log(id);
                var table=document.getElementById(id);
                var row=table.insertRow(table.rows.length);
                var cell1=row.insertCell(0);
                var t1=document.createElement("input");
					t1.value=index1+1;
                    t1.id = "txtSn"+index;
                    cell1.appendChild(t1);
                var cell2=row.insertCell(1);
                var t2=document.createElement("select");
                    t2.id = "txtDescription"+index;
					$(t2).width(305);
                    cell2.appendChild(t2);
                var cell3=row.insertCell(2);
                var t3=document.createElement("input");
                    t3.id = "quantity"+index;
                    cell3.appendChild(t3);
                var cell4=row.insertCell(3);
                var t4=document.createElement("input");
                    t4.id = "uom"+index;
                    cell4.appendChild(t4);
				var cell5=row.insertCell(4);
                var t5=document.createElement("input");
                    t5.id = "originalRate"+index;
                    cell5.appendChild(t5);
				var cell6=row.insertCell(5);
                var t6=document.createElement("input");
                    t6.id = "unitRate"+index;
                    cell6.appendChild(t6);
				var cell7=row.insertCell(6);
                var t7=document.createElement("input");
                    t7.id = "discount"+index;
                    cell7.appendChild(t7);
				var cell8=row.insertCell(7);
                var t8=document.createElement("input");
                    t8.id = "amount"+index;
                    cell8.appendChild(t8);
          tableCount1=index1++;
		  

    }
	
	$(window).load(function(){
    $('input').keyup(function () { 
	   var quantity = parseInt(document.getElementById("quantity").value);
	   var originalRate = parseFloat(document.getElementById("originalRate").value);
	   var unitRate= parseFloat(document.getElementById("unitRate").value);
	   var discount= parseFloat(document.getElementById("discount").value);
	   if(!unitRate && !discount){
		   var itemAmount="";
	   }else if(!discount){
		   var itemAmount= (quantity*unitRate);
	   }else{
	   var itemAmount= ((quantity*unitRate)-(discount/100)*(quantity*unitRate));
	   }
	   
	   
	   console.log(quantity);
	  
		$('#amount').text(itemAmount);
		
	
		$('#subTotal').text(itemAmount);
		
		var netDiscountAmount=parseFloat(document.getElementById("netDiscount").value);
		$('#netDiscount').text(itemAmount);
		
		var taxableAmount=(subTotalAmount-netDiscountAmount);
		$('#totalTaxable').text(itemAmount);
		
		var vatAmount=(taxableAmount*(13/100));
		$('#vat').text(vatAmount);
		var payable=(taxableAmount-vatAmount);
        $('#result').text(payable);
    });    
});
</script>

@endsection
