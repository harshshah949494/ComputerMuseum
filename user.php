<?php
	
	include "database2.php";
	$u=$_POST["u_name"];
	setcookie("user",$u,time()+3600);
	$result=checkuser($con);
	if($result)
	{
		header('Location:p5.php');
	}
	else
	{
		header('Location:p2.html');
	}

?>