<?php
$db = mysql_connect('localhost','root','') or die('Please check your database connection');
$db_select = mysql_select_db('ece_project') or die('Could not find your database');
?>