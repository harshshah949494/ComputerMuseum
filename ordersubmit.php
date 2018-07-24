<html>
	<head>
		<title>Your Order</title>
		<style>
			body{background-image:url('background.jpg');}
			.div1{float:right;}
			h2{color:Limegreen;}
			h1{color:red;}
		</style>
	</head>
	<body>
		<div class="div1">
			<img src="rondlogo1.gif" width="200px" height="200px">
			</img>
		</div>
		<pre>





			<h2>You Ordered:</h2>
		</pre>
		<?php
			$con = mysqli_connect("localhost","harshdarsh","harshdarsh","inventory");
			if(mysqli_connect_errno())
			{
				echo "Connection Failed.";
			}
			function updatestock($con)
			{
				$product=$_POST["productname"];
				$company=$_POST["company"];
				$qty=$_POST["quantity"];
				$query="select availability from stock where product='".$_POST["productname"]."' AND company='".$_POST["company"]."';";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					$availability=$row["availability"];
				}
				$newavailability=$availability-$qty;
				$query1="update stock set availability=$newavailability where product='".$_POST["productname"]."' AND company='".$_POST["company"]."';";
				$result=mysqli_query($con,$query1);

			}
			function getprice($con)
			{
				$price=0;
				$total=0;
				$product=$_POST["productname"];
				$company=$_POST["company"];
				$qty=$_POST["quantity"];
				echo "1)Product Name:.".$product."<br>";
				echo "2)Company Name:.".$company."<br>";
				echo "3)Quantity:.".$qty."<br>";
				$query="select price from stock where product='".$_POST["productname"]."' AND company='".$_POST["company"]."';";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					$price=$row["price"];
				}
				$total=$price*$qty;
				echo "4)Your total cost is:".$total;
				updatestock($con);?>
				<h4>Do you wish to continue with the deal..??</h4>
		<form action="confirmedorder.php" method="post">
			<input type="submit" value="YES"/>
		</form>


		<form action="p5.php" method="post">
			<input type="submit" value="NO"/>
		</form><?php
			}
			function checkprice($con)
			{
				$qty=$_POST["quantity"];
				$query="select availability from stock where product='".$_POST["productname"]."' AND company='".$_POST["company"]."';";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					$availability=$row["availability"];
				}
				if($availability<$qty)
				{
					echo "<h1>The Product u need is out of stock ".$_COOKIE["user"]."...SORRY FOR INCONVIENCE 
						..Please Try after some period.</h1>";?>
					<form action="p5.php" method="post">
					<input type="submit" value="GO Back"/>
				</form>
				<?php
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
				
				else
				{
					getprice($con);
				}
			}
			checkprice($con);
			
				
		?>

	</body>
</html>