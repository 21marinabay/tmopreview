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
	
	table#shipping_price {
		width:300px;
		margin-left:-20px;
	}
	table#shipping_price tr td {
		width:100px;
		text-align:center;	
		padding-right:20px;
	}
</style>
      <? include('system/top_nav.php'); ?>
      <br clear="all" />
      <br clear="all" />
      <div id="normal_content">
        <p><span class="title">Delivery &amp; Shipping Info</span></p> <br />
        <p>We ship to any country in the world and endeavour to ensure that our customers receive their orders as quickly as possible. Our custom made shirts will typically be delivered within 15-20 business days. However, delivery times cannot be guaranteed as circumstances beyond our control may cause delays, for instance, custom procedures, shipment delays and other force majeure events. All orders are sent directly to the customer by our courier partners including DHL Express.<br />
        </p> <br />
        <p>Our shipping rates are as follows:</p>
        <br /> <br />
        <table  cellpadding="3" cellspacing="4" id="shipping_price">
        <tr>
            	<td width="10">Number of shirts</td>
            	<td width="10">Delivery charge (US$)</td>
            </tr>
        	<tr>
            	<td width="10">1</td>
            	<td width="10">9.99</td>
            </tr>
        	<tr>
            	<td>2</td>
            	<td>14.99</td>
            </tr>
        	<tr>
            	<td>3</td>
            	<td>18.99</td>
            </tr>
        	<tr>
            	<td>4</td>
            	<td>22.99</td>
            </tr>
        	<tr>
            	<td>5</td>
            	<td>26.99</td>
            </tr>
        	<tr>
            	<td>6</td>
            	<td>33.99</td>
            </tr>
        	<tr>
            	<td>7</td>
            	<td>34.99</td>
            </tr>
        	<tr>
            	<td>8</td>
            	<td>39.99</td>
            </tr>
        	<tr>
            	<td>9</td>
            	<td>43.99</td>
            </tr>
        	<tr>
            	<td>10</td>
            	<td>47.99</td>
            </tr>
        	<tr>
            	<td>11</td>
            	<td>50.99</td>
            </tr>
        	<tr>
            	<td>12</td>
            	<td>53.99</td>
            </tr>
        	<tr>
            	<td>13</td>
            	<td>56.99</td>
            </tr>
        	<tr>
            	<td>14</td>
            	<td>59.99</td>
            </tr>
        	<tr>
            	<td>15</td>
            	<td>62.99</td>
            </tr>
          </table>
        <p></p>
      </div>
    <!-- content --> 
  </div>
</div>
<!-- page -->
<? $note = 0; ?>
<? include('footer.php'); ?>
</body>
</html>