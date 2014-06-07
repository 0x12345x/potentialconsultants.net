

<?php
//uploading images to the webserver
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"consultants");
$query="SELECT * FROM gallery";
$result=mysqli_query($conn,"$query");
$num_rows=mysqli_num_rows($result);

$kimani=$num_rows+1;

$location="upload";

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
	
	if (file_exists("upload" .$_FILES["file"]["name"]))
	{
		echo $_FILES["file"]["name"]."already exists."; 
		}
	else{
		move_uploaded_file($_FILES["file"]["tmp_name"],"upload/$kimani.jpg");
		echo "stored in:"."upload".$_FILES["file"]["name"];
		}	
	}





$image="upload/$kimani.jpg";
$title=$_POST['title'];


//creating queries for inserting information
$query="INSERT INTO gallery(id,image,title)VALUES('','$image','$title')";
$result=mysqli_query($conn,"$query");
header("location:viewimages.php");



?>