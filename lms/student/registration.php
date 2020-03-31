<?php include "loginheader.php";?>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>
<title>Student Registration Form | LMS </title>

<body class="login" style="margin-top: -20px;">

<!--registration form with validation-->

    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="registrationconfig.php" method="post">
                    <h2>User Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" pattern="[A-Za-z0-9.@_-]{4,10}" title="4 to 10 letter a-z 0-9" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required=""/>
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="email" name="email" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="contact" name="contact" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="SEM" name="sem" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Enrollment No" name="enrollmentno" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>





<?php
error_reporting(0);
if(isset($_GET[wrong]))
{
?>
	<div class="alert alert-danger alert-dismissible text-center  ">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Username or email</strong> are already exist
  </div>
<?php }?>


    </div>

</body>
</html>