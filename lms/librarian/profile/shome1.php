<?php
include "header.php";
error_reporting(0);
$query="select * from student_reg where username='$_SESSION[luser]'";
$data=mysqli_query($connect,$query);
while($row=mysqli_fetch_array($data))
{
	
	$fn=$row[firstname];
	$ln=$row[lastname];
	$un=$row[username];
	$email=$row[email];
	$contact=$row[contact];
	$pass=$row[password];
	$image=$row[image];
}	


?>


        <!-- page content area main -->
 <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Profile</h3>
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
                                <h2>Profile details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="container">

<div class="row justify-content-center">
<div class="col-md-auto">
<div class="card card-default">
<div class="card-body">
<!-- for validation eroor showing we use here some condition-->
<div class="row">
<div class="col-sm-4">
<img src="<?php echo $image; ?>" alt="" style="width:80% ; height:300px"/>
<div class=" my-5"><button style="width:80%" class="btn btn-success" ><a style="color:white;" href="changepropic.php"><b>change profile picture</b></a></button></div>
</div>
<div class=" col-sm-8">
<div class="my-5"><h1 style="color:#4CAF50">Name: <?php echo strtoupper($fn." ".$ln) ?></h1></div>
<div class="my-5"><h3>User Name    : <?php echo $un ?></h3></div>
<div class="my-5"><h3>Email        : <?php echo $email ?></h3></div>
<div class="my-5"><h3>Contact No   : <?php echo $contact ?></h3></div>
<div class="my-5">
<button class="btn btn-success" ><a style="color:white" href="changeproinfo.php"><b>change profile info</b></a></button>
<button class="btn btn-success" ><a style="color:white" href="changepropass.php"><b>change password</b></a></button>
</div>


</div>
</div>
</div>
</div>

</div>
</div>
</div>

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