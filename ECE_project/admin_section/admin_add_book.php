<?php
	if(isset($_POST['submitted']))
	{
	   include 'core/connect.php';
       $access_number = $_POST['access_number'];
	   $author_name = $_POST['author_name'];
	   $title = $_POST['title'];
       $number_of_books = $_POST['number_of_books'];

	   $sqlinsert = "INSERT INTO books(access_number, author_name, title, number_of_books ) VALUES('$access_number', '$author_name', '$title', '$number_of_books')"; //the names are the field names from the database
	   if(!mysql_query($sqlinsert))
	   {
		   die('error inserting new record');
	   }
	   ?>
       <script type="text/javascript">
	       alert('New record inserted');
	   </script>
       <?php
	  header("Location:add_book.php");
	}



?>