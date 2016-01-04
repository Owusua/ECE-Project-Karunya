<?php
	
 include 'core/connect.php';
 session_start();
 
 if(isset($_SESSION['lib_username'])){
	header("Location:librarian.php");
	
}else{
	if(isset($_POST['submit'])){
    $lib_username=$_POST['lib_username'];
	$lib_password=md5($_POST['lib_password']);

	 
	//$query = "SELECT * FROM 'staff_login' WHERE 'emp_id' = ".$emp_id." and 'password' = ".$password."";	

		$query = "SELECT * FROM librarian_login WHERE lib_username = '$lib_username' and lib_password = '$lib_password'";	
    
	$query_exec = mysql_query($query);
	if(mysql_num_rows($query_exec)>=1){
		 $row=mysql_fetch_assoc($query_exec);
		 $_SESSION['lib_username']=$row['id'];
		header('Location:librarian.php');  
	
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
 
 <form method="post" action="lib_check.php">
	Username:<input type="text" name="lib_username" required /><br/>
	Password:<input type="password" name="lib_password" required />
	<input type="submit" name="submit" value="Login">

</form>

<?php
}
?>
