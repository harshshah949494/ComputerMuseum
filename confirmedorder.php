<html>
	<head>
		<title>confirmedOrder</title>
		<style>
			body{background-image:url('background.jpg');}
			.div1{float:right;}
			h1{color:blue;}
		</style>
	</head>
	<body>
		<div class="div1">
			<img src="rondlogo1.gif" width="200px" height="200px">
			</img>
		</div>
		
			<h3>You will recieve your order within 2 months.</h3>
			    <h4>Cash on Delivery.</h4>
		<h2>
			Thanks For Dealing With Us..<?php 
			echo "<h1>";
			echo $_COOKIE["user"]; 
			echo "</h1>";
		?>
			Hope U Will enjoy and appreciate our Services..
			Thank U..!!
		</h2>
		<form action="p5.php" method="post">
			<input type="submit" value="Go Back to Home Page"/>
		</form>	    
	</body>
</html>