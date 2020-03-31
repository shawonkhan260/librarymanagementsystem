<?php
include "header.php";
include "connection.php";
error_reporting(0);

?>

<title>student list</title>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
				    <div class="title_left">
                    <h3>book user list</h3>
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
                                <h2>Search books</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
						<table class= 'table table-bordered'>
							<tr>
							    <th>enrollment </th>
							    <th>student name</th>
							    <th>student semester</th>
							    <th>student contact</th>
							    <th>student email</th>
							    <th>issued date</th>
								
		
							
							</tr>
                                <?php
                                $b=$_GET['b'];
		                        $query="select * from bookissue where bookname='$b' && bookreturndate=''";
								$data=mysqli_query($connect,$query);    
								while($result=mysqli_fetch_array($data))
								{
								
								echo "<tr>
							    <td>$result[studentenrollment]</td>
								<td>$result[studentname]</td>
							    <td>$result[studentsem]</td>
							    <td>$result[studentcontact]</td>
							    <td>$result[studentemail]</td>
							    <td>$result[bookissuedate]</td>
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