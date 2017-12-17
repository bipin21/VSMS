<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Stock Management System</title>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="keywords" content="stock, e-commerce, managment "/>
<meta name="description" content="Stock Management System for e-commerce"/>
<meta name="author" content="Valiant Tech Pvt. Ltd."/>


<link href="{{ asset('resources/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/bootstrap/dist/css/bootstrap-timeline.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/css/animate.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/css/custom.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/css/colors/blue-dark.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/css/nepali.datepicker.css') }}" rel="stylesheet" />
    
<link href="{{ asset('dist/css/AdminLTE.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/css/nepali.datepicker.css') }}" rel="stylesheet" />

    
<link href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.css') }}" rel="stylesheet" />
<link href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
    



<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

   <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part text-center"><a class="logo" href=""><b>VSMS</b></a></div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <a href="../../home" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <!--                        <a href="" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Purchase</span></a>-->
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Purchase
                             <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="../../purchase">Bike</a></li>
                                  <li><a href="../../purchaseparts">Parts</a></li>
          
                                </ul>
                    </li>
                    <li>
<!--                        <a href="inventory" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i><span class="hide-menu">Inventory</span></a>-->
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Inventory
                             <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="../../inventory">Bike</a></li>
                                  <li><a href="../../inventoryparts">Parts</a></li>
          
                                </ul>
                    </li>
                    <li>
<!--                        <a href="sale" class="waves-effect"><i class="fa fa-font fa-pie-chart" aria-hidden="true"></i><span class="hide-menu">Sales</span></a>-->
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sales
                             <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="../../sale">Bike</a></li>
                                  <li><a href="../../saleparts">Parts</a></li>
          
                                </ul>
                    </li>
                     <li>
<!--                        <a href="sale" class="waves-effect"><i class="fa fa-font fa-pie-chart" aria-hidden="true"></i><span class="hide-menu">Sales</span></a>-->
                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bill
                             <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                  <li><a href="../../bikebill">Bike</a></li>
                                  <li><a href="../../partsbill">Parts</a></li>
                                  <li><a href="../../testbill">Tests</a></li>
          
                                </ul>
                    </li>
					<li>
                        <a href="../../customer" class="waves-effect"><i class="fa fa-font fa-pie-chart" aria-hidden="true"></i><span class="hide-menu">Customer</span></a>
                    </li>
                    <li>
                        <a href="../../service" class="waves-effect"><i class="fa fa-font fa-pie-chart" aria-hidden="true"></i><span class="hide-menu">Services</span></a>
                    </li>
					<li>
                        <a href="../../staff" class="waves-effect"><i class="fa fa-font fa-pie-chart" aria-hidden="true"></i>Staff</a>                    </li>
                    <li>
                        <a href="../../ledger" class="waves-effect"><i class="fa fa-font fa-pie-chart" aria-hidden="true"></i>Ledger</a>                    </li>
                    <li>
                        <a href="../../enquiry" class="waves-effect"><i class="fa fa-font fa-pie-chart" aria-hidden="true"></i>Enquiry</a>                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                     <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
					 <li>
                        <a href="../../report" class="waves-effect"><i class="fa fa-font fa-pie-chart" aria-hidden="true"></i><span class="hide-menu">Reports</span></a>
                    </li>
                    	<li> <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul></li>
                    </ul>
            
                </ul>
                
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
      @yield('content')
       <!-- /#page-wrapper -->
</div>
    
<script src="{{asset('resources/js/jquery-2.2.4.min.js')}}"></script>
<!-- /#wrapper -->
<!--    <script src="{{asset('resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>-->
<!--    <script src="{{asset('resources/js/jquery.slimscroll.js')}}"></script>-->
<!--    <script src="{{asset('resources/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>-->
<!--    <script src="{{asset('resources/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>-->
    <script src="{{asset('resources/plugins/bower_components/raphael/raphael-min.js')}}"></script>
<!--    <script src="{{asset('resources/js/custom.min.js')}}"></script>-->
    <script src="{{asset('resources/js/Chart.js')}}"></script>
    <script src="{{asset('resources/plugins/bower_components/morrisjs/morris.js')}}"></script>
    
    
        
<script src="{{asset('dist/js/adminlte.js')}}"></script>
    
    

<!--
<script src="{{asset('resources/js/sgn-date.min.js')}}"></script>
<script src="{{asset('resources/js/nepali.datepicker.min.js')}}"></script>
-->
<script src="{{asset('resources/js/select2.min.js')}}"></script>
<script src="{{asset('resources/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
<!--    <script src="  {{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>-->
    <script src="  {{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="  {{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
    
    
    
  



</body>
</html>
