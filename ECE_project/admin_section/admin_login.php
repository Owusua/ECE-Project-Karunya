<?php
 session_start();
 if(isset($_SESSION['new_username'])){
    header("Location: admin.php");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="4/js-image-slider.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />

<script type="text/javascript" src="4/js-image-slider.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/try.js"></script>
<title>Admin Login</title>
</head>

<body style="border-top: 5px solid #e56038; background-image:url(img/arbitrationlibrary.jpg)">
      <div class="row-fluid" style="border:none; margin-left:100px;">

         <div class="col-md-3">
         </div>
         <div class="col-lg-6">
         <form class="registration" action="admin_check.php" method="post" style="opacity: 0.8">
 	                         <h3 style="color:#9F0; font-size:36px; font-weight: bolder; letter-spacing: .5px; line-height:1em; font-family: Bradley Hand ITC">Administrator Login</h3>
                             <br>

                           <fieldset>

                             <label for="new_username">
                                <input type="text" name="new_username" id="new_username" style="padding-left: 10px; width: 290px; height: 40px; border-radius: 7px; background-color:#CCC" placeholder="Username" required />
                             </label>
                             <br />
                             <br />
                             <label for="new_password">
                                <input type="password" name="new_password" id="new_password" style="padding-left: 10px; width: 290px; height:40px; border-radius: 7px; background-color:#CCC" placeholder="Password" required />
                             </label>
                             <br />
                             <br />

                     <p>
                      <a href="reset_password.php" style="font-size:15px; color: #9f0; text-shadow:#999">Reset your password? </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <input type="reset" class="btn btn-primary" name="clear" id="clear" value="Reset"/>
                        <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Login"/>
                     </p>
               </fieldset>
             </form>

          </div>

          <div class="col-lg-3">
          </div>
   </div>

</body>
</html>





