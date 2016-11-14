<html>
	<head>
		<title>Loops: While</title>
	</head>
	<body>
	<?php
		$count = 0;
		while($count<=10){
			echo $count.", ";
			$count++;
		}
		echo "<br> Count:{$count}"
	?>
	<br>
	<?php
		$count = 0;
		while($count<=10){
			if($count==5){
				echo "FIVE, ";
			}else{
				echo $count.", ";
			}
			$count++;
		}
		echo "<br> Count:{$count}"
	?>
</html>