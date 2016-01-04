<?php
	if(isset($_POST['submitted']))
	{
	   include 'core/connect.php';
	   $access_number = $_POST['access_number'];
	   $emp_id = $_POST['emp_id'];
	   $return_date = $_POST['return_date'];

	   $sqlinsert = "INSERT INTO return_book(access_number, emp_id, return_date) VALUES('$access_number', '$emp_id', STR_TO_DATE('$return_date', '%d/%m/%Y'))"; //the names are the field names from the database
	   if(!mysql_query($sqlinsert))
	   {
		   die('error inserting new record');
	   }
	   ?>
       <script type="text/javascript">
	       alert('New record inserted');
	   </script>
       <?php
	  header("Location:librarian_login.php");
	}



?>