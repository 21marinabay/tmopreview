<?php
error_reporting(0);
ini_set('display_errors',0);
define('DSN', 'mysql://sgwebho_tmo1:zhiwei123@localhost/sgwebho_tmo_preview');



session_start();
require_once('DB.php');
// Prepare database class
$db =& DB::connect(DSN);
$db->setFetchMode(DB_FETCHMODE_ASSOC);
if (DB::isError($db)) {
    die($db->getMessage());
}



if ($handle = opendir('design/thread')) {
  

    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
		if ($file != "." && $file != "..") {
      	 $filename[] = $file;
		}
    }

   

    closedir($handle);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="inc/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="inc/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="inc/main.css">
	<link rel="stylesheet" type="text/css" href="inc/form.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="inc/jquery-ui-1.js"></script>
	<script>

	$(document).ready(function(){
		showpocket();	
		
		
		
		
	});	
	
	function showshirt(id)
	{
			
			updateRender(id);
	}

	function updateRender(pocket)
	{
			$('#loading').fadeIn('slow');

			$.getJSON('fullview.php?pocket='+pocket,{}
			,function(data)
			{
				
				$('#loading').fadeOut('slow');
				
			
				$.each(data, function(index, itemData) {
					var layer = 'lay' + data[index].layer;
				
					alert(data[index].path);
					if(data[index].path == 'img/Shirt/')
					{	
				
						$('#'+layer).attr('src','img/transparent.png');
					
					} else {
						$('#'+layer).attr('src',data[index].path);
						
					}
					
				});
			});			
		
	}
	
	function showpocket(pocket)
	{
			
			updateRender(pocket);
	}


	
	</script>
	<title>TMO.COM - Default</title>
	</head>

	<body>
<div class="container" id="page">
  <div id="header" style="">
    <div style=";padding:0px 0px 5px 10px;width:970px"> <a href="index.php"><img src="images/logo.jpg" border="0"></a>
      <div align="right" style="margin-top:-100px;">
      <strong>Welcome to TMO.</strong><br />
      Register  |  Sign In  |  Saved Items
      <br />
Shopping cart $0.00 (0)
<br /><br /><br /><br />
    </div><br clear="all">
    <div style="padding-top:5px;margin-bottom:2px;border-top:1px solid black">
      <ul class="navlist" style="text-transform:uppercase;">
        <li><a href="#"></a><a href="index.php">Home</a></li>
        <li><a href="shirt_type.php">Design a shirt</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="#">GIFTS</a></li>

        
        <li><a href="business_to_business.php">Business to Business</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <!-- header -->
  
      
      <div class="container">
    <div id="content">
          <style>
	ul#ruler li
	{
		height:65px;
	}
	ul#ruler li
	{
		width:195px;
		height:65px;
		float:left;
		overflow:hidden;
	}
</style>
          <script>
	$(document).ready(function(){
		$("#design").attr('src','images/ruler-white.png');
	});
</script>
         <? include('system/top_nav.php'); ?>
          <br clear="all" />
          <table>
        <tbody>
              <tr>
            <td><div id="design_output">
                <style>
ul#menu li,ul#menu li a
{
	height:20px;
	width:120px;
	background-image:url('images/menu-tab1.png');
	background-repeat:no-repeat;
	color:white;
	padding:5px 10px;
	text-transform:uppercase;
}

ul#menu li a
{
	font-size:11pt;
	text-decoration:none;
	color:white;
	font-family:CharcoalCY;
}

ul#menu li.active
{
	width:166px;
	margin:2px 0px;
}

ul.measurements li,ul.measurements li a
{
	height:10px;
	width:120px;
	background-image:url('images/big-tab.png');
	color:white;
	padding:5px 10px;
	font-size:16pt;
	text-transform:uppercase;
}
</style>
               <? include('system/menu.php'); ?>
                <div style="font-family:AvantGardeITbyBT;width:144px;"> <br>
                  A good fitting shirt is what every
                  man should have to be ready for all occasions. A formal shirt for weddings, job interview, work in
                  the office, or casual shirt for 
                  gatherings with friends. <br>
                  <br>
                  With TailorMeOnline, you design 
                  and create shirts that are uniquely yours. </div>
              </div></td>
            <td><div id="design_output" style="width:400px;"> <img class="lay1" id="lay0" style="z-index:0;position:absolute;;"			src="img/transparent.png" /> <img class="lay1" id="lay1" style="z-index:1;position:absolute;;"					src="img/transparent.png" /> <img class="lay3" id="lay2" style="z-index:2;position:absolute;;"					src="img/transparent.png" /> <img class="lay4" id="lay3" style="z-index:3;position:absolute;;"					src="img/transparent.png" /> <img class="lay5" id="lay4" style="z-index:4;position:absolute;;"					src="img/transparent.png" /> <img class="lay6" id="lay5" style="z-index:5;position:absolute;;"					src="img/transparent.png" /> <img class="lay7" id="lay6" style="z-index:6;position:absolute;;"					src="img/transparent.png" /> <img class="lay8" id="lay7" style="z-index:7;position:absolute;;"					src="img/transparent.png" /> <img class="lay9" id="lay8" style="z-index:8;position:absolute;;"					src="img/transparent.png" /> <img class="lay10" id="lay9" style="z-index:9;position:absolute;;"					src="img/transparent.png" /> <img class="lay11" id="lay10" style="z-index:10;position:absolute;;"					src="img/transparent.png" /> <img class="lay12" id="lay11" id="lay0" style="z-index:11;position:absolute;;"					src="img/transparent.png" /> <img class="lay13" id="lay12" style="z-index:12;position:absolute;;"					src="img/transparent.png" /> <img class="lay14" id="lay13" style="z-index:13;position:absolute;;"					src="img/transparent.png" /> <img class="lay15" id="lay14" style="z-index:14;position:absolute;;"					src="img/transparent.png" /> <img class="lay16" id="lay15" style="z-index:15;position:absolute;;"					src="img/transparent.png" /> </div>
                  <div id="loading" style="display:none;" align="center"><small>Please wait while rendering...</small></div></td>
            <td><div id = "design_window">
                  <style>
#buttonWidget
{
	top:764px;
}
.modalOverlay {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    background-color: rgba(0,0,0,0.3); /* black semi-transparent */
}

.ui-dialog,.ui-widget,.ui-widget-content
{
	background-color:white;
	padding:10px;
}
.ui-dialog table
{
	width:400px;
	height:150px;
}



.ui-dialog-titlebar-close
{
	float:right;
}

.ui-dialog-title
{
	font-size:11pt;
	font-family:bold;
	color:#333333;
	font-family:CharcoalCY;
}

.fabricTitle
{
	font-size:15pt;
}

ul.collar_height
{
	font-size:15px;
	font-family:AvantGardeITCbyBT Book;
}

</style>
                  <style>
		.section .name
		{
			text-transform:capitalize;
			font-size:11pt;
			font-family:AvantGardeITCbyBT Book;
			font-weight:normal;	
		}
		
		.section img
		{
			margin-top:20px;
		}
		
		.compartment .title
		{
			font-size:13px;
			font-family:CharcoalCY;
			font-weight:bold;	
			height:20px;
		}
	</style>
                  <style>

.modalOverlay {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    background-color: rgba(0,0,0,0.3); /* black semi-transparent */
}

.ui-dialog,.ui-widget,.ui-widget-content
{
	background-color:white;
	padding:10px;
}
.ui-dialog table
{
	width:400px;
	height:150px;
}



.ui-dialog-titlebar-close
{
	float:right;
}

.ui-dialog-title
{
	font-size:11pt;
	font-family:bold;
	color:#333333;
	font-family:CharcoalCY;
}

.fabricTitle
{
	font-size:15pt;
}


</style>
                  <div class="toolbox" style="height:790px;">
                  <style>
#buttonWidget
{
	position:relative;
	height:38px;
	margin-bottom:-38px;
}
#buttonWidget ol
{
float:right;
}
#buttonWidget ol li
{
	float:left;
	margin:5px 5px;
	border:1px solid black;
	padding:5px;
	background-color:black;
}
#buttonWidget ol li a
{
	color:white;
	text-decoration:none;
	background-color:black;
}
</style>
                  <div id="buttonWidget">
                  <ol>
                  <li style="background-color:white;"><a id="reset" href="#" style="background-color:white;color:black;">Reset Sample</a></li>
                  <li><a href="#" id="details" onclick="return false;">Details</a></li>
                  <li><a href="measure1.php">Proceed To Order</a></li>
                  <ol>
                  <div style="clear:both;"></div>
                  </div>
                  <div class="compartment">
              <div class="title">
                
                     <table width="250" style="width:360px;">
                     	<tr>
                        	<td><strong>TOTAL COST</strong></td>
                        	<td><strong>$100.00</strong></td>
                         </tr>
                     </table>
                 
                    </div>
              </div>
                  <div id="zoom" style="width:360px;height:241px;">
				  <img class="lay1" id="layf0" style="height:210px;position:absolute;" src="img/transparent.png" /> 
					<img class="lay1" id="layf1" style="height:210px;position:absolute;" src="img/transparent.png" />
					<img class="lay1" id="layf2" style="height:210px;position:absolute;" src="img/transparent.png" />
				  </div>
                  <div class="fabric">
               
                <div class="compartment"><div class="title"></div>
				<div style="text-align:center;width:160px;height:240px;" class="section" onClick="showpocket('both');" >
				<img title="both.png" class="img1" src="design/pocket/both.png">
				<div style="">both</div></div><div style="text-align:center;width:160px;height:240px;" class="section" onClick="showpocket('left pocket');"><img title="left-pocket.png" class="img2" src="design/pocket/left-pocket.png" style="border: medium none;">
				<div style="">left pocket</div></div><div style="text-align:center;width:160px;height:240px;" class="section" onClick="showpocket('no pocket');">
				<img title="no-pocket.png" class="img3" src="design/pocket/no-pocket.png" style="border: medium none;">
				<div style="">no pocket</div></div>
              </div>
                  <div id="fabricZoom" style="display:none;">
                  <div class="fabricTitle">
                <div style="float:right">$39.90<br />
                      <span style="font-size:11pt;">per shirt</span></div>
                <span id="faTitle">Prive</span> </div>
                  <div id="zoomImage" style="height:210px;"> </div>
                  <div>
                  <table>
                <tr>
                      <td><span style="font-weight:bold;">Cosmoplitan</span> <br />
                    100% Egyptian Cotton </td>
                      <td><span style="font-weight:bold;">Treatment</span> <br />
                    Easy Care </td>
                    </tr>
                <tr>
                      <td><span style="font-weight:bold;">Yarn</span> <br />
                    One-ply 50s </td>
                      <td><span style="font-weight:bold;">Weaving Information</span> <br />
                    Poplin </td>
                    </tr>
                <tr>
                      <td><span style="font-weight:bold;">Color Information</span> <br />
                    White </td>
                      <td></td>
                    </tr>
              </table></td>
          </tr>
            </tbody>
      </table>
        </div>
    <!-- content --> 
  </div>
    </div>
<!-- page -->
 <? include('footer.php'); ?>
</body>
</html>