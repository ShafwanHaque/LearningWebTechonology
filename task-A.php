<html>

<head>
	<title>Insert add product</title>
</head>

<body>
	<center>
		<?php

		// servername => product_db
		// username => root
		// password => empty
		// database name => products
		$conn = mysqli_connect("localhost", "root", "", "product_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$buying_price = $_REQUEST['buying_price'];
		$selling_price = $_REQUEST['selling_price'];
		$display = $_REQUEST['display'];
		
		
		// Performing insert query execution
		// here our table name is products
		$sql = "INSERT INTO products VALUES ('$name',
			'$buying_price','$selling_price','$display')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $buying_price\n "
				. "$selling_price\n $display");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
