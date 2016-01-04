<?php
  include 'core/connect.php';
$emp_id = $_SESSION['emp_id'];
$query="SELECT staff_name FROM staff WHERE emp_id=$emp_id";
$result=mysql_query($query) or die(mysql_error());
$row=mysql_fetch_assoc($result);
$staff_name=$row['staff_name'];
?>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-user"></i><b><?php echo $staff_name; ?></b></a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="#" data-toggle="modal" data-target="#user_details">Book Details</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- User Details Modal-->
<div class="modal fade" id="user_details" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <?php

				 
				 $sqlget = "SELECT issue_book.emp_id, issue_book.access_number, books.author_name, books.title, issue_book.issue_date, issue_book.return_date FROM issue_book INNER JOIN books ON issue_book.access_number = books.access_number WHERE issue_book.emp_id = $emp_id";
				 $sqldata = mysql_query($sqlget) or die('Error getting table from database');
				 
				 echo "<table id='books'>";
				 echo "<tr>
				           <th> Staff ID / Emp ID</th>
				           <th> Access Number </th>
						   <th> Book Author</th>
						   <th> Title </th>
						   <th> Issue Date </th>
						   <th> Return Date </th>
					   </tr>";
				 while($row = mysql_fetch_array($sqldata))
				 {
					 echo "<tr><td>";
					 echo $row['emp_id'];
					 echo "</td><td>";
					 echo $row['access_number'];
					 echo "</td><td>";
					 echo $row['author_name'];
					 echo "</td><td>";
					 echo $row['title'];
					 echo "</td><td>";
					 echo $row['issue_date'];
					 echo "</td><td>";
					 echo $row['return_date'];
					 echo "</td></tr>";
				 }
				 echo "</table>";
				 
			?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>