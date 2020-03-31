
<?php
include "header.php";
include "connection.php";
?>
<title>book issue</title>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Issue a Book</h3>
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
                               
    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form  action="" method="post">

					<div>
					<select name="cars" class="form-control selectpicker">
					<option value="" disabled selected>Select enrollmentno</option>
                    <?php 
                    $k="select * from student_reg";
                    $d=mysqli_query($connect,$k);
                    //error_reporting(0);
                    while($b=mysqli_fetch_assoc($d))
                    {
	                    $f=$b['enrollmentno'];
	                    echo "<option value='$f'>$f</option>";
                    }
                    ?>
</select>
                    </div>

					<div >
                        <input class="form-control btn btn-default " type="submit" name="submit1" value="submit" style="margin-left: 0px;">
                    </div>	
	

                    <?php
                    if(isset($_POST['submit1']))
					{
						$b="select * from bookissue where studentenrollment='$_POST[cars]' and bookreturndate=''";
					    $d=mysqli_query($connect,$b);
						$r=mysqli_num_rows($d);
						if($r>0)
						{
							echo "user has already $r book to return<br>";
							echo "<button><a href='bookissue.php'>again give new one</a></button>";
						}
						else
                        {
							echo "0 book taken";
						    $k1="select * from student_reg where enrollmentno='$_POST[cars]'";
						    $sk=mysqli_query($connect,$k1);
						    while($r=mysqli_fetch_assoc($sk))
						    {
							$sn=$r['firstname'];
							$ln=$r['lastname'];
							$u=$r['username'];
							$sem=$r['sem'];
							$c=$r['contact'];
							$e=$r['email'];
							$enrollmentno=$r['enrollmentno'];
							//$_session["enrollmentno"]=$enrollmentno;
							//$_session["susername"]=$u;
						    }
						//}
	?>
                    <div>
                        <input type="text" class="form-control" placeholder="enrollmentno" name="enrollmentno" value="<?php echo $enrollmentno; ?>" readonly />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="student Name" name="studentname" value="<?php echo $sn."".$ln ; ?>" />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="studentsem" name="studentsem" value="<?php echo $sem; ?>" />
                    </div>
					<div>
                        <input type="text" class="form-control" placeholder="student contact" name="studentcontact" value="<?php echo $c; ?>" />
                    </div>
					<div>
                        <input type="text" class="form-control" placeholder="student email" name="studentemail" value="<?php echo $e; ?>" />
                    </div>
					<div>
					<select name="bookname" class="form-control selectpicker">
					<option value="" disabled selected>Select book name</option>
                    <?php 
                    $k="select * from book where availableqty>0";
                    $d=mysqli_query($connect,$k);
                    while($b=mysqli_fetch_assoc($d))
                    {
                    	$f=$b['bname'];
                    	echo "<option value='$f'>$f</option>";
                    }
					
                    ?></select>
                    <div>
					book issue date<br>
                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>"  name="bookissuedate" />
                    </div>
					
					<div>
                        <input type="text" class="form-control" placeholder="student username" name="studentusername" value="<?php echo $u; ?>" readonly />
                    </div>
					<div >
                        <input class="form-control btn btn-default " type="submit" name="issuebook" value="issue book" style="margin-left: 0px;">
                    </div>
<?php
}}
?>					
					<?php
					if(isset($_POST['issuebook']))
					{
					
						$k3="INSERT INTO bookissue VALUES('','$_POST[enrollmentno]','$_POST[studentname]','$_POST[studentsem]','$_POST[studentcontact]','$_POST[studentemail]','$_POST[bookname]','$_POST[bookissuedate]','','$_POST[studentusername]')";
						$issue="update book set availableqty=bqty-1 where bname='$_POST[bookname]'";
						mysqli_query($connect,$k3);
						mysqli_query($connect,$issue);
					?>
					<script type="text/javascript">
					alert("books issued successfully");
					window.location.href = window.location.href ;
					</script>
					
					<?php
						
					}
					
					
					
					?>

</div>


                </form>
            </section>


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