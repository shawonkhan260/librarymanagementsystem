<?php
include "header.php";
?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <title>Dashboard</title>
<?php
//count student number
$student=0;
$r="select * from student_reg where status='yes'";
$d=mysqli_query($connect,$r);
$student=mysqli_num_rows($d);
?>
<?php
//count all book number
$book=0;
$r="select SUM(bqty) as total from book";
$d=mysqli_query($connect,$r);
$sum=mysqli_fetch_assoc($d);
$book=$sum['total'];
?>
<?php
//count book issue
$rbook=0;
$r="select * from bookissue where bookreturndate=''";
$d=mysqli_query($connect,$r);
$rbook=mysqli_num_rows($d);
?>
<?php
//count librarian number
$librarian=0;
$r="select * from librarian_reg";
$d=mysqli_query($connect,$r);
$librarian=mysqli_num_rows($d);
?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Dashboard</h3>
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

                            <div class="x_content">
<!-- content input here -->
	<div class="row">
        <div class="col-lg-12">
          <p>
		  <div class="col-sm-3">
            <a href="studentlist.php" class="btn btn-sq-lg btn-primary" style="width:100% ; height:150px">
                <i class="fa fa-users fa-5x"></i><br/> <h1> <?php echo $student?> Students</h1>
            </a>
			</div>
			<div class="col-sm-3">
            <a href="booklist.php" class="btn btn-sq-lg btn-success" style="width:100% ; height:150px">
              <i class="fa fa-book fa-5x"></i><br/> <h1> <?php echo $book?> books</h1>
            </a>
			</div>
			<div class="col-sm-3">
            <a href="bookstudent.php" class="btn btn-sq-lg btn-info" style="width:100% ; height:150px">
              <i class="fa fa-book fa-5x"></i><br/> <h1> <?php echo $rbook?> books issued</h1>
            </a>
			</div>
			<div class="col-sm-3">
            <a href="#" class="btn btn-sq-lg btn-warning" style="width:100% ; height:150px">
              <i class="fa fa-user fa-5x"></i><br/> <h1> <?php echo $librarian?> Librarians</h1>
            </a>
			</div>
          </p>
        </div>
	</div>
		<div class="row">
        <div class="col-lg-12">
          <p>
		  <div class="col-sm-3">
            <a href="nstudentlist.php" class="btn btn-sq-lg btn-primary" style="width:100% ; height:50px">
                 <h2>Student Approval request </h2>
            </a>
			</div>
			<div class="col-sm-3">
            <a href="addbook.php" class="btn btn-sq-lg btn-success" style="width:100% ; height:50px">
              <h2>Add new book </h2>
            </a>
			</div>
			<div class="col-sm-3">
            <a href="returnbook.php" class="btn btn-sq-lg btn-info" style="width:100% ; height:50px">
             <h2> Return Book </h2>
            </a>
			</div>
			<div class="col-sm-3">
            <a href="addlibrarian.php" class="btn btn-sq-lg btn-warning" style="width:100% ; height:50px">
              <h2> Add new Librarian </h2>
            </a>
			</div>
          </p>
        </div>
	</div>

			</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        
<?php
include "footer.php";
?>