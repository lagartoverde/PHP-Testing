<html>
	<head>
		<title>Numbers: Floating Point Numbers</title>
	</head>
	<body>
	<?php
		$var1 = 3.14;
	?>
	<?php echo 4/3; ?>
	<br>
	Floating Point: <?php echo $myFloat=3.14; ?><br>
	Round: <?php echo round($myFloat,1); ?><br>
	Ceiling: <?php echo ceil($myFloat); ?><br>
	Floor: <?php echo floor($myFloat); ?><br>
	Absolute Value: <?php echo abs(0-300); ?><br>
	Exponential: <?php echo pow(2,8); ?><br>
	Square Root: <?php echo sqrt(100); ?><br>
	Modulo: <?php echo fmod(20,7); ?><br>
	Random(any): <?php echo rand(); ?><br>
	Random(min,max): <?php echo rand(1,10); ?><br>

</html>