<?php include "loginheader.php";?>
<title>Forget password </title>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
	<button><a href="login.php"> Log in page</a></button>
        <form name="form1" action="forgetmail.php" method="post">
		
            <h1>Enter your email</h1>

            <div>
                <input type="text" name="email" class="form-control" placeholder="Enter Email" required="" />
            </div>
            <div >

                <button class="btn btn-primary submit" style="width:50%" type="submit" name="submit" value="send">send</button>
				
                
            </div>
        </form>
    </section>
<?php
if(isset($_GET[email]))
{
?>
	<div class="alert alert-danger alert-dismissible text-center  ">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>invalid email address</strong> 
  </div>
<?php }?>
</div>

</body>
</html>
