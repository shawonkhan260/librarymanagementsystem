
<?php
include "header.php";
include "connection.php";
$d="update messages set readstatus='y' where suser='$_SESSION[suser]'";
mysqli_query($connect,$d);
?>
<title>messages</title>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                        </div>
                    </div>
                

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>received message</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
		<table id="customers"  class= 'table table-bordered table-hover'>
  <tr class="header">
    <th style="width:20%;">sender</th>
    <th style="width:20%;">topic</th>
    <th style="width:60%;">message</th>
  </tr>
 <?php

	$t1="select * from messages where suser='$_SESSION[suser]'";
	$d=mysqli_query($connect,$t1);
	while($r=mysqli_fetch_array($d))
	{
		
		echo "  <tr>
    <td><a href='#g'>$r[luser]</a></td>
    <td>$r[title]</td>
    <td>$r[message]</td>
  </tr>";
		
	}

 ?>
 </table>
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
