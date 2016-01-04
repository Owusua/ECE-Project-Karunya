<?php
ob_start();
session_start();
session_destroy();
header("Location:librarian_login.php");
?>