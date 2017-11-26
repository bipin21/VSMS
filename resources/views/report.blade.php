@extends('layouts.mast')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                        <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
                      
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
              
            <div class="row">
			<div class="col-md-12">
				<div class="white-box">
                                        <div class="col-md-8">
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
<i class="fa fa-circle m-r-5" style="color: rgba(222, 23, 27, 1);"></i>Purchase</h5>
									</li>
									<li>
										<h5>
<i class="fa fa-circle m-r-5" style="color: #545feb;"></i>Sales
										</h5>
									</li>
								</ul>
                                        </div>
                                        <div class="col-md-4" style="text-align:center;">
                                           
                                            
                         
                                        </div>
								
								<div id="areaChart" style="height: 500px; margin-top:80px;">
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript" >      
                            google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Galaxy', 'Purchase', 'Sales'],
          ['janaury', 8000, 8000],
          ['February', 24000, 40000],
          ['March', 30000, 25000],
          ['April', 50000,80000],
          ['May', 60000, 100000]
        ]);

        var options = {
          width: 800,
          chart: {
            title: 'Monthly Report',
            subtitle: 'Purchaseon the left,Sales on the right'
          },
          bars: 'vertical', // Required for Material Bar Charts.
          series: {
            0: { axis: 'Purchase' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'sales' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
             Purchae: {label: 'parsecs'}, // Bottom x-axis.
              Sales: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };</script>
                                                                            
       <div id="dual_x_div" style="width: 900px; height: 500px;"></div>
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
								
		


<footer class="footer text-center"> 2018 &copy; VSMS- Stock Management System by Valiant Tech Pvt. Ltd. </footer>
</div>
@endsection
