<?php
ob_start();
session_start();
session_destroy();
header("Location:admin_login.php");
?>