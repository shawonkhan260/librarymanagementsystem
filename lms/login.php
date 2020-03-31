
<?php include "loginheader.php";?>
<br>
<title>Student Login Form | LMS </title>
<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
	<button><a href="../librarian/llogin.php"> Librarian login click here</a></button>
        <form name="form1" action="loginconfig.php" method="post">
		
            <h1>Student Login Form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit2" value="Login">
                <a class="reset_pass" href="forget.php">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="registration.php"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
		<h2>for student</h2><br>
		<h3><b>id:khan260<b></h3><br>
		<h3><b>pass:Project1<b></h3><br>
		<h2>for librarian</h2><br>
		<h3><b>id:sk420<b></h3><br>
		<h3><b>pass:Friends1<b></h3>
    </section>
<div>
<?php
if(isset($_GET[alert]))
{
?>
	<div class="alert alert-danger alert-dismissible text-center  ">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>invalid</strong> Username or password
  </div>
<?php }?>
<?php

if(isset($_GET[success]))
{
?>
	<div class="alert alert-success alert-dismissible text-center  ">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Registration successfully done</strong> Please wait for authority approval
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

</div>


</body>
</html>
