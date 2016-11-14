<html>
	<head>
		<title>Loops: Foreach</title>
	</head>
	<body>
	<?php
		$ages = array(4,8,15,6,23,42);
		foreach($ages as $age){
			echo $age . ", ";
		}
	?> 
	<br>
	<br>
	<?php
		foreach($ages as $position => $age){
			echo "{$position}: {$age}<br>";
		}
	?>
	<br>
	<br>
	<?php
		$prices = array("Brand New Computer"=>2000,"1 course of PHP"=>25,"Learning PHP"=>"priceless");
		foreach($prices as $key=>$value){
			if(is_int($value)){
				echo "{$key}: {$value}$<br>";
			}else{
				echo "{$key}: {$value}<br>";
			}
		}
	?>
</html>