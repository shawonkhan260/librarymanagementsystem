<?php
include "header.php";
include "connection.php";
include "../student/pagination/function.php";
error_reporting(0);

?>
<title>book list with student</title>
<link rel="stylesheet" type="text/css" href="../student/ec/styles.css">
<link href="../student/pagination/css/pagination.css" rel="stylesheet" type="text/css"/>
<link href="../student/pagination/css/A_green.css" rel="stylesheet" type="text/css"/>

        <!-- page content area main -->
        <div class="right_col" role="main">
            
                <div class="page-title">
				    <div class="title_left">
                    <h3>student list with book</h3>
                    </div>
                </div>

                            <div class="x_content">
							<form action="" method="post">
							<input type="text" name="s"  />
							<input type="submit" name="submit" value="search"/>
							</form>
                            

							
                                <?php
								$page=(int)(!isset($_GET["page"]) ? 1: $_GET["page"]);
								$limit=8; // one page how many product show
								$startpoint= ($page*$limit)-$limit;
								$statement="book"; //order by
								
								if(isset($_POST['submit']))
								{
								$query="select * from book where bname LIKE '%$_POST[s]%' LIMIT {$startpoint},{$limit}";
								$data=mysqli_query($connect,$query);
			
								}
								else
								{
		                        $query="select * from {$statement} LIMIT {$startpoint},{$limit}";
								$data=mysqli_query($connect,$query);    
								}
								
								while($result=mysqli_fetch_array($data))
								{
								$pic="$result[bimage]";
								//height="400" width="386"
								?>
				<div class="col-md-3 product-grid">
				<div class="image " >
					<a href="studentbooklist.php?b=<?php echo $result[bname]?>">
					
						<img style="width:100% ; height:300px" src="<?php echo $pic;?>"   alt=""/>
						
						<div class="overlay">
							<div class="got">View Details</div>
						</div>
					</a>
				</div>
				<h1 class="text-center" style="color:green"><?php echo $result[bname];?></h1>
				<h5 class="text-center">Author name:<?php echo $result[bauther];?></h5>
				<h5 class="text-center">Available quantity:<?php echo $result[availableqty];?></h5>


			    </div>
				<?php
					}
				?>
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