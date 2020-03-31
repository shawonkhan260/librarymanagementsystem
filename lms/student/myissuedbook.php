<?php
include "header.php";
include "connection.php";
?>
<title>issued book</title>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">

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
                                <h2>my issued books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<table id="customers" class= 'table table-bordered table-hover'>
							<tr>
							    
							    <th>book name</th>
							    <th>book issued date</th>
							    
							<!--display issued book-->
							</tr>
                                <?php
								$query="select * from bookissue where studentusername='$_SESSION[suser]'";
								$data=mysqli_query($connect,$query);
								
								while($result=mysqli_fetch_array($data))
								{
								echo "<tr>
							    
							    <td>$result[bookname]</th>
							    <td>$result[bookissuedate]</th>

							
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