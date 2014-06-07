
<?php
//uploading images to the webserver
$conn=mysqli_connect("localhost","consultants","ndunge");
mysqli_select_db($conn,"consultants");
$query="SELECT * FROM events";
$result=mysqli_query($conn,"$query");
$num_rows=mysqli_num_rows($result);

$ndunge=$num_rows+1;
$location="pics";

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
	
	if (file_exists("pics" .$_FILES["file"]["name"]))
	{
		echo $_FILES["file"]["name"]."already exists."; 
		}
	else{
		move_uploaded_file($_FILES["file"]["tmp_name"],"pics/$ndunge.jpg");
		echo "stored in:"."pics".$_FILES["file"]["name"];
		}	
	}




$client=$_POST['client'];
$service=$_POST['service'];
$image="pics/$ndunge.jpg";


//creating queries for inserting information
$query="INSERT INTO events(id,client,service,image)VALUES('','$client','$service','$image')";
$result=mysqli_query($conn,"$query");
header("location:viewevent.php");




?>