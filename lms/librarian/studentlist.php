<?php
include "header.php";
include "connection.php";
include "../student/pagination/function.php";

?>
	<link href="../student/pagination/css/pagination.css" rel="stylesheet" type="text/css"/>
	<link href="../student/pagination/css/A_green.css" rel="stylesheet" type="text/css"/>
<title>student list</title>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Student list</h3>
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

                            <div style="overflow-x:auto;" class="x_content">
							<table id="customers" class= 'table table-bordered table-hover'>
							<tr>
							    <th>id </th>
							    <th>firstname</th>
							    <th>lastname</th>
							    <th>username</th>
							    <th>emaill</th>
							    <th>contact</th>
							    <th>sem</th>
							    <th>enroll no</th>
							    
							    <th style="text-align:center;" >action</th>
							    
							
							</tr>
                                <?php
								//pagination start
								$page=(int)(!isset($_GET["page"]) ? 1: $_GET["page"]);
								$limit=8; // one page how many product show
								$startpoint= ($page*$limit)-$limit;
								$statement="student_reg where status='yes'"; //order by
								//$query="select * from product";
								
		                        $query="select * from {$statement}  LIMIT {$startpoint},{$limit}";
								$data=mysqli_query($connect,$query); 
								//pagination end
								while($result=mysqli_fetch_array($data))
								{
								echo "<tr>
							    <td>$result[id]</th>
							    <td>$result[firstname]</th>
							    <td>$result[lastname]</th>
							    <td>$result[username]</th>
							    <td>$result[email]</th>
							    <td>$result[contact]</th>
							    <td>$result[sem]</th>
							    <td>$result[enrollmentno]</th>
							    
							    
							    <td><a style='color:red;' href='notapproveconfig.php?id=$result[id]'>NOT approve</a> </th>
							
							         </tr>";
									
								}
								
								?>
								</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<ul class="pagination">
				<?php 
                echo pagination($statement,$limit,$page);
				?>
            </ul>
        </div>
        <!-- /page content -->
<?php
include "footer.php";
?>



