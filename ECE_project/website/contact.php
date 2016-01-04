<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="img/logo6.jpg" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="4/js-image-slider.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />

<script type="text/javascript" src="4/js-image-slider.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/dropdown.js"></script>
<script type="text/javascript" src="js/try.js"></script>
<script type="text/javascript" src="js/modal.js"></script>

<title>Contact Us</title>

<script>

    function validate()
    {
      //name validation
      if( document.contact.name.value == "" )
      {
        alert( "Please provide your name!" );
        document.contact.name.focus() ;
        return false;
      }
      if(!isNaN(document.contact.name.value))
      {
        alert("Please Enter Only Characters");
        document.contact.name.select();
        return false;
      }
      //email validation
     if( document.contact.email.value == "" )
     {
        alert( "Please provide your Email!" );
        document.contact.email.focus() ;
        return false;
     }
     var x = document.forms["contact"]["email"].value;
     var atpos = x.indexOf("@");
     var dotpos = x.lastIndexOf(".");
     if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length)
     {
        alert("Not a valid e-mail address");
        return false;
     }
     //Phone Validation
     if( document.contact.phone_no.value == "" )
     {
        alert( "Please provide your phone number!" );
        document.contact.phone_no.focus() ;
        return false;
     }
     var a = document.contact.phone_no.value;
     if(isNaN(a))
     {
        alert("Enter the valid Mobile Number(Like : 9566137117)");
        document.contact.phone.focus();
        return false;
     }
     if((a.length < 1) || (a.length > 10))
     {
        alert(" Your Mobile Number must be 1 to 10 Integers");
        document.form.phone.select();
        return false;
     }
     //message validation
     if( document.contact.message.value == "" )
     {
        alert( "Please enter your message!" );
        document.contact.message.focus() ;
        return false;
     }

     return true;
   }
</script>
</head>

<body>

<!-- Header content -->

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="border-top: 5px solid #e56038;">
<div class="container-fluid">


<div class="navbar-header">

<p class="navbar-text navbar-left" style="font-family: Bradley Hand ITC; font-weight:bolder; font-size:24px">ECE Library</p>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

<ul class="nav navbar-nav navbar-right">
<li><a href="index.php">HOME</a></li>
<li><a href="about.php">ABOUT</a></li>
<li><a href="books.php">BOOKS</a></li>
<li class="active"><a href="contact.php">CONTACT</a></li>
</ul>
</div><!-- /.navbar-collapse -->

  </div>
</nav>

<div class="content_page" style="padding-top: 60px; margin-top: 80px;">
         <div class="row">
                <div class="col-lg-6">
                  <h3 style="padding-left: 40px">Our Contacts</h3>
                   <p style="padding-left: 50px"><b>Telephone Number:</b> +91 8765 643324<br /><br />
                      <b>Email:</b> ecelibrary.karunya.edu
                    </p> 
                </div>
                <div class="col-lg-6">
                  <h3>Contact Us:</h3>
                      <p>Please enter your views or comments concerning the library.</p>
                       <form name="contact" method="post" action="contact_entry.php" onsubmit="return validate()">
                        <input type="hidden" name="submitted" value="true" />
                           <fieldset>
                             <label for="username">     
                                <input type="text" name="name" id="name" style="padding-left: 10px; width: 250px; height: 30px;"; placeholder="Name" />
                             </label>
                             <br />
                             <br />
                             <label for="email">
                                <input type="email" name="email" id="email" style="padding-left: 10px; width: 250px; height:30px" placeholder="Email" />
                             </label>
                             <br />
                             <br />
                             <label for="phone_no">
                                <input type="tel" name="phone_no" id="phone_no" style="padding-left: 10px; width: 250px; height: 30px" placeholder="Phone No." />
                             </label>
                             <br />
                             <br />
                             <label for="message">
                               <textarea name="message" id="message" rows="3" cols="20" style="padding-left: 10px; width: 250px" placeholder="Please enter your comments/message" ></textarea>
                               <br />
                               <br />
                                     <input type="submit" value="Submit" class="btn btn-primary" />
                                     <input type="reset" value="Clear" class="btn btn-primary" />

                             </label>
                          </fieldset>
                       </form>
                   
                </div>
          </div>

</div>

<?php include 'footer.php';?>
</body>
</html>