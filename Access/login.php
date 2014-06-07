<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];

//condition statement

if($username&&$password)
{
//connection to the database
$conn=mysqli_connect("localhost","root","")or die("could not connect to the server");
mysqli_select_db($conn,"consultants")or die("could not find the db");

$query="SELECT * FROM users WHERE username='$username' ";
$result=mysqli_query($conn,"$query");

$numrows=mysqli_num_rows($result);

//condition for the numrows
if($numrows!=0)
{
	//performing the password check
	while($row=mysqli_fetch_assoc($result))
	{
		$dbusername=$row['username'];
		$dbpassword=$row['password'];
	}
	
	//check to see if they match
	if($username==$dbusername&&$password==$dbpassword)
	{
		header("location:Home.php");
		
	}
	else
	{
		echo"Incorrect password";
	}
}
else
{

	echo"That user doesn't exist";
}
	


}





else{

echo"Please enter username and password";
}






?>