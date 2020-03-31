<?php include "loginheader.php";?>
<title>Librarian Login </title>
<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
	<button><a href="../student/login.php"> Student login click here</a></button>
        <form name="form1" action="loginconfig.php" method="post">
            <h1>Librarian Login Form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit1" value="Login">
                <a class="reset_pass" href="forget.php">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                


            </div>
        </form>
    </section>
<?php
//its come from login config for wrong input
if(isset($_GET[alert]))
{
?>
	<div class="alert alert-danger alert-dismissible text-center  ">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>invalid</strong> Username or password
  </div>
<?php }?>
<?php
//its come from forget config update password
if(isset($_GET[password]))
{
?>
	<div class="alert alert-success alert-dismissible text-center  ">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>password successfully updated</strong> 
  </div>
<?php }?>

</div>





</body>
</html>
