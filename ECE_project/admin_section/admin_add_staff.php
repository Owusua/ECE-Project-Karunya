<?php

	if(isset($_POST['submitted']))
	{
	   include 'core/connect.php';
       $emp_id = $_POST['emp_id'];
	   $staff_name = $_POST['staff_name'];
	   $staff_email = $_POST['staff_email'];

	   $sqlinsert = "INSERT INTO staff(emp_id, staff_name, staff_email) VALUES('$emp_id', '$staff_name', '$staff_email')"; //the names are the field names from the database
	   if(!mysql_query($sqlinsert))
	   {
		   die('error inserting new record');
	   }
	   ?>
       <script type="text/javascript">
	       alert('New record inserted');
	   </script>
       <?php
	  header("Location:add_staff.php");
	}



?>



