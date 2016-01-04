<?php


     include 'core/connect.php';

     $emp_id = mysql_escape_string($_POST['emp_id']);
     $staff_name = mysql_escape_string($_POST['staff_name']);

     $query = "DELETE FROM staff WHERE emp_id = '$emp_id'";
     if(mysql_query($query)){
         ?>
         <?php
        header("Location:staff.php");

        }
        else{
          echo "fail";
     }


?>