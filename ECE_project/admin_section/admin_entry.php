<?php
     include 'core/connect.php';

       if(isset($_POST['submitted']))
	{
       $new_admin = $_POST['new_admin_name'];
       $user_contact = $_POST['user_contact'];
       $user_email = $_POST['user_email'];
       $date_registered = $_POST['date_registered'];
       $user_role = $_POST['user_role'];
       $user_address = $_POST['user_address'];
       $new_username = $_POST['new_username'];
       $new_password = md5($_POST['new_password']);

	   $sqlinsert = "INSERT INTO admin_users(new_admin_name, user_contact, user_email, date_registered, user_role, user_address, new_username, new_password) VALUES('$new_admin', '$user_contact', '$user_email', STR_TO_DATE('$date_registered', '%d/%m/%Y'), '$user_role', '$user_address', '$new_username', '$new_password')"; //the names are the field names from the database
      if(!mysql_query($sqlinsert))
	   {
		   die('error inserting new record');
	   }
	   ?>
       <script type="text/javascript">
	       alert('New record inserted');
	   </script>
       <?php
	  header("Location:admin_register.php");
	}
?>