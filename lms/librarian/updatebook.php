<?php
include "header.php";
include "connection.php";
error_reporting(0);
$a=$_GET['a'];
$query="select * from book where id=$a";
$data=mysqli_query($connect,$query);
while($result=mysqli_fetch_array($data))
{
$bname=$result['bname'];
$bimage=$result['bimage'];
$bauther=$result['bauther'];
$bpublication=$result['bpublication'];
$bprice=$result['bprice'];
$bqty=$result['bqty'];
$availableqty=$result['availableqty'];
$bdetails=$result['bdetails'];
}
//all are for set into input to show user what he is edit
?>
<title>edit book info</title>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3> edit book info</h3>
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
                    <h2>edit info</h2><br>

                    <div>
                        <input type="text" class="form-control" value="<?php echo $bname ?>" name="bname" required=""/>
                    </div>
                    <div>
                        <input type="file" class="form-control" value="<?php echo $bimage ?>" name="bimage" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" value="<?php echo $bauther?>" name="bauther" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" value="<?php echo $bpublication ?>" name="bpublication" required=""/>
					<div>
					<textarea class="form-control "  name="bdetails"  id="" cols="3" rows="5" value="<?php echo $bdetails ?>" class="form-control"></textarea>
                         
                    </div>
                    </div>
                    <div>
                        <input type="text" class="form-control" value="<?php echo $bprice?>" name="bprice" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" value="<?php echo $bqty ?>" name="bqty" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" value="<?php echo $availableqty ?>" name="availableqty" required=""/>
                    </div>                 
					<div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit13" value="Submit">
                    </div>

                </form>
            </section>
			<?php
			if(isset($_POST['submit13']))
			{
				$u1=$_POST['bname'];
				$u3=$_POST['bauther'];
				$u4=$_POST['bpublication'];
				$u5=$_POST['bprice'];
				$u6=$_POST['bqty'];
				$u7=$_POST['availableqty'];
				$u8=$_POST['bdetails'];
				$d=date('Y-m-d h:i:sa');
				
			$filename=$_FILES["bimage"]["name"];
            $temp=$_FILES["bimage"]["tmp_name"];
			$folder="book/".$filename;            
            move_uploaded_file($temp,$folder);

			$query="UPDATE book set bname='$u1', bimage='$folder', bauther='$u3', bpublication='$u4', bprice='$u5', bqty='$u6', availableqty='$u7',bdetails='$u8', lasteditby='$_SESSION[luser]', lasteditedtime='$d' where id=$a";

			mysqli_query($connect,$query);
			echo "book has updated successfully ";
			?>
<meta http-equiv="refresh" content="0;url=booklist.php" />
<?php
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