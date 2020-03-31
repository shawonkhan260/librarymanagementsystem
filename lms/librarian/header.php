<?php session_start();
include "connection.php";
error_reporting(0);
if(!isset($_SESSION["luser"]))
{
	header("location:llogin.php");
}
//for showing profile icon
$pic="select image from librarian_reg where username='$_SESSION[luser]'";
$dp=mysqli_query($connect,$pic);
$row=mysqli_fetch_array($dp);
$image=$row[image];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
	<script type="text/javascript" src="js/jquery-latest.js"></script> 
    <script type="text/javascript" src="js/jquery.tablesorter.js"></script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
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
                    <a href="dashboard.php" class="site_title"><i class="fa fa-book"></i> <span>LMS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?php echo $image; ?>" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>

                        <h2><a href="profile.php"><?php echo $_SESSION["luser"]?></a></h2>
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
							<a href="dashboard.php"><i class="fa fa-list-alt"></i> Dashboard </a>
                            </li>
                            <li>
							<a href="studentlist.php"><i class="fa fa-users"></i> Student list</a>
                            </li>
							
                            <li>
							<a href="addbook.php"><i class="fa fa-edit"></i> Add book </a>
                            </li>
                            <li>
							<a href="booklist.php"><i class="fa fa-book"></i> book list</a>
                            </li>
                            <li>
							<a href="onebook.php"><i class="fa fa-gift"></i> book issue </a>
                            </li>
                            <li>
							<a href="returnbook.php"><i class="fa fa-calendar"></i> return book</a>
                            </li>
                            <li>
							<a href="bookstudent.php"><i class="fa fa-list"></i> student has which book</a>
                            </li>
                            <li>
							<a href="sendnotificationstudent.php"><i class="fa fa-envelope"></i> send message</a>
                            </li>
                            <li>
							<a href="addlibrarian.php"><i class="fa fa-edit"></i> Add New Librarian</a>
                            </li>
							<li>
							<a href="profile.php"><i class="fa fa-user"></i> My Account</a>
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
                                <img src="<?php echo $image; ?>" alt=""><?php echo $_SESSION["luser"];?>
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="llogoutconfig.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->