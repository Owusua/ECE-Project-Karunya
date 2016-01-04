
<?php
	require 'core/connect.php';
if (isset($_POST['accessNumber'])) {
	$access_number=$_POST['accessNumber'];
	$query="SELECT status FROM book_status WHERE access_number= $access_number";
	$result=mysql_query($query) or die(mysql_error());
	$row=mysql_fetch_assoc($result);
	$status=$row['status'];
	echo "Book status: ".$status;
}
?>
