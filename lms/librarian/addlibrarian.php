<?php
include "header.php";
include "connection.php";
error_reporting(0);

?>
<title>New librarian</title>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3> Add Librarian</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2></h2>
    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form  action="" method="post" enctype=multipart/form-data>
                    <h2>New Librarian</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" pattern="[A-Za-z0-9.@_-]{4,16s}" title="4 to 10 letter a-z 0-9" required=""/>
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
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>
<?php
if(isset($_POST['submit1']))
{
	$firstname=mysqli_real_escape_string($connect,$_POST[firstname]);
	$lastname=mysqli_real_escape_string($connect,$_POST[lastname]);
	$username=mysqli_real_escape_string($connect,$_POST[username]);
	$password=mysqli_real_escape_string($connect,$_POST[password]);
	$password=md5($password);
	$email=mysqli_real_escape_string($connect,$_POST[email]);
	$contact=mysqli_real_escape_string($connect,$_POST[contact]);
	//$sem=mysqli_real_escape_string($connect,$_POST[sem]);
	//$enrollmentno=mysqli_real_escape_string($connect,$_POST[enrollmentno]);
$query="select * from librarian_reg where username='$_POST[username] or email='$_POST[email]'";
$d=mysqli_query($connect,$query);
$row=mysqli_fetch_row($d);
if($row>0)
{

	echo '<div class="alert alert-danger col-lg-12 col-lg-push-0">
        same username or same email already exist
    </div>';
}
else
{
	$query="INSERT INTO librarian_reg VALUES('','$firstname','$lastname','$username','$password','$email','$contact','images/user.png','$_SESSION[luser]','','')";
	mysqli_query($connect,$query);

?>

<script type="text/javascript">
alert("New Librarian added successfully");
</script>
<?php  
}
}
?>

                    </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
<?php
include "footer.php";
?>