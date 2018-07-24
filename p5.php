<html>
	<head>
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="style3.css">
		<script src="jquery.js" type="text/javascript">
		</script>
		<script>
			$(document).ready(function()
			{
				$('.i1').width(300);
				$('.i1').mouseover(function()
				{
					$(this).css("cursor","pointer");
					$(this).animate({width:"400px",height:"300px"},'slow');
				});
				$(".i1").mouseout(function()
				{
					$(this).animate({width:"300px",height:"200px"},'slow');
				});
			});
		</script>
		<style>
			
			body{background-image:url('background.jpg');}
			.div1{float:right;}
			a{text-decoration:none;}
			.col{color:white;}
			.col1{color:black;}
			.dec{text-decoration:underline;
				color:Limegreen;}
			.div2{float:left;}
			p{color:white;}
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
			<h1 class="dec">:Welcome <?php echo $_COOKIE["user"]; ?> :</h1>
	<ul>
		<li><a href="p5.html"><span class="col1">Home</span></a></li>
  		<li><a href="aboutus.html"><span class="col1">About Us</span></a></li>
  		<li>Products
    			<ul>
      				<li><a href="monitor.html"><span class="col">Monitor</span></a></li>
      				<li><a href="mouse.html"><span class="col">Mouse</span></a></li>
      				<li><a href="keyboard.html"><span class="col">Keyboard</span></a></li>
				<li><a href="joystick.html"><span class="col">Joystick</span></a></li>
				<li><a href="printer.html"><span class="col">Printer</span></a></li>
    			</ul>
  		</li>
  		<li>Global Partners
			<ul>
				<li><a href="micro.html"><span class="col">Microsoft</span></a></li>
				<li><a href="hp.html"><span class="col">Hp</span></a></li>
				<li><a href="lenovo.html"><span class="col">Lenovo</span></a></li>
				<li><a href="vaio.html"><span class="col">Vaio</span></a></li>
				<li><a href="dell.html"><span class="col">Dell</span></a></li>
			</ul>
		</li>
  		<li><a href="contactus.html"><span class="col1">Contact Us</span></a></li>
	</ul>
	
	<pre>




			<hr>		</pre>
	<marquee>
		<a href="monitor.html"><img src="monitor1.jpg" width="300px" height="200px" class="i1"></img></a>
		<a href="printer.html"><img src="printer3.jpg" width="300px" height="200px" class="i1"></img></a>
		<a href="mouse.html"><img src="mouse1.jpg" width="300px" height="200px" class="i1"></img></a>
		<a href="keyboard.html"><img src="keyboard2.jpg" width="300px" height="200px" class="i1"></img></a>
		<a href="joystick.html"><img src="joystick2.jpg" width="300px" height="200px" class="i1"></img></a>
	</marquee>
	<hr>
	<p>
		-->Experience of 25 Years.<br>
		-->Have Global Tie-Ups.<br>
		-->Delivery Within 2 Months.<br>
		-->Cash On Delivery.<br>
		-->Damaged Goods Replacable.<br>
		-->Best Quality Of Service Guarantee.<br>
	</p>
	<hr>
	<h4 align="left">Copyright&copy;ComputerMuseum2014-2015
	</h4>
	<h4 align="left">
	HarshDarshProduction&trade;</h4>
	<form action="p2.html" method="post">
		<input type="submit" value="LOGOUT"/>
	</form>
</body>
</html>