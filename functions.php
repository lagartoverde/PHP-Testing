<html>
	<head>
		<title>Functions</title>
	</head>
	<body>
	<?php

		function say_hello(){
			echo "Hello World!<br>";
		}

		say_hello();

		function say_hello2($word){
			echo "Hello {$word}!<br>";
		}

		say_hello2("Tommy");
		say_hello2("Everyone");

		$name = "John Doe";
		say_hello2($name);

		function say_hello3($greeting, $target, $punct){
			echo $greeting . ", " . $target . $punct . "<br>";
		}

		say_hello3("Greetings",$name,".");
	?>
	<br>
	<?php
		function addition($value1, $value2){
			$sum = $value1 + $value2;
			return $sum;
		}
		$new_val = addition(3,4);
		echo $new_val;

		echo "<br>";

		if(addition(5,6) == 11){
			echo "Yes<br>";
		}

		echo "<br>";

		function add_subt($value1, $value2){
			$add = $value1 + $value2;
			$subt = $value1 - $value2;
			$result = array($add,$subt);
			return $result;
		}

		$result_array = add_subt(10,5);
		echo "Add: {$result_array[0]} , Subt: {$result_array[1]}";

	?>
</html>