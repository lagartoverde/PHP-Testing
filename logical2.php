<html>
	<head>
		<title>Logical Expresions: Switch</title>
	</head>
	<body>
	<?php
		$a = 2;
		switch ($a) {
			case 0:
				echo "a equals 0";
				break;
			case 1:
				echo "a equals 1";
				break;
			case 2:
				echo "a equals 2";
				break;
			default:
				echo "a is not 0, 1 or 2";
				break;
		}
	?>
</html>