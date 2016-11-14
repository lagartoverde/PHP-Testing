<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
	<?php
		$array1 = array(4,8,15,16,23,42);
		echo $array1[0];
		echo "<br>";
		$array2 = array(6,"fox","dog",array("x","y","z"));
		echo $array2[3][1];
		echo "<br>";
		$array2[3] = "cat";
		echo $array2[3];
		echo "<br>";
		$array3= array("FirstName" => "Kevin" , "LastName" => "Skoglund");
		echo $array3["FirstName"] . " " . $array3["LastName"];
		echo "<br>";
		$array3["FirstName"] = "Larry";
		echo $array3["FirstName"] . " " . $array3["LastName"];
		echo "<br>";
		echo "<pre>";
		print_r($array2);
		echo "</pre>";
	?>
</html>