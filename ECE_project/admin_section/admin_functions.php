<?php
function loggedin(){
  if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
    return true;
  }else{
    return false;
  }
}
if(loggedin()){
  $my_id = $_SESSION['user_id'];
  $user_query = mysql_query("SELECT new_username,user_role FROM admin_users WHERE id = '$my_id'");
  $run_user = mysql_fetch_array($user_query);
  $new_username = $run_user['new_username'];
  $user_role = $run_user['user_role'];
  $query_level = mysql_query("SELECT role FROM admin_role WHERE id = '$user_role'");
  $run_level = mysql_fetch_array($query_level);
  $level_name = $run_level['role'];
}
?>

