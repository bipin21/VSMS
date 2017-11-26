
<?php
require('header.php');
?>

<body style="color:#fff !important;" >
 <?php
		require_once('navbar-top.php');
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="white-box">
									<h2 style="font-weight: bold; text-transform: uppercase">

									Transaction Timeline
									<div class="col-md-2 col-sm-4 col-xs-12 pull-right">
										<select class="form-control pull-right row b-none"
											id="selectYear">
											<option selected>2017</option>
											<option>2018</option>
											<option>2019</option>
										</select>
									</div>
								</h2>
								<ul class="list-inline text-right">
									<li>
										<h5>
											<i class="fa fa-circle m-r-5"
												style="color: rgba(222, 23, 27, 1);"></i>Purchase</h5>
									</li>
									<li>
										<h5>
											<i class="fa fa-circle m-r-5" style="color: #545feb;"></i>Sales
										</h5>
									</li>
								</ul>
								<div id="areaChart" style="height: 370px;">
								</div>
								
							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="white-box" style="background-color:#0A539C !important; margin-bottom:20px !important;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Total Purchase</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-right m-t-15 text-danger">100</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only">100% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="white-box" style="background-color:#0A539C !important; margin-bottom:20px !important;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Total Sales</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-right m-t-15 text-danger">50</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only">100% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="white-box" style="background-color:#0A539C !important; margin-bottom:20px !important;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Product To Reorder</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-right m-t-15 text-danger">100</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only">100% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="white-box" style="background-color:#0A539C !important; margin-bottom:20px !important;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">No. of Visitors</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-right m-t-15 text-danger">100</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only">100% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="white-box" style="background-color:#0A539C !important; margin-bottom:20px !important;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Total Customers</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-right m-t-15 text-danger">100</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only">100% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="white-box" style="background-color:#0A539C !important; margin-bottom:20px !important;">
                            <div class="col-in row">
                                <div class="col-md-12 col-sm-12 col-xs-12"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Total Item Types</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3 class="counter text-right m-t-15 text-danger">100</h3> </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only">100% Complete (success)</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					</div>
				</div>
			</div>
								
					
<?php
require_once("footer.php");
?>					
							
								<script type="text/javascript">
					var value;
					var categoryData;
					var areaData;

					/*--------------------------------------------DOCUMENT ON READY FUNCTION BEGINS--------------------------------*/
					$(document).ready(function() {

						callforChart();
					});
					/*--------------------------------------------DOCUMENT ON READY FUNCTION ENDS--------------------------------*/

					/*--------------------------------------------FUNCTIONS CALLED WHEN DOUCMENT LOADS--------------------------------*/

					function callforChart() {

						var year = document.getElementById("selectYear").value;

						makeAjaxRequestByAreaChart(year);
					}

				/*	--------------------------------------------END OF ON LOAD FUNCTIONS--------------------------------*/

					/*-------------------------------------------Operation on Year------------------------------------------*/

					function operationonDate(year) {
						var year2 = year.split(" ");
						var startdate = year2[1] + "-"
								+ getMonthFromString(year2[0]) + "-01";
						var enddate = year2[1] + "-"
								+ getMonthFromString(year2[0]) + "-30";

						function getMonthFromString(mon) {
							return new Date(Date.parse(mon + " 1, 2012"))
									.getMonth() + 1
						}
						return {
							s : startdate,
							e : enddate
						};
					}
					/*-------------------------------------------Operation on Year Ends------------------------------------------
					 * 
					 *--------------------------------------------VALUE ON CHANGE METHOD CALL----------------------------------- 
					 */
				
			
					$("#selectYear").on("change", function() {
						var year = document.getElementById("selectYear").value;

						makeAjaxRequestByAreaChart(year);

					});
					/*------------------------------------------ON CHANGE FUNCTION ENDS------------------------------*/
					/*---------------------------------------------CALLED BY AREA CHART-----------------------------------------*/
					function makeAjaxRequestByAreaChart(year) {
						$("#areaChart").html("");

						year = {
							"year" : year,
						};
						$
								.ajax({
									type : "POST",
									contentType : "application/json",
									url : "rest/complaintbyArea",
									data : JSON.stringify(year),
									dataType : "json",

									success : function(result) {
										var myJSON = JSON.stringify(result);
										areaData = myJSON;
									},
								})
								.then(
										function(areaData) {
											var areaString = JSON
													.stringify(areaData);
											console.log(areaString);
											var jsonAreaData = JSON
													.parse(areaString);
											var difference = jsonAreaData.difference;
											var length = difference.length;

											Morris
													.Area({
														element : 'areaChart',
														data : difference,
														xkey : 'month',
														ykeys : [ 'purchase',
																'sales' ],

														xLabelAngle : 45,
														XLabel : 'month',
														pointSize : 0,
														fillOpacity : 0.4,
														pointStrokeColors : [
																'rgba(240, 0, 4, 1)',
																'#545feb' ],
														behaveLikeLine : true,
														gridLineColor : '#e0e0e0',
														lineWidth : 0,
														smooth : false,
														hideHover : 'auto',
														lineColors : [
																'rgba(240, 0, 4, 1)',
																'#545feb' ],
														xLabelFormat : function(
																d) {
															var month = new Array(
																	12);
															month[0] = "?????";
															month[1] = "???";
															month[2] = "????";
															month[3] = "????";
															month[4] = "???";
															month[5] = "????";
															month[6] = "???????";
															month[7] = "?????";
															month[8] = "???";
															month[9] = "???";
															month[10] = "?????";
															month[11] = "???";
															console
																	.log(d
																			.getMonth());
															return month[d
																	.getMonth() - 1];
														},
														resize : true
													})
										});
					}
					/*=====================================================================================*/
					
				</script>
</body>