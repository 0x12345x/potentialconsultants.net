

<?php
//uploading images to the webserver
$conn=mysqli_connect("localhost","consultants","ndunge");
mysqli_select_db($conn,"consultants");
$query="SELECT * FROM services";
$result=mysqli_query($conn,"$query");
$num_rows=mysqli_num_rows($result);

$winnie=$num_rows+1;
$location="pictures";

if($_FILES["file"]["error"]>0)
{
echo "return code:" .$_FILES["file"]["error"]."<br />";
	}
else
{
	echo "upload:" .$_FILES["file"]["name"]."<br />";
	echo "type:" .$_FILES["file"]["type"]."<br />";
	echo "size:" .($_FILES["file"]["size"]/1024)."kb<br />";
	echo "temp file:" .$_FILES["file"]["tmp_name"]."<br />";
	
	if (file_exists("pictures" .$_FILES["file"]["name"]))
	{
		echo $_FILES["file"]["name"]."already exists."; 
		}
	else{
		move_uploaded_file($_FILES["file"]["tmp_name"],"pictures/$winnie.jpg");
		echo "stored in:"."pictures".$_FILES["file"]["name"];
		}	
	}




$service=$_POST['service'];
$description=$_POST['description'];
$image="pictures/$winnie.jpg";


//creating queries for inserting information
$query="INSERT INTO services(id,service,description,image)VALUES('','$service','$description','$image')";
$result=mysqli_query($conn,"$query");
header("location:viewproducts.php");



?>