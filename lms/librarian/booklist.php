
<?php
include "header.php";
include "connection.php";
include "../student/pagination/function.php";
?>
	<link href="../student/pagination/css/pagination.css" rel="stylesheet" type="text/css"/>
	<link href="../student/pagination/css/A_green.css" rel="stylesheet" type="text/css"/>
<title>book list</title>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>book list</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div style="overflow-x:auto;" class="x_panel">
                            <div class="x_content">
							<form action="" method="post">
							<input type="text" id="myInput" onkeyup="myFunction()" name="s" placeholder="enter book name"/>
							<input type="submit"  name="submit" value="search"/>
							</form>
							<table id="customers" class="tablesorter table-hover table table-bordered">
							<thead >
							<tr class="header">
							    <th>id </th>
							    <th>book name</th>
							    <th>Book Image</th>
							    <th>Auther name</th>
							    <th>Publication name</th>
							    <th>purchase date</th>
							    <th>price</th>
							    <th>Quantity</th>
							    <th>available quantity</th>
							    <th>librarian</th>
							    <th style="text-align:center;" colspan=2>operation</th>
		
							
							</tr>
							</thead>
							<tbody>
                                <?php
								$page=(int)(!isset($_GET["page"]) ? 1: $_GET["page"]);
								$limit=8; // one page how many product show
								$startpoint= ($page*$limit)-$limit;
								$statement="book"; //order by
								//$query="select * from product";
					
					
								if(isset($_POST['submit']))
								{
								$query="select * from book where bname LIKE '%$_POST[s]%' LIMIT {$startpoint},{$limit}";
								$data=mysqli_query($connect,$query);
								//$statement="book where bname LIKE '%$_POST[s]%'";
			
								}
								else
								{
		                        $query="select * from {$statement} LIMIT {$startpoint},{$limit}";
								$data=mysqli_query($connect,$query);    
								}
								while($result=mysqli_fetch_array($data))
								{
								$pic=$result['bimage'];
								echo "<tr>
							    <td>$result[id]</td>
								<td>$result[bname]</td>
							    <td><a href='$pic'><img src='$pic' height=50 width=60/></a></td>
							    
							    <td>$result[bauther]</td>
							    <td>$result[bpublication]</td>
							    <td>$result[bpurchasedate]</td>
							    <td>$result[bprice]</td>
							    <td>$result[bqty]</td>
							    <td>$result[availableqty]</td>
							    <td>$result[luser]</td>
								<td><a style='color:green;' href='updatebook.php?a=$result[id]'>edit</a></td> 
                                <td><a style='color:red;' href='deletebookconfig.php?a=$result[id]' onclick=' return checkdelete()'>delete</a></td>
							
							         </tr>";
									
								}
								
								?>
								</tbody>
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
<script>
function checkdelete()
{
	return confirm('Are you sure to delete')
}
$(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 
    } 
); 
$(document).ready(function() 
    { 
        $("#myTable").tablesorter( {sortList: [[0,0], [1,0]]} ); 
    } 
); 
$(document).ready(function() 
    { 
        $("#myTable").tablesorter( {dateFormat: 'pt'} ); 
    } 
); 

</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<?php



include "footer.php";
?>



