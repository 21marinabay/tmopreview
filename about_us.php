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
	
	p {
		margin-bottom:10px;	
	}
	
</style>
      <? include('system/top_nav.php'); ?>
      <br clear="all" />
      <br clear="all" />
      <div id="normal_content">
      
        <p><span class="title">About Us</span></p>
        <p>TailorMeOnline was founded by a team of highly aspiring people who consider made-to-measure garments to be an essential item in everybody's wardrobe. TailorMeOnline lets people create their own shirt designs and measurement profiles, so that they can get exactly what they want in a shirt. </p><br />
        <p>Our process is simple: You design it, We tailor it.</p><br />
        <p>Our shirts are completely custom made  and each shirt goes through rigorous quality control TailorMeOnline guarantees that customers will be provided with garments of the finest quality.<br />
        </p><br />
        <p><span class="title"> Our Modus Operandi</span></p>
        <p>Quality<br />
          We offer high thread count fabrics of the highest quality, coupled with excellent workmanship as each shirt is crafted by our master tailor.</p>
        <p>Fit<br />
          We promote made-to-measure shirts that are customized individually. Say goodbye to poor fitting and unrefined shirts bought off the shelves.</p>
        <p>Design<br />
          Design it your way. With our comprehensive range of options, you can be your own designer and create a customised look that is truly unique and yours.</p>
        <p>Convenience<br />
          Our intuitive measurement process guides users in specifying measurements for a custom tailored fit that can be done from the comfort of your own home, no tailor required. </p>
        <p>Price<br />
          We provide high quality custom-made shirts at a fair price. <br />
        </p><br />
        <p>At TailorMeOnline, we are dedicated to providing each customer with the luxury of donning a custom-made shirt of the highest quality. With vast experience and knowledge in providing fine quality made-to-measure shirts, this is TailorMeOnline's answer to the poor fits and unrefined quality that you get from shirts bought off the shelves. We believe that shirts must be able to bring out the unique characteristics and portray the personal style of each individual. Wearing a well-fitting shirt of the finest quality will instantly provide a boost to your self-confidence! With our virtual design tool, you can design a shirt with your own unique combination of collar, cuff, buttons and fit options, which fits you according to your personal measurements.</p>
        <p>The high grade fabrics used for our shirts are sourced directly from amongst the biggest importers and dealers in the industry.Each shirt is meticulously crafted and undergoes high standards of quality inspection before it is shipped to our customers.<br />
        </p>
        <p><br />
        </p>
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