<?php

if (isset($_POST['new_admin_name'])) {
	$new_admin_name=$_POST['new_admin_name'];
	$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789'); // and any other characters
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$pass = '';
$userid='';
foreach (array_rand($seed, 8) as $k) 
	$pass .= $seed[$k];

foreach (array_rand($seed, 3) as $k) 
	$userid .= $seed[$k];
$total=strlen($new_admin_name);
$username=substr($new_admin_name, ($total/2)).$userid;
$password=$pass;

	echo $username."-";
	echo($password);
}
else{
	echo "not found";
}


?>