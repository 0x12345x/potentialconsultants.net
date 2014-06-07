
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>POTENTIAL CONSULTANTS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div id="main">
<!-- header begins -->
<div id="header">
	<div id="logo" align="left">
    	<a href="index.html"><img src="logo.gif"  alt="logo" width="200"/></a>
    </div>
     <div id="buttons">
      <a href="index.html" class="but"  title="">Home</a>
      <a href="services.php" class="but" title="">Services</a>
      <a href="gallery.php"  class="but" title="">Gallery</a>
      <a href="about_us.html"  class="but" title="">About Us</a>
      <a href="contact_us.html" class="but" title="">Contact us</a>
    </div>
</div>
<!-- header ends -->

<!-- content begins --> 

 <div id="content">
    	
			<div class="scrollable">
				<div class="items">
					<div class="item">
						<div class="header4"></div>                                    
					</div> <!-- item -->
					<div class="item">
					    <div class="header5"></div>						
					</div> <!-- item -->
					<div class="item">
					    <div class="header6"></div>						
					</div> <!-- item -->			
											
					
				</div> <!-- items -->
			</div> <!-- scrollable -->
			<div class="navi"></div> <!-- create automatically the point dor the navigation depending on the numbers of items -->		   
			  
                <div style="clear: both"></div>
			
		
            
        <div style="height:10px"></div>
        <div class="content_razd">
        	<div  id="left">
            <h1>Our Products and Services</h1>
            
           <?php //connection to the server
$conn=mysqli_connect("localhost","root","")or die("could not access the server");
mysqli_select_db($conn,"consultants")or die("could not access the database");

$query="SELECT * FROM services";
$result=mysqli_query($conn,"$query");
 echo "<table border='0'>";
	
while($row = mysqli_fetch_array( $result )) {
 
  
  echo '<tr><td><b><em><font color="#339900">' .  $row['service']. '</b></em></font></td></tr>';?>
   <tr><td><img src=" <?php echo "$row[image]"; ?>" width="300" height="200"  /></td>
 <?php echo '<td>' . $row['description'] . '</td>';?></tr>
  
  <?php
  
 }
  echo "</table>";
				
				?> 	
                  
                  

                 
                

                
                
               </div> 
		
            
            
            
        	
            <div  id="right">
            <h1>Testimonials on the services provided </h1>
            <?php //connection to the server
$conn=mysqli_connect("localhost","root","")or die("could not access the server");
mysqli_select_db($conn,"consultants")or die("could not access the database");

$query="SELECT * FROM events";
$result=mysqli_query($conn,"$query");
 echo "<table border='0'>";
	
while($row = mysqli_fetch_array( $result )) {?>
 
  <tr><td><img src=" <?php echo "$row[image]"; ?>" width="300" height="200"  /></td>
 <?php echo '<tr><td><font color="#339900">' .  $row['client']. '</b></em></font></td></tr>';
   
  echo '<td>' . $row['service'] . '</td>';?></tr>
  
  <?php
  
 }
  echo "</table>";
				
				?> 	
            <div style="height: 15px;"></div> 
                <img src="photos/july.jpg" class="img_l" width="300" height="200"/><b><font color="#339900">CLIENT:MINISTRY OF TOURISM.</font></b><br />
                <div style="height: 5px;"></div>
				Baseline Surveys on Customer, Employee Satisfaction Survey & Work Environment Survey.
                
                <div style="height: 30px;"></div>
                
                <div style="height: 15px;"></div> 
                <img src="photos/GARISSA 013.jpg" class="img_l" width="300" height="200" /><b><font color="#339900">CLIENT:COUNTY COUNCIL OF MANDERA</font></b><br /><br />
				Employee Training Needs Assessment . 
        	<div style="clear: both;"></div> 
            <div style="height: 25px;"></div>
                
                <div style="height: 15px;"></div> 
                <img src="photos/tana river 037.jpg" class="img_l" width="300" height="200" /><b><font color="#339900">CLIENT:CITY COUNCIL OF MOMBASA. </font></b><br />
				 <br />
				
				Baseline Survey on Customer Satisfaction <br />
		
            
            
            
             
        </div>
            
        <div style="clear: both; height: 12px;"></div>                  
  </div>
        <!-- content ends -->
<div style="height: 7px;"></div> 
        <!-- bottom begin -->
<div class="cont_top"></div>
    <div id="bottom">
    <div class="bottom_h2">	
    <div class="bottom_razd">   
        
            <h2>Share with Others</h2>
            
            <ul>
                
                <img src="images/fu_i2.png" class=" fu_i" alt="" /><a href="http://www.facebook.com/pages/POTENTIAL-CONSULTANTS-CO-LTD/105600846144196"><font color="#FFFFFF">Potential Consultants</font> </a>
                
                <img src="images/fu_i4.png" class=" fu_i" alt="" /><a href="#"><font color="#FFFFFF">@potential consultants</font> </a>
            </ul>
        </div>
        </div>
        </div>
        
            
    
<!-- bottom end --> 
<!-- footer begins -->
            <div id="footer">
          Copyright  2012. Designed by <a href="http://www.metamorphozis.com/" title="Flash Templates">NDUNGE</a><br />
                <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></div>
        <!-- footer ends -->
</div>



</body>
</html>
