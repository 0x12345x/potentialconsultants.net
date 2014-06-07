<html>

<body>
<?php
//connection to the database
		$conn=mysqli_connect("localhost","consultants","ndunge")or die("could not connect to the server");
		mysqli_select_db($conn,"consultants")or die("could not access the database");
		//creating the queries
		if (isset($_GET['id']) && is_numeric($_GET['id']))
			{
 // get id value
		$id = $_GET['id'];
		$query="DELETE FROM services WHERE id='$id'";
		$result=mysqli_query($conn,"$query");
		
		}
		else{
		echo"Unable to delete";
		}
		header("location:viewproducts.php");
		
?>
</body>
</html>