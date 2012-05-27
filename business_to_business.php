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
</style>
      <? include('system/top_nav.php'); ?>
      <br clear="all" />
      <br clear="all" />
      <div id="normal_content">
      BUSINESS TO BUSINESS <br />
      <br />
      As a business client, there is a wide range of products you can find at TailorMeonline that could be customized to bring out the uniqueness of your company. <br />
      <br />
      - Shirts <br />
      - Made-to-measure or standard sizes. <br />
      - Unique designs <br />
      - Embroideries of logos <br />
      <br />
      Please contact us for further information at <a href="mailto:customerservice@tailormeonline.com">customerservice@tailormeonline.com</a></div>
      </div>
    <!-- content --> 
  </div>
</div>
<!-- page -->
<? $note = 0; ?>
<? include('footer.php'); ?>
</body>
</html>