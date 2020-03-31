<?php
include "header.php";
include "connection.php";
?>

<title>return book</title>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
			<div class="page-title">
				    <div class="title_left">
                    <h3>Book return</h3>
                    </div>
            </div>
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                        </div>
                    </div>


                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">

                            <div class="x_content">
                <form  action="" method="post">

					<div>
					<select name="er" class="form-control selectpicker">
					<option value="" disabled selected>Select enrollmentno</option>
                    <?php 
                    $k="select DISTINCT studentenrollment from bookissue where bookreturndate=''";
                    $d=mysqli_query($connect,$k);
                    //error_reporting(0);
                    while($b=mysqli_fetch_assoc($d))
                    {
	                    $f=$b['studentenrollment'];
	                    echo "<option value='$f'>$f</option>";
                    }
                    ?>
					</select>
					<input type="submit" name="search" value="search">
					</div>
					</form>

					<?php
					if(isset($_POST["search"]))
					{
					$query="select * from bookissue where studentenrollment='$_POST[er]' and bookreturndate=''";
                    $data=mysqli_query($connect,$query);
					//error_reporting(0);
					?>
					<table class= 'table table-bordered'>
							<tr>
							    <th>enrollmentno </th>
							    <th>student name</th>
							    <th>sem</th>
							    <th>contact</th>
							    <th>emaill</th>
							    <th>book name</th>
							    <th>book issue date</th>
							    <th>return book</th>
							</tr>
					<?php
                    while($result=mysqli_fetch_array($data))
                        {
								echo "<tr>
							    <td>$result[studentenrollment]</th>
							    <td>$result[studentname]</th>
							    <td>$result[studentsem]</th>		
							    <td>$result[studentcontact]</th>
							    <td>$result[studentemail]</th>
							    <td>$result[bookname]</th>
							    <td>$result[bookissuedate]</th>
							    <td><a href='returnbookconfig.php?id=$result[id] && b=$result[bookname]'>return</a></th>

							         </tr>";						
                        }
					
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