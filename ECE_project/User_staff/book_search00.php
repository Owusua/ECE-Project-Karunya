<?php
session_start();
if(!isset($_SESSION['emp_id'])){
  header("Location:login.php");
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

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="4/js-image-slider.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/try.js"></script>
<script type="text/javascript" src="js/modal.js"></script>

<title>Book Search</title>
</head>

<body style="border-top: 5px solid #e56038">
<?php
    include 'head.php';
?>

      <div class="row-fluid" style="border:none; margin-left:100px;">
           
         <div class="col-md-3">
         </div>
                
         
                <div class="col-lg-6">
            

                        <form class="registration">
 	                         <h3 style="color:#9F0; font-size:36px; font-weight: bolder; letter-spacing: .5px; line-height:1em;                           font-family: Bradley Hand ITC">Search for Available Book</h3>
                             <br>
                            
                           <fieldset>
                           
                             <label for="title">     
                                <input type="text" name="title" id="title" style="padding-left: 10px; width: 290px; height: 40px; border-radius: 7px; background-color:#CCC" placeholder="Title" required />
                             </label> 
                             <br />
                             <br />
                             <label for="author_name">   
                                <input type="text" name="author_name" id="author_name" style="padding-left: 10px; width: 290px; height:40px; border-radius: 7px; background-color:#CCC" placeholder="Author Name" required />
                             </label>
                             <br />
                             <br />  
                     <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp ;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                        <input type="reset" class="btn btn-primary" name="clear" id="clear" value="Reset"/>
                        <input type="button" class="btn btn-primary" name="submit" id="submit" value="Search"  href="#search" data-toggle="modal" data-target="#search"/>
                     </p>
                     <p id="result"></p>
               </fieldset>
             </form>
      
          </div>
      
          <div class="col-lg-3">
          </div>
   </div>


    <script type="text/javascript">
      $("#submit").click(function(){
        var title = $("#title").val();
        var author_name = $("#author_name").val();
          if(title.length != 0 && author_name.length !=0)
          {
            $.ajax({
              type: "POST",
              url: "search00.php",
              data: { title:title, author_name:author_name}
            }).done(function( msg ) {
              $(".modal-body").html(msg);
            });
          }
		  
		  else{

            alert("Both fields are required");
            return false;
          }
      });
    
    </script>


                <!--Modal Code -->
            <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Search Results</h4>
                  </div>
                  <div class="modal-body" id="modalBody">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

</body>
</html>

