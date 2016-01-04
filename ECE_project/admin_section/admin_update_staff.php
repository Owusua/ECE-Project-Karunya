<?php


     include 'core/connect.php';

     $emp_id = mysql_escape_string($_POST['emp_id']);
     $staff_name = mysql_escape_string($_POST['staff_name']);
     $staff_email = mysql_escape_string($_POST['staff_email']);

     $query = "UPDATE staff SET staff_name = '$staff_name', staff_email = '$staff_email' WHERE emp_id = '$emp_id'";
     if(mysql_query($query)){
         ?>
         <?php
        header("Location:update_staff.php");

        }
        else{
          echo "fail";
     }


?>