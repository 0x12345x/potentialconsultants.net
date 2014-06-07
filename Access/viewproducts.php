<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRATION PAGE</title>
<link rel="stylesheet" type="text/css" href= "style.css" />
<script language="javascript">
function winnie(){
	
		alert("Are you sure you want to delete");
	}
</script>
</head>

<body>
<div id="container">

<div id="logo" align="left">
   <a href="Home.php"><img src="logo.gif"  alt="logo" width="200"/></a>
    </div>


<div id="body">
<div id="navMenu">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="Services.php">Services</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="about_us.html">About Us</a></li>
<li><a href="contact_us.html">Contact Us</a></li>



</ul>

</div>
<div id="leftnav">
<div style="margin-left:30px;">
<h3><b>Browse by</b></h3>
<a href="addproduct.php">Add Services</a><br /><br />
<a href="viewproducts.php">View Services</a><br /><br />
<a href="addevent.php">Add Events</a><br /><br />
<a href="viewevent.php">View Events</a><br /><br />
<a href="uploadimage.php">Add Photo</a>
</div>

</div>

<div id="body">
<div align="center" style="margin-top:30px;">
<?php


//queries to fetch data from the database
$conn=mysqli_connect("localhost","root","")or die("could not access the server");
mysqli_select_db($conn,"consultants")or die("could not access the database");

$query="SELECT * FROM services";
$result=mysqli_query($conn,"$query");

//fetching data from the database
echo"<table border=0 cellpadding=10>";
echo"<tr> <th> Service</th> <th> Picture</th>  </tr>";


while($row=mysqli_fetch_array($result)){
	echo"<tr>";
	echo"<td>".$row['service']."</td>";
	?><td><a href="<?php echo "$row[id]";?>"><img src="<?php echo"$row[image]";?>" width="150" height="80" /></a></td><?php
	
	echo "<td><a href=\"Delete.php?id=".$row['id']."\" onClick='return winnie();'>Delete</a> " ;
	
	echo"</tr>";
	}
	echo"</table>";
	

?>
</div>
</div>



<div id="footer">
</div>
</div>
</body>
</html>