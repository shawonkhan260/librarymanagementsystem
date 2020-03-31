<?php
//--catch data--
include "header.php";
error_reporting(0);
$bookid=$_GET[id];
$query="select * from book where id='$bookid'";
$data=mysqli_query($connect,$query);
while($row=mysqli_fetch_array($data))
{
	
	$bname=$row[bname];
	$bimage=$row[bimage];
	$bauther=$row[bauther];
	$bpublication=$row[bpublication];
	$availableqty=$row[availableqty];
	$bdetails=$row[bdetails];
}	


?>
<title>book details</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- page content area main -->
 <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Book</h3>
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
                                <h2>Book details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="container">

<div class="row justify-content-center">
<div class="col-md-auto">
<div class="card card-default">
<div class="card-body">
<!-- Showing data-->
<div class="row">
<div class="col-sm-4">
<img src="<?php echo "../librarian/".$bimage; ?>" alt="" style="width:80% ; height:300px"/>
</div>
<div class=" col-sm-8">
<div class="my-5"><h1 style="font-size:2vw; color:#4CAF50">Book Name: <?php echo strtoupper($bname) ?></h1></div>
<div class="my-5"><h3>Author Name  : <?php echo $bauthor ?></h3></div>
<div class="my-5"><h3>Publication  : <?php echo $bpublication ?></h3></div>
<div class="my-5"><h3>Quantity No   : <?php echo $availableqty ?></h3></div>


</div>
</div>

</div>
<div class="card-body">
<div class="row">
<div class="col-sm-12">
<h1 style="font-size:2vw;"><b>book details</b></h1>
<h2 style="font-size:2vw;"><textarea readonly rows="5" class="col-sm-12"><?php echo $bdetails ?></textarea></h2>
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