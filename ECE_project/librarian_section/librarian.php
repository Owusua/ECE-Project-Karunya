<?php
session_start();
if(!isset($_SESSION['lib_username'])){
  header("Location:librarian_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>Librarian</title>

	<link rel="shortcut icon" href="img/logo6.jpg" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/magister (2).css" type="text/css" />
    <link rel="stylesheet" href="css/lib_styles.css" type="text/css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="datepicker/css/datepicker.css" />



    
	
</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

<nav class="mainmenu">
	<div class="container">
    
		<div class="dropdown">
			<button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				<li><a href="#librarian" class="active" style="color:#09F">Home</a></li>
                <li><a href="#issue_books" style="color:#09F">Issue Books</a></li>
				<li><a href="#view_issued_books" style="color:#09F">View Issued Books</a></li>
                <li><a href="#return_book" style="color:#09F">Return Book</a></li>
				<li><a href="lib_logout.php" style="color:#09F">Logout</a></li>
                
			</ul>
		</div>
	</div>
</nav>


<!-- Main (Home) section -->
<section class="section" id="librarian">
	<div class="container">

		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">	
               <br>
               <br>
               <br>
               <br>
				<!-- Site Title, your name, HELLO msg, etc. -->
				<h1 class="title" style="font-family: Adobe Gothic Std B; color:#FFF; padding-left: 400px">ECE <span style="color:#0CF">Library</span></h1>

				<!-- Short introductory (optional) -->
				<h3 class="tagline" style="color:#FFF; padding-left: 400px">
					The Electrical and Communications Engineering Library aims to enable students and especially staff members have access to current and resourceful books for research in the various feilds of Electronics.
				</h3>
				
				
	
			</div> <!-- /col -->
		</div> <!-- /row -->
	
	</div>
</section>

<!-- Second (issue_book) section -->
<section class="section" id="issue_books">
	<div class="container" style="background-color: #333; opacity: 0.8;">

		<h2 class="text-center subtitle" style="color:#FFF; font-family: Agency FB">Issue Books</h2>
		<div class="row">
          <form action="lib_entry.php" method="post">
            <input type="hidden" name="submitted" value="true" />
			<div class="col-sm-4 col-sm-offset-2">
				             <label for="access_number" style="color:#FFF; font-size:16px;">Access Number
                                <input type="text" name="access_number" id="access_number" style="padding-left: 10px; width: 200px; height: 40px;                                   border-radius: 7px; background-color:#CCC" required />
                             </label>
			</div>
			<div class="col-sm-4">
				            <label for="emp_id" style="color:#FFF; font-size:16px;">Staff / Empl ID
                                <input type="text" name="emp_id" id="emp_id" style="padding-left: 10px; width: 200px; height: 40px;                                   border-radius: 7px; background-color:#CCC" required />
                            </label>
			</div><br><br><br>
            <div class="col-sm-4 col-sm-offset-2" style="color:#FFF; font-size:16px;" >
				             <label for="issue_date">&nbsp; Issue Date &nbsp; &nbsp; &nbsp;
                                  <input type="date" name="issue_date" id="issue_date" style="padding-left: 10px; width: 200px; height: 40px;border-radius: 7px;                                                    background-color:#CCC" required/>
                             </label>
			</div>
			<div class="col-sm-4" style="margin-bottom: 20px">
				            <label for="return_date" style="color:#FFF; font-size:16px;"> &nbsp; Return Date &nbsp;
                                <input type="date" name="return_date" id="return_date" style="padding-left: 10px; width: 200px; height: 40px;border-radius: 7px;                                                    background-color:#CCC" required/>
                            </label>
            <br>
            <br>
                             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                     <input type="reset" value="Clear" class="btn btn-primary btn-lg" />&nbsp;


                                     <input type="submit" value="Submit" class="btn btn-primary btn-lg" />
			</div>

            </form>
		</div>
	</div>
</section>



<!-- Third (view issue book) section -->
<section class="section" id="view_issued_books">
	<div class="container" style="background-color: #333; opacity: 0.8;">

		<h2 class="text-center subtitle" style="color:#FFF; font-family: Agency FB">Books Currently Issued</h2>
		<div class="row">
           <div class="col-sm-8 col-sm-offset-2 text-center" style="padding-left: 125px;">
			<?php
                 include 'core/connect.php';
				 $sqlget = "SELECT * FROM issue_book";
				 $sqldata = mysql_query($sqlget) or die('Error getting table from database');

				 echo "<table id='books_lib'>";
				 echo "<tr>
				           <th> ID</th>
				           <th> Access Number </th>
						   <th> Staff ID / Emp ID </th>
						   <th> Issue Date </th>
						   <th> Return Date </th>
					   </tr>";
				 while($row = mysql_fetch_array($sqldata))
				 {
					 echo "<tr><td>";
					 echo $row['id'];
					 echo "</td><td>";
					 echo $row['access_number'];
					 echo "</td><td>";
					 echo $row['emp_id'];
					 echo "</td><td>";
					 echo $row['issue_date'];
					 echo "</td><td>";
					 echo $row['return_date'];
					 echo "</td></tr>";
				 }
				 echo "</table>";
				 
			?>
            </div>

		</div>
        <div style="margin-bottom: 20px"></div>

	</div>
</section>

<!-- Fourth (return book) section -->
<section class="section" id="return_book">
	<div class="container" style="background-color: #333; opacity: 0.8;">
	
		<h2 class="text-center subtitle" style="color:#FFF; font-family: Agency FB">Return Book</h2>
		<div class="row">
              <form action="lib_return.php" method="post">
            <input type="hidden" name="submitted" value="true" />
			<div class="col-sm-4 col-sm-offset-2">
				             <label for="access_number" style="color:#FFF; font-size:16px;">Access Number
                                <input type="text" name="access_number" id="access_number" style="padding-left: 10px; width: 200px; height: 40px;                                   border-radius: 7px; background-color:#CCC" required />
                             </label>
			</div>
			<div class="col-sm-4">
				            <label for="emp_id" style="color:#FFF; font-size:16px;">Staff / Empl ID
                                <input type="text" name="emp_id" id="emp_id" style="padding-left: 10px; width: 200px; height: 40px;                                   border-radius: 7px; background-color:#CCC" required />
                            </label>
			</div><br><br><br>
            <div class="col-sm-4 col-sm-offset-2" style="color:#FFF; font-size:16px;" >
				             <label for="return_date">&nbsp; Return Date &nbsp; &nbsp; &nbsp;
                                  <input type="date" name="return_date" id="return_date_section" style="padding-left: 10px; width: 200px; height: 40px;border-radius: 7px; background-color:#CCC" required/>
                             </label>
			</div>

                            <br />
                             <br />
                             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                     <input type="reset" value="Clear" class="btn btn-primary btn-lg" />&nbsp;
                                     <input type="submit" value="Submit" class="btn btn-primary btn-lg" />
			
            </form>
		</div>
         <div style="margin-bottom: 20px"></div>
	</div>
</section>




<!-- Load js libs only when the page is loaded. -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.72241.js"></script>

<!-- Custom template scripts -->
<script src="js/magister.js"></script>
<script src="datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#issue_date').datepicker({
                    format: "dd/mm/yyyy"
                });
				$('#return_date').datepicker({
                    format: "dd/mm/yyyy"
                });
                $('#return_date_section').datepicker({
                    format: "dd/mm/yyyy"
                });

            });
        </script>

      
</body>
</html>



