<?php include "loginheader.php";?>
<?php

$token=$_GET[token];


?>
<title>Update password </title>


<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form2" action="forgetconfig.php?token=<?php echo $token?>" method="post">
		
            <h1>Enter new password</h1>

            <div>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required="" />
            </div>
            <div >

                <button class="btn btn-primary submit" style="width:50%" type="submit" name="submitpassword" value="send">send</button>
				
                
            </div>
        </form>
    </section>

</div>



</body>
</html>


