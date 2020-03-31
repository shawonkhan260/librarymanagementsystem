<?php
include "header.php";
include "connection.php";
include "pagination/function.php";
error_reporting(0);
?>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="ec/styles.css">
 <!-- page content area main -->
        <div class="right_col" role="main">
		
                            <div class="x_title">
                                <h2>Search books</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form action="" method="post">
							<input type="text" name="s"  />
							<input type="submit" name="submit" value="search"/>
							</form>
                           

							
                                <?php
								//--pagination start from here--
								$page=(int)(!isset($_GET["page"]) ? 1: $_GET["page"]);
								$limit=8; // one page how many product show
								$startpoint= ($page*$limit)-$limit;
								$statement="book"; //order by
								//$query="select * from product";
					
					
								if(isset($_POST['submit']))
								{
								$query="select * from book where bname LIKE '%$_POST[s]%' LIMIT {$startpoint},{$limit}";
								$data=mysqli_query($connect,$query);
								$statement="book where bname LIKE '%$_POST[s]%'";
			
								}
								else
								{
		                        $query="select * from {$statement} LIMIT {$startpoint},{$limit}";
								$data=mysqli_query($connect,$query);    
								}
								
								while($result=mysqli_fetch_array($data))
								{
								$pic="../librarian/$result[bimage]";
								
									?>
									
			<div class="col-md-3 product-grid">
				<div class="image" >
					<a href="bookdetails.php?id=<?php echo $result[id]?>">
						<img src="<?php echo $pic;?>" alt="" style="width:100% ; height:300px"/>
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
		<!--pagination number -->
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