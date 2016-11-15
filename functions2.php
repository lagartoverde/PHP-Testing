<html>
	<head>
		<title>Functions 2</title>
	</head>
	<body>
	<?php
		$val1 = 2;
		$val2 = 3;
		$bar = "outside";
		function foo(){
			$bar = "inside";
		}
		foo();
		echo "{$bar}<br>";
	?>
	<br>
	<?php
		$bar = "outside";
		function foo2($bar){
			$bar = "inside";
			return $bar;
		}
		$bar=foo2($bar );
		echo "{$bar}<br>";
	?>
	<br>
	<?php
		//using globals
		$bar = "outside";
		function foo3(){
			global $bar; 
			$bar = "inside";
		}
		foo3();
		echo "{$bar}<br>";
	?>
	<br>
	<?php
		function paint($room = "office", $color = "red"){
			echo "The color of the {$room} is {$color}<br>";
		}
		paint("bedroom","blue");
		paint("bedroom");
		paint();
	?>
	<br>
	<?php
		echo "<pre>";
		print_r(get_defined_vars());
		echo "</pre>";
	?>
</html>