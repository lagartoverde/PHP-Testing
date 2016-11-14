<html>
	<head>
		<title>Numbers: Integers</title>
	</head>
	<body>
	<?php
		$var1 = 3;
		$var2 = 4;
	?>
	Basic Math: <?php echo ((1+2+$var1)*$var2)/2-5; ?><br>
	<br>
	+= Method: <?php $var2+=4; echo $var2; ?><br>
	-= Method: <?php $var2-=4; echo $var2; ?><br>
	*= Method: <?php $var2*=4; echo $var2; ?><br>
	/= Method: <?php $var2/=4; echo $var2; ?><br>
	<br>
	Increment Method: <?php $var2++; echo $var2; ?><br>
	Decrement Method: <?php $var2--; echo $var2; ?><br>
	</body>
</html>