<html>
<head>
	<title>Expro307||Coorporation</title>

<!--CSS-->   
    <link href="style.css" rel="stylesheet" type="text/css" />

<!--Javascript-->
	<script language = "JavaScript" src="style.js"></script>

</head>
<body>


<!--Main_Container-->
<div id="main_container">

<!--Header-->    	
	<div id="header"></div><!--End Header--> 

<!--Menu--> 
    <div id="layer_menu">
      	<ul id="menu">
       		<li class="pilih"><a href="index.php">Home</a></li>
       		<li><a href="index.php?page=artikel">Article</a></li>
       		<li><a href="index.php?page=gallery">Galley</a></li>
       		<li><a href="index.php?page=gbook">Guest Book</a></li>
       		<li><a href="index.php?page=about">About Me</a></li>
    	</ul>
    </div><!--End Menu-->
	<div id="layer">
		<marquee direction="left"><font face="Old English Text MT" color="yellow" size="5">
		<b>Let's Make Harmony For a Better Future</b></font></marquee>
	</div><!--End Layer-->
	
<!--Container-->        
	<div id="container">     
  
<!--Content-->
    
<?php include("get_menu.php"); ?>
<?php include("layer_kanan.php"); ?> 
 
<!--Clear-->
	<div class="clear"></div><!--End Clear-->

<!--Footer-->    
   	<div id="footer">&copy;Copyright-2013 by <a href="mailto:rahmatsyaparudin@outlook.com">Rahmat Syaparudin</a></div><!--End Footer-->
    
	</div><!--End Container-->    
</div><!--End Main Container-->
	
</body>
</html>