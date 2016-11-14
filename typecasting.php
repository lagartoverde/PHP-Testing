<html>
	<head>
		<title>Type Casting</title>
	</head>
	<body>
	<?php
		$var1="2 brown foxes";
		$var2=$var1+3;
		echo $var2;
	?>
	<br>
	<?php
		echo gettype($var1);
		echo "<br>";
		echo gettype($var2);
		echo "<br>";
		echo "<br>";
		settype($var2, "string");
		echo gettype($var1);
		echo "<br>";
		echo gettype($var2);
		echo "<br>";
		$var3=(int) $var1;
		echo "<br>";
		echo $var3;
		echo "<br>";
		echo gettype($var3);
	?>
	<br>
	<br>
	$var1
	<br>
	Is Array: <?php echo is_array($var1); ?><br>
	Is Bool: <?php echo is_bool($var1); ?><br>
	Is Float: <?php echo is_float($var1); ?><br>
	Is Int: <?php echo is_int($var1); ?><br>
	Is Null: <?php echo is_null($var1); ?><br>
	Is Numeric: <?php echo is_numeric($var1); ?><br>
	Is String: <?php echo is_string($var1); ?><br>
</html>