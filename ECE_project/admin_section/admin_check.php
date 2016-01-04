<?php

 include 'core/connect.php';
 session_start();

 if(isset($_SESSION['new_username'])){
	header("Location:admin.php");

}else{
	if(isset($_POST['submit'])){
    $new_username=$_POST['new_username'];
	$new_password=md5($_POST['new_password']);


	//$query = "SELECT * FROM 'staff_login' WHERE 'emp_id' = ".$emp_id." and 'password' = ".$password."";

		$query = "SELECT * FROM admin_users WHERE new_username = '$new_username' and new_password = '$new_password'";

	$query_exec = mysql_query($query);
	if(mysql_num_rows($query_exec)>=1){
		 $row=mysql_fetch_assoc($query_exec);
		 $_SESSION['new_username']=$row['new_username'];
		header('Location:admin.php');

	}
	else{
		?>
        <script type="text/javascript">
        alert('Invalid username or password');
        </script>
        <?php
		}
 }
 //your form should like something like the one i have below
 ?>

 <form method="post" action="admin_check.php">
	Username:<input type="text" name="new_username" required /><br/>
	Password:<input type="password" name="new_password" required />
	<input type="submit" name="submit" value="Login">

</form>

<?php
}
?>
