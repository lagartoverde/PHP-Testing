<html>
	<head>
		<title>String Fuctions</title>
	</head>
	<body>
	<?php
		$firstString = "The quick brown fox";
		$secondString = " jumped over the lazy dog.";

	?>
	<?php
		$thirdString = $firstString;
		$thirdString .= $secondString;
		echo $thirdString;
	?>
	<br>
	LowerCase: <?php echo strtolower($thirdString); ?><br>
	UpperCase: <?php echo strtoupper($thirdString); ?><br>
	UpperCase First Letter: <?php echo ucfirst($thirdString); ?><br>
	UpperCase Words: <?php echo ucwords($thirdString); ?><br>
	<br>
	Length: <?php echo strlen($thirdString); ?><br>
	Trim: <?php echo $fourthString = $firstString.trim($secondString); ?><br>
	Find: <?php echo strstr($thirdString,"brown"); ?><br>
	Replace by String: <?php echo str_replace("quick","super-fast",$thirdString); ?><br>
	<br>
	Repeat: <?php echo str_repeat($thirdString,2); ?><br>
	Make Substring: <?php echo substr($thirdString,5,10); ?><br>
	Find Position: <?php echo strpos($thirdString,"brown"); ?><br>
	Find Character: <?php echo strchr($thirdString,"z"); ?><br>
	</body>
</html>