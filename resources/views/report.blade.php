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

					<div class="col-md-6" style="margin-top:11%">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              {!!
$areachart->render()
                !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Donut Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              {!!
                $chart->render()

                  !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6" style="margin-top:11%;">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="line-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="bar-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>




           <div class="col-md-6" style="margin-top:11%;">
            <!-- LINE CHART -->
            <div class="box-body chart-responsive">
              <div class="chart" id="dual_x_div" style="height: 300px; position: relative;"></div>
            </div>
          </div>

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


              <!-- /.box-body -->
            <!-- </div> -->




          <div class="box box-success pull-right">
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
        <!-- /.col (RIGHT) -->






</div>
@endsection
