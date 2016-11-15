<html>
	<head>
		<title>First Page</title>
	</head>
	<body>
	<?php
		$link_text="<Click> & you will see";
	?>
	<a href="secondpage.php?name=
	<?php
		echo urlencode("kevin&");
	?>
	&id=42">
	<?php
		echo htmlspecialchars($link_text);
	?>
	</a>
</html>