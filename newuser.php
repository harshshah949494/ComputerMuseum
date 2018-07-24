<?php
	include "database2.php";
	$result=newuser($con);
	if($result)
	{ 
		$user=$_POST["name"];
		setcookie("user9",$user,time()+3600);
		echo "<h1> Welcome $user</h1>";
		//echo $_COOKIE["user8"];

?>
		<html>
	<head>
		<title>UserLoginSuccess</title>
		<style>
			
			
		</style>
	</head>
	<body bgcolor="Limegreen">
		
		<h3 align="center"> You Logged In Successfully</h3>
		<div class="div1">
			<img src="rondlogo1.gif" width="200px" height="200px">
		<p>
			Please <b>click </b>on this button below to <b>go back </b>and Login Again with your <b>new username and password</b>-->
		</p>
		<form action="p2.html" method="post">
			<input type="submit" value="GoBack"/>
		</form>
			
	</body>
</html>
	<?php }
	else
	{
		echo "Some error occured.";
	}
	
?>