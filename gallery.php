
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>POTENTIAL CONSULTANTS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>	
		<script type="text/javascript" src="lib/jquery.custom.js"></script>
		
		<!-- Pirobox setup and styles -->
<script type="text/javascript" src="lib/pirobox.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 400, //animation speed
			bg_alpha: 0.1, //background opacity
			slideShow : false, // true == slideshow on, false == slideshow off
			slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
			close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox

	});
});u
</script>

<link href="images/style.css" rel="stylesheet" type="text/css" />


<!-- Pirobox setup and styles end-->

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
    	
			
			<div class="navi"></div> <!-- create automatically the point dor the navigation depending on the numbers of items -->		   
			  
                
        
        
        <?php 
$conn=mysqli_connect("localhost","consultants","ndunge")or die("could not access the server");
mysqli_select_db($conn,"consultants")or die("could not access the database");

$query="SELECT * FROM gallery";
$result=mysqli_query($conn,"$query");

 ?>
 <div style="clear: both"></div>
			
		
            
        <div style="height:10px"></div>
        <div class="row">
	
<?php while($row = mysqli_fetch_array( $result )) {?>


            <div class="box_img2">

        <div class="img_height"><a href="<?php echo "$row[image]" ; ?>" class="pirobox_gal1" title="<?php echo "$row[title]"; ?>" ><img src="<?php echo "$row[image]"; ?>" width="300" height="200" /></a><?php echo "$row[title]"; ?></div>
        
        </div>
        
        	
         
 
  
  
   
 
  
  <?php
  
 }
  
		?>
            
            
    
<div style="clear: both;"></div>  
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
                
                <img src="images/fu_i2.png" class=" fu_i" alt="" /><a href="#"><font color="#FFFFFF">Potential Consultants</font> </a>
                
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


