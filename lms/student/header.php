<?php
include "connection.php";
session_start();
error_reporting(0);
 if(!isset($_SESSION["suser"]))
//if(isset($_SESSION['is_login']))
// {
	// if((time()-$_SESSION['last_login_timestamp'])>900)
	// {
		// header("location:logout.php");
	// }

// }
// else studentdetails
{
	header("location:login.php");
}
//for notification--------
$noty=0;
$r="select * from messages where suser='$_SESSION[suser]' && readstatus='n'";
$d=mysqli_query($connect,$r);
$noty=mysqli_num_rows($d);

//----for image icon---
$pic="select image from student_reg where username='$_SESSION[suser]'";
$dp=mysqli_query($connect,$pic);
$row=mysqli_fetch_array($dp);
$image=$row[image];
 ?>
  <!--<meta http-equiv="refresh" content="900;url=logout.php" /> -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
	<!--book list design-->
	<link href="pagination/css/pagination.css" rel="stylesheet" type="text/css"/>
	<link href="pagination/css/A_green.css" rel="stylesheet" type="text/css"/>
<link rel="icon" href="images/download.jpg" type="image/gif" sizes="16x16">
<style>
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

</style>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>LMS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <a href="<?php echo $image; ?>"><img src="<?php echo $image; ?>" alt="..." class="img-circle profile_img"></a>
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>

                        <h2><a href="profile.php"><?php echo $_SESSION["suser"]; ?></a></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li>
								<a href="home.php"><i class="fa fa-home"></i> Home </a>
                            </li>
                            <li>
								<a href="messagesfroml.php"><i class="fa fa-envelope"></i> messages </a>
                            </li>
                            <li>
								<a href="myissuedbook.php"><i class="fa fa-book"></i> Remaining book </a>
                            </li>
                            <li>
								<a href="returnedbook.php"><i class="fa fa-table"></i>returned book list</a>
                            </li>
                            <li>
								<a href="profile.php"><i class="fa fa-user"></i>My Profile</a>
                            </li>
                        </ul>
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
		        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="<?php echo $image; ?>" alt=""><?php echo $_SESSION["suser"]?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="slogout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="messagesfroml.php" >
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green"><?php echo $noty; ?></span>
                            </a>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->