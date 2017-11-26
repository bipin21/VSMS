
<?php
require('header.php');
?>

<body >
<div class="container vsms-login-page">
    <div class="start-template" style="width: 500px; margin: 148px auto;">
       

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center"><strong>Stock Management System--Administration Page</strong></h3>
            </div>
            
            <div class="panel-body">
			
                <form style="margin: 20px;" class="form-horizontal" action="j_spring_security_check"
                      method="post">
                    <div class="form-group">
                        <label for="j_username" class="col-sm-2 control-label">Username</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="j_username" name="j_username" required
                                   placeholder="Enter user name" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="j_password" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="j_password" name="j_password"
                                   placeholder="Enter password..." required>
                        </div>
                    </div>
                    <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
					
					
                    <button class="btn btn-lg btn-vsms pull-right" name="submit" type="submit">Log In</button>
                    <a class="btn btn-vsms-forget pull-right" type="button" href="${pageContext.request.contextPath}/password/reset.htm">
                    <small>Forgot Password?</small></a>
                </form>
            </div>
        </div>
       
    </div>
</div>
<footer class="text-center" style="background:#516673;color:white;">Complaint Management System @ 2017</footer>
</body>
</html>


<body>


</body>
</html>
