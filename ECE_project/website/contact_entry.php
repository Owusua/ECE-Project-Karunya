<?php
	if(isset($_POST['submitted']))
	{
	   include 'core/connect.php';
	   $name = $_POST['name'];
	   $email = $_POST['email'];
	   $phone_no = $_POST['phone_no'];
	   $message = $_POST['message'];

	   $sqlinsert = "INSERT INTO contact_us(name, email, phone_no, message) VALUES('$name', '$email', '$phone_no', '$message'))"; //the names are the field names from the database
	   if(!mysql_query($sqlinsert))
	   {
		   die('error inserting new record');
	   }
	   ?>
       <script type="text/javascript">
	       alert('New record inserted');
	   </script>
       <?php
	  header("Location:contact.php");
	}



?>