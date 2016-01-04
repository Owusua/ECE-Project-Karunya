<?php
	
 include 'core/connect.php';
 session_start();
 
 if(isset($_SESSION['emp_id'])){
	header("Location:book_search00.php");
	
}else{
	if(isset($_POST['submit'])){
    $emp_id=$_POST['emp_id'];
	$password=$_POST['password'];

	 
	//$query = "SELECT * FROM 'staff_login' WHERE 'emp_id' = ".$emp_id." and 'password' = ".$password."";	

		$query = "SELECT * FROM staff_login WHERE emp_id = '$emp_id' and password = '$password'";	
    
	$query_exec = mysql_query($query);
	if(mysql_num_rows($query_exec)>=1){
		 $row=mysql_fetch_assoc($query_exec);
		 $_SESSION['emp_id']=$row['emp_id'];
		header('Location:book_search00.php');  
	
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
 
 <form method="post" action="login_check.php">
	Username:<input type="text" name="emp_id" required /><br/>
	Password:<input type="password" name="password" required />
	<input type="submit" name="submit" value="Login">

</form>

<?php
}
?>
