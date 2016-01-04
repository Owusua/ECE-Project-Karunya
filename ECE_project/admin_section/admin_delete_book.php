<?php


     include 'core/connect.php';

     $access_number = mysql_escape_string($_POST['access_number']);
     $author_name = mysql_escape_string($_POST['author_name']);
     $title = mysql_escape_string($_POST['title']);
     $number_of_books = mysql_escape_string($_POST['number_of_books']);

     $query = "DELETE FROM books WHERE access_number = '$access_number'";
     if(mysql_query($query)){
         ?>
         <?php
        header("Location:delete_book.php");

        }
        else{
          echo "fail";
     }


?>