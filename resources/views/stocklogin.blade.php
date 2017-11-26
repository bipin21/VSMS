<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login -- Stock Management System</title>
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
<link href="{{ asset('resources/css/colors/blue-dark.css') }}" rel="stylesheet" />
<link href="{{ asset('resources/css/nepali.datepicker.css') }}" rel="stylesheet" />

<script src="{{asset('resources/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('resources/js/sgn-date.min.js')}}"></script>
<script src="{{asset('resources/js/nepali.datepicker.min.js')}}"></script>
<script src="{{asset('resources/js/select2.min.js')}}"></script>
<script src="{{asset('resources/bootstrap/dist/js/bootstrap.min.js')}}"></script>


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container vsms-login-page">
    <div class="start-template" style="width: 500px; margin: 148px auto;">
       

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><strong>Stock Management System--Administration Page</strong></h3>
            </div>
            
            <div class="panel-body">
			
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
       
    </div>
</div>
<footer class="text-center" style="background:#516673;color:white;">Valiant Stock Management System @ 2017</footer>


<script>
   $(".date-eng-nep").sgnDate({type:'full', date:'english'});
   </script>
<!-- /#wrapper -->
    <script src="{{asset('resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <script src="{{asset('resources/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('resources/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('resources/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('resources/plugins/bower_components/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('resources/js/custom.min.js')}}"></script>
    <script src="{{asset('resources/js/Chart.js')}}"></script>
    <script src="{{asset('resources/plugins/bower_components/morrisjs/morris.js')}}"></script>


</body>
</html>
