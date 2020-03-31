<?php
include "header.php";
include "connection.php";

?>

<title>send message</title>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
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
                                <h2>send message to student</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<form name="form2" action="" method="post" class="col-lg-6">
<table class="table table-bordered">
<tr>
<td>
<select class="form-control" name="suser">
<?php
$k1="select * from student_reg";
$s1=mysqli_query($connect,$k1);
while($r=mysqli_fetch_array($s1))
{ 
echo"
<option value='$r[username]'> $r[username] "."( $r[enrollmentno] ) </option>

	
";	
}
?>

</select>
</td>
</tr>
<tr>
<td>
<input type="text" name="title" class="form-control" placeholder="enter title">
</td>
</tr>
<tr>
<td>
<textarea  name="txt" class="form-control" placeholder="write Message">
</textarea>
</td>
</tr>
<tr>
<td>
<input type="submit" name="submittxt" class="form-control" value="send message">
</td>
</tr>

</table>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
 <?php
if(isset($_POST["submittxt"]))
{
	$t1="insert into messages values('','$_SESSION[luser]','$_POST[suser]','$_POST[title]','$_POST[txt]','n')";
	$d=mysqli_query($connect,$t1);

 ?>

<?php } ?>
<?php
include "footer.php";
?>
