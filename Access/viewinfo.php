<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRATION PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
<div id="container">

<div id="logo" align="left">
   <a href="Home.php"><img src="logo.gif"  alt="logo" width="200"/></a>
    </div>


<div id="body">
<div id="navMenu">
<ul>
<li><a href="Home.php">Home</a></li>


<?php
echo'<li><a href="#">Services</a>';
echo"<ul>";


$conn=mysqli_connect("localhost","root","")or die("could not access the server");
mysqli_select_db($conn,"consultants")or die("could not access the database");

$query="SELECT * FROM services";
$result=mysqli_query($conn,"$query");
while($row = mysqli_fetch_array( $result )) {
 
?> <li><a href="service.php? id=<?php echo "$row[id]" ?>"><?php echo "$row[service]";?></a></li><?php
 }
 echo"</ul>";


echo"</li>";
?>




</li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="about us.php">About Us</a></li>
<li><a href="contacts.php">Contact Us</a></li>


</ul>

</div>
<div id="leftnav">
<div style="margin-left:30px;">
<h3><b>Browse by</b></h3>
<a href="addproduct.php">Add Services</a><br /><br />
<a href="viewproducts.php">View Services</a><br /><br />
<a href="Delete.php">Delete Services</a><br /><br />
<a href="#">Edit Services</a>
</div>
</div>
<div id="rightnav">
</div>

<div id="body">
<div align="center" style="margin-top:30px;">




</div>
</div>



<div id="footer">
</div>
</div>
</body>
</html>