<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <title>Make a game like effects to input fields with jQuery plugin | PGPGang.com</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <style type="text/css">
    
      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
    </style>
    <link rel="stylesheet" href="fancyInput-master/fancyInput.css">
        <link rel="stylesheet" href="fancyInput-master/styles.css">
        <script src="fancyInput-master/jquery-1.9.1.min.js"></script>
    
  </head>
  <body >
      <h2>Make a game like effects to input fields with jQuery plugin example.&nbsp;&nbsp;&nbsp;=> <a href="http://www.phpgang.com/">Home</a> | <a href="http://demo.phpgang.com/">More Demos</a></h2>



	<div style="padding: 10px; background:radial-gradient(#205983, #0A2742);  text-align:center;">
		
		<div style="margin: 10px 0px;">
			<input type="text" class="fancy_effect1" placeholder="effect 1">
		</div>
		
		<div style="margin: 10px 0px;">
			<input type="text" class="fancy_effect2" placeholder="effect 2">
		</div>
		
		<div style="margin: 10px 0px;">
			<input type="text" class="fancy_effect3" placeholder="effect 3">
		</div>
		
		<div style="margin: 10px 0px;">
			<input type="text" class="fancy_effect4" placeholder="effect 4">
		</div>
		
		<div style="margin: 10px 0px;">
			<input type="text" class="fancy_effect5" placeholder="effect 5">
		</div>
		</div>
		<script src="fancyInput-master/fancyInput.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				
				$(".fancy_effect1").fancyInput()[0];
				$(".fancy_effect2").fancyInput()[1];
				$(".fancy_effect3").fancyInput()[2];
				$(".fancy_effect4").fancyInput()[3];
				$(".fancy_effect5").fancyInput()[4];
			});
		</script>
  </body>
</html>