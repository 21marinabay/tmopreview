<?
$section = 0;
$point = 1;
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
	.input {
		border:0px;
		background-color:#d1d1d1;
		width:400px;
		margin-bottom:5px;	
	}
	.textinput {
		border:0px;
		background-color:#d1d1d1;
		width:400px;
		height:200px;
		margin-bottom:5px;	
	}
	
	table#gallery {
		
		 width:850px;	
	}
	table#gallery tr td {
		
		padding-right:50px;	
		vertical-align:middle;
	}
	
</style>
      <? include('system/top_nav.php'); ?>
      <br clear="all" />
      <br clear="all" />
      
      <div id="normal_content">
     <table width="800" id="gallery">
     	<tr>
        	<td><img src="images/gallerypic-Shirt.jpg" /></td>
        	<td valign="middle">
A good fitting shirt is what every man should have to be ready for all occasions. A formal shirt for weddings, job interview, work in the office, or casual shirt for gatherings with friends. With TailorMeOnline, you design and create shirts that are uniquely yours.</td>
         </tr>
     	<tr>
        	<td><img src="images/gallerypic-Cuff.jpg" /></td>
        	<td valign="middle">
For a more formal setting, create shirt with French Cuffs. Which gives you a more professional and stylish look. For the dressier occasions, accessorize with a pair of fancy cuff links for enhancements. Go for regular cuffs with buttons for other casual occasions. Other options includes narrow, single buttons, triple buttons...
</td>
         </tr>
     	<tr>
        	<td><img src="images/gallerypic-Collar.jpg" /></td>
        	<td valign="middle">
Select a collar that suits the shape of your face to balance round or slim face. Choose from a wide selection of full spread, mandarin, business, mini, round…</td>
         </tr>
     	<tr>
        	<td><img src="images/gallerypic-Handkercheif.jpg" /></td>
        	<td valign="middle">
Create a matching handkerchief with your customized shirt. You can even have your initials embroidered on the handkerchief to add a personal touch to it.</td>
         </tr>
      </table>
    </div>
    </div>
    <!-- content --> 
  </div>
</div>
<!-- page -->
<? $note = 0; ?>
<? include('footer.php'); ?>
</body>
</html>