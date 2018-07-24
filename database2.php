<html>
	<body>
<?php
	$con = mysqli_connect("localhost","harshdarsh","harshdarsh","inventory");
	if(mysqli_connect_errno())
	{
		echo "Connection Failed.";
	}
	function adminlogin($con)
	{
		$query="SELECT* 
				  FROM adminlogindetails
				  WHERE username = '".$_POST["a_name"]."'
				  AND password = '".$_POST["a_password"]."';";
				  $result = mysqli_query($con,$query);
				  while($row = mysqli_fetch_array($result))
					{
						return true;
					}
						return false;
			
	}
	function adminview($con)
	{
		$query="select product,company,availability from stock ;";
		$result=mysqli_query($con,$query);?>
		 <table border="1px" align="center">
		<tr>
			<th>PRODUCTS</th>
			<th>Company</th>
			<th>Availability</th>
		</tr>
		<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>";
			echo $row["product"];
			echo "</td>";
			echo "<td>";
			echo $row["company"];
			echo "</td>";
			echo "<td>";
			echo $row["availability"];
			echo "</td>";
			echo "</tr>";
		}?>
		</table>
		
	<?php
		
	}
	
?>
	<?php
		function minstock($con)
		{
			$query="select product,company from stock where availability<=threshold;";
			$result=mysqli_query($con,$query);
			?>
			<h2>You are out of stock for following products:
				Please Buy them:</h2>
		 <table border="1px" align="center">
		<tr>
			<th>PRODUCTS</th>
			<th>Company</th>
			
		</tr>
		<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>";
			echo $row["product"];
			echo "</td>";
			echo "<td>";
			echo $row["company"];
			echo "</td>";
			echo "</tr>";
		}?>
		</table>
		
	<?php
		
	}
	
?>
	<?php
		function newuser($con)
		{
				
			
				$query1="insert into userlogin (name,username,password,city,state,pincode,phonenumber) values
				('".$_POST["name"]."','".$_POST["u_name"]."','".$_POST["u_password"]."','".$_POST["u_city"]."','".$_POST["u_state"]."','".$_POST["pin"]."','".$_POST["u_phone"]."');";
				if(!mysqli_query($con,$query1))
				{
					return false;
				}
				return true;	
			
		}		
	?>
	<?php
		function checkuser($con)
		{
			$query="SELECT username,password
				  FROM userlogin
				  WHERE username = '".$_POST["u_name"]."'
				  AND password = '".$_POST["u_password"]."';";
			$result=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result))
			{
					return true;
			}
				return false;	
		}
	?>

</body>
</html>