<html>
	<head>
		<title>Bob's Auto Parts - Order Results </title>
	</head>
	
	<body>
		<h1>Bob's Auto Parts</h1>
		<h2>Order Results</h2>
		
		<?php
			define ('TIREPRICE', 100);
			define ('OILPRICE', 10);
			define ('SPARKPRICE', 10);
			
			echo "<p>Order processed ".date('H:i jS F Y')."</p>";
			
			$tireQty=$_REQUEST['tireQty'];
			$oilQty=$_REQUEST['oilQty'];
			$sparkQty=$_REQUEST['sparkQty'];
			
			echo "<p>Your order is the following list of items: </p>";
			echo $tireQty.' tires<br />';
			echo $oilQty.' bottles of oil<br />';
			echo $sparkQty.' spark plugs<br />';
		?>
		
	</body>
</html>
