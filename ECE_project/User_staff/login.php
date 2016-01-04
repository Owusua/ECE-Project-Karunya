<?php
 session_start();
 if(isset($_SESSION['emp_id'])){
    header("Location: book_search00.php");	 
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
<title>Login</title>
</head>

<body style="border-top: 5px solid #e56038; background-image:url(img/DSC_0841.jpg)">
      <div class="row-fluid" style="border:none; margin-left:100px;">
           
         <div class="col-md-3">
         </div>
         <div class="col-lg-6">      
         <form class="registration" action="login_check.php" method="post">
 	                         <h3 style="color:#9F0; font-size:36px; font-weight: bolder; letter-spacing: .5px; line-height:1em;                           font-family: Bradley Hand ITC">User Login</h3>
                             <br>
                            
                           <fieldset>
                           
                             <label for="staff_id">     
                                <input type="text" name="emp_id" id="emp_id" style="padding-left: 10px; width: 290px; height: 40px; border-radius: 7px; background-color:#CCC" placeholder="Staff ID / Emp ID" required />
                             </label> 
                             <br />
                             <br />
                             <label for="password">   
                                <input type="password" name="password" id="password" style="padding-left: 10px; width: 290px; height:40px; border-radius: 7px; background-color:#CCC" placeholder="Password" required />
                             </label>
                             <br />
                             <br /> 
           
                     <p>
                      <a href="reset_password.php" style="font-size:15px; color: #9f0; text-shadow:#999">Forgot/Reset your password? </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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





