<?php
include "header.php";
include "connection.php";
error_reporting(0);

?>
<title>add book</title>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3> Add book</h3>
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
                    <h2>Add books info</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="Book Name" name="bname" required=""/>
                    </div>
                    <div>
                        <input type="file" class="form-control" placeholder="Book Image" name="bimage" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Auther name" name="bauther" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Publication name" name="bpublication" required=""/>
                    </div>
					<div>
					<textarea class="form-control "  name="bdetails"  id="" cols="3" rows="5" placeholder="write description..." class="form-control"></textarea>
                         
                    </div>
                    <div >
                        <input type="date" class="form-control" placeholder="date" name="bpurchasedate" value="<?php echo date('Y-m-d'); ?>" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control " placeholder="price" name="bprice" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Quantity" name="bqty" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="available quantity" name="availableqty" required=""/>
                    </div>                 
					<div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit13" value="Submit">
                    </div>

                </form>
            </section>
			<?php
			if(isset($_POST['submit13']))
			{
			$filename=$_FILES["bimage"]["name"];
            $temp=$_FILES["bimage"]["tmp_name"];
			$folder="book/".$filename;            
            move_uploaded_file($temp,$folder);

			$query="INSERT INTO book VALUES('','$_POST[bname]','$folder','$_POST[bauther]','$_POST[bpublication]','$_POST[bpurchasedate]','$_POST[bprice]','$_POST[bqty]','$_POST[availableqty]','$_SESSION[luser]','','','$_POST[bdetails]')";

			mysqli_query($connect,$query);
			?>
<script type="text/javascript">
alert("book insert successfully");
</script>
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