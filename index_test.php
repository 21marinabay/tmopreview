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
<style>
div.dotted {
	border-top:1px dotted black;
	margin-top:10px;
}
#content_home {
	padding:20px;
	font-family:AvantGardeITbyBT;
}
h3 {
	font-size:17px;
	font-family:AvantGardeITbyBT;
	margin-bottom:10px;
}
.float_left {
	float:left;
}
</style>
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
    <div id="content"> <img src="images/home/banner.jpg" /> <br />
      <div class="dotted"></div>
      <div id="content_home">
        <h3>SPRING COLLECTION</h3>
        <div style="margin-left:-65px;">
        <div class="float_left" style="width:36px;"> 
        	<img src="images/home/left_arrow.jpg" />
        </div>
        <div class="float_left" style="width:200px;margin-left:0px;"> <img src="images/home/shirt1.jpg" style="z-index:-1" /><br />
          <img src="images/home/plus.jpg" style="z-index:999;margin-top:-27px;margin-bottom:10px;margin-left:184px;"  /><br />
          <strong style="font-size:15px;">Busso, blue</strong><br />
          Normal fit<br />
          Long-sleeve
          <div style="font-size:18px;padding-top:5px;margin-left:0px;"> $159.90</div>
          <a href="#"><img src="images/home/add_to_cart.jpg" style="float:left;" /></a> <a href="#"><img src="images/home/detail_btn.jpg" style="float:left;" /></a> </div>
        <div class="float_left" style="width:200px;"> <img src="images/home/shirt1.jpg" style="z-index:-1" /><br />
          <img src="images/home/plus.jpg" style="z-index:999;margin-top:-27px;margin-bottom:10px;margin-left:184px;"  /><br />
          <strong style="font-size:15px;">Busso, blue</strong><br />
          Normal fit<br />
          Long-sleeve
          <div style="font-size:18px;padding-top:5px;margin-left:0px;"> $159.90</div>
          <a href="#"><img src="images/home/add_to_cart.jpg" style="float:left;" /></a> <a href="#"><img src="images/home/detail_btn.jpg" style="float:left;" /></a> </div>
        <div class="float_left" style="width:200px;"> <img src="images/home/shirt1.jpg" style="z-index:-1" /><br />
          <img src="images/home/plus.jpg" style="z-index:999;margin-top:-27px;margin-bottom:10px;margin-left:184px;"  /><br />
          <strong style="font-size:15px;">Busso, blue</strong><br />
          Normal fit<br />
          Long-sleeve
          <div style="font-size:18px;padding-top:5px;margin-left:0px;"> $159.90</div>
          <a href="#"><img src="images/home/add_to_cart.jpg" style="float:left;" /></a> <a href="#"><img src="images/home/detail_btn.jpg" style="float:left;" /></a> </div>
        <div class="float_left" style="width:182px;"> <img src="images/home/shirt1.jpg" style="z-index:-1" /><br />
          <img src="images/home/plus.jpg" style="z-index:999;margin-top:-27px;margin-bottom:10px;margin-left:184px;"  /><br />
          <strong style="font-size:15px;">Busso, blue</strong><br />
          Normal fit<br />
          Long-sleeve
          <div style="font-size:18px;padding-top:5px;margin-left:0px;"> $159.90</div>
          <a href="#"><img src="images/home/add_to_cart.jpg" style="float:left;" /></a> <a href="#"><img src="images/home/detail_btn.jpg" style="float:left;" /></a> </div>
        
        <div class="float_left" style="width:36px;"> 
        	<img src="images/home/right_arrow.jpg" />
        </div>
        </div>
        <br clear="all" />
      </div>
      <div class="dotted"></div>
      <div id="content_home">
        <table>
          <tr>
            <td><img src="images/home/h1.jpg" /></td>
            <td><img src="images/home/h2.jpg" /></td>
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