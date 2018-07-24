<html>
	<head>
		<title>AdminView</title>
		<style>
			
			body{background-image:url('background.jpg');}
			.div1{float:right;}
			.div2{float:left;}
			h1{color:Limegreen;
				align:center;}
		</style>

	</head>
	<body>
		<div class="div1">
			<img src="rondlogo1.gif" width="200px" height="200px">
			</img>
		</div>
			<div class="div2">
			<img src="Inventory_large.jpg" width="200px" height="200px"></img>
		</div>
		


			<?php
	include "database2.php";
	$result=adminlogin($con);
	if($result)
	{
		$user=$_POST["a_name"];
                
		echo "<pre><h1>   

	 Welcome $user</pre></h1>";

	}
	else
	{
		header('Location:p2.html');

	}
?>
			
<pre>






			<hr>
		</pre>

		<?php
			adminview($con);
			minstock($con);
		?>
		<form action="p2.html" method="post">
			<input type="submit" value="LOGOUT"/>
		</form>
	</body>
</html>