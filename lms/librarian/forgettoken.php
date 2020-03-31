<?php include "loginheader.php";?>
<title>Token </title>
<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="forgetconfig.php" method="post">
		
            <h1>Enter your Given Token</h1>

            <div>
                <input type="text" name="token" class="form-control" placeholder="Enter Token"  required="" />
            </div>
            <div >

                <button class="btn btn-primary submit" style="width:50%" type="submit" name="submittoken" value="send">send</button>
				
                
            </div>
        </form>
    </section>
	<?php
if(isset($_GET[tokenerror]))
{
?>
	<div class="alert alert-danger alert-dismissible text-center  ">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>token is invalid or expired</strong> 
  </div>
<?php }?>
</div>

</body>
</html>
