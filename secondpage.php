<html>
	<head>
		<title>Second Page</title>
	</head>
	<body>
	<?php
		echo "<pre>";
		print_r($_GET);
		echo "<pre><br>";
		$id=$_GET['id'];
		$name=urldecode($_GET['name']); 
		echo "<strong>{$name}: {$id}</strong><br>";
	?>
	<?php
		echo "<br>";
		$string= "kevin skoglund";
		echo "Normal String: ".$string."<br>";
		echo "Url Encode: ".urlencode($string)."<br>";
		echo "Raw Url Encode: ".rawurlencode($string)."<br>"
	?>
</html>