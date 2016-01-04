<?php

include 'core/connect.php';
  // changes characters used in html to their equivalents, for example: < to &gt;
    $title=htmlspecialchars($_POST['title']);
    $author=htmlspecialchars($_POST['author_name']);
  // makes sure nobody uses SQL injection
    $title=mysql_real_escape_string($title);
    $author=mysql_real_escape_string($author);

     $raw_results = mysql_query("SELECT * FROM books
            WHERE `title` LIKE '%$title%' OR `author_name` LIKE '%$author%'") or die(mysql_error());
             
    if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following

        while($results = mysql_fetch_assoc($raw_results)){

         
      echo "<p><h4><span style='font-family:Adobe Gothic Std B'>Book title:</span> ".$results['title']."</h4><span style='font-family:Adobe Gothic Std B'>Author:</span> ".$results['author_name']."</p>".
	  "<p><a href='".$results['id']."' data-access_no ='".$results['access_number']."'> Status</a> </p>"."</p>";
        } 

    }
    else{ // if there is no matching rows do following
            echo "No results found";
        }
        
?>
<div id="output"></div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $("a").click(function(e){
	var accessNo=$(this).data('access_no');
	$.post('status.php',{accessNumber:accessNo},function(msg){
      alert(msg);
    });
    
    e.preventDefault();
  });
</script>