<?php
	//1.Create Database Connection
	$connection = mysqli_connect("localhost","root","");
	if(!$connection){
		die("Database connection failed");
	}
	//2.Select the Database
	$db_select=mysqli_select_db($connection,"widget_corp");
	if(!$db_select){
		die("Database selection failed");
	}
?>
<html>
	<head>
		<title>Databases</title>
	</head>
	<body>
	<?php
		//3.Perform Database Query
		$result=mysqli_query($connection, "SELECT*FROM subjects");
		if(!$result){
			die("Database query failed");
		}
		//4.Use Returned Data
		while($row=mysqli_fetch_array($result)){
			echo "<pre>";
			print_r($row);
			echo "</pre>";
			//echo $row["menu_name"]." ".$row["position"]."<br>";
		}
	?>
	</body>

</html>
<?php
	//5.Close Connection
	mysqli_close($connection);
?>