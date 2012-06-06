<?php session_start(); ?>
<?
$section = 1;
$point = 1;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
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
	<script src="inc/func.js"></script>
	<style>
#buttonWidget {
	position:relative;
	height:38px;
	margin-top:23px;
}
#buttonWidget ol {
	float:right;
}
#buttonWidget ol li {
	float:left;
	margin:5px 5px;
	border:1px solid black;
	padding:5px;
	background-color:black;
}
#buttonWidget ol li a {
	color:white;
	text-decoration:none;
	background-color:black;
}
</style>
	<script>

var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
}






	$(document).ready(function(){
		updateRender('','Regular');	
		
		$("#details").click(function(){

			$('.modalOverlay').remove();
			$("body").append('<div class="modalOverlay">');
			
				$.ajax({
		  url: 'details.php',
		  cache: false,
		  async: false,
		  success: function(html){
			$('#details_c').html(html);
		}
		});


			$("#detailsZoom").dialog({
				close: function(event, ui) { $('.modalOverlay').remove(); },
				height:670,
				width:470,
				title:'DETAILS SUMMARY',
				closeText:' ',
				
			});
	
		});
		
	});	
	
	function showshirt(id,fit)
	{
			set_value('step1a',fit);
			set_value('step1b',id);
			updateRender(id,fit);
if(id=='Short')
{
var serverPage = "sessionShort.php";
xmlhttp.open("GET",serverPage);
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

}}

}
        	
	}


$("#short").click(function(){
			
		
			});
$("#long").click(function(){
			
			loadLong();
			});
$("#cuffshort").click(function(){
			
			loadCuffshort();
			});
  
function loadShort()
{
/*
xmlhttp.open("GET",'sessionShort.php');
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {*/


}
function loadLong()
{
$('#long').load('sessionLong.php');
}
function loadCuffshort()
{
$('#cuffshort').load('sessionCuffShort.php');
}
        
	function updateRender(id,fit)
	{
			$('#loading').fadeIn('slow');
			
			$.getJSON('fullview.php',{}
			,function(data)
			{
				
				$('#loading').fadeOut('slow');
				
			
				$.each(data, function(index, itemData) {
					var layer = 'lay' + data[index].layer;
				
					if(data[index].path == 'img/Shirt/')
					{	
				
						$('#'+layer).attr('src','img/transparent.png');
					
					} else {
						(data[index].path);
						$('#'+layer).attr('src',data[index].path);
						
					}
					
				});
			});			
		
	}
	
	
	</script>
	<title>TMO.COM - Default</title>
	</head>

	<body>
<div class="container" id="page">
<div id="header" style="">
      <div style=";padding:0px 0px 5px 10px;width:970px"> <a href="index.php"><img src="images/logo.jpg" border="0"></a>
    <div align="right" style="margin-top:-100px;"> <strong>Welcome to TMO.</strong><br />
          Register  |  Sign In  |  Saved Items <br />
          Shopping cart $0.00 (0) <br />
          <br />
          <br />
          <br />
        </div>
    <br clear="all">
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
                <? include('system/menu.php'); ?>
                <div style="width:144px;"> <br>
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
            <td><div id="design_window">
                <div style="height:544px;" class="toolbox">
                  <div class="compartment2">
                    <div class="title2"><?php $type ;?>TOTAL COST <span style="float:right" id="total"></span></div>
                  </div>
                  <div class="compartment" style="margin-top:-20px;">
                    <div class="title"> </div>
                    <div style="margin-top:5px;">
                      <input type="radio" id="Male" name="Male" value="1" checked="checked">
                      Male </div>
                  </div>
                  <div class="compartment">
                    <div class="title">FIT</div>
                    <div style="text-align:center;width:110px;height:165px;" class="section2" onclick="showshirt('','Slim');"><img title="slim.jpg" class="FITimg1" src="design/shirt_type/fit/slim.jpg" onmouseover="this.src='design/shirt_type/fit/slim-select.jpg'"  onmouseout="this.src='design/shirt_type/fit/slim.jpg'">
                      <div style="">Slim</div>
                    </div>
                    <div style="text-align:center;width:110px;height:165px;" class="section2" onclick="showshirt('','Regular');"><img title="regular.jpg" class="FITimg2" src="design/shirt_type/fit/regular.jpg" onmouseover="this.src='design/shirt_type/fit/regular-select.jpg'"  onmouseout="this.src='design/shirt_type/fit/regular.jpg'">
                      <div style="">Regular</div>
                    </div>
                  </div>
                  <div style="clear:both;"></div>
                  <div class="compartment">
                    <div class="title">Sleeve</div>
                    <div style="text-align:center;width:110px;height:155px;" class="section" onclick="showshirt('Long');" ><img title="long.png" class="Sleeveimg1" src="design/shirt_type/sleeve/long sleeve.jpg" onmouseover="this.src='design/shirt_type/sleeve/long sleeve-select.jpg'" id="long"  onmouseout="this.src='design/shirt_type/sleeve/long sleeve.jpg'" onclick>
                      <div style="">long</div>
                    </div>
                    <div style="text-align:center;width:110px;height:155px;" class="section" onclick="showshirt('Short');" id="short"><img title="short-sleeve.png" class="Sleeveimg4"  src="design/shirt_type/sleeve/short-sleeve.jpg" onmouseover="this.src='design/shirt_type/sleeve/short sleeve-select.jpg'"  onmouseout="this.src='design/shirt_type/sleeve/short-sleeve.jpg'">
                      <div style="">short</div>
                    </div>
                    <div style="text-align:center;width:110px;height:155px;" class="section" onclick="showshirt('Short with normal cuff');"><img title="short-with-normal-cuff.png" class="Sleeveimg3" src="design/shirt_type/sleeve/short cuff.jpg" onmouseover="this.src='design/shirt_type/sleeve/short cuff-select.jpg'" id="cuffshort"  onmouseout="this.src='design/shirt_type/sleeve/short cuff.jpg'">
                      <div style="">short with normal cuff</div>
                    </div>
                  </div>
                  <div style="clear:both;"></div>
                  <br clear="all" />
                  <div id="buttonWidget">
                    <ol>
                      <li style="background-color:white;"><a style="background-color:white;color:black;" href="#" id="reset" onclick="reset();return false;">Reset Sample</a></li>
                      <li><a href="#" id="details" onclick="return false;">Details</a></li>
                      <li><a href="#">Add To Cart</a></li>
                      <ol>
                      </ol>
                    </ol>
                  </div>
                </div>
              </div></td>
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