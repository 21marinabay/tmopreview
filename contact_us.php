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
      <span class="title">CONTACT</span> <br clear="all" />
      <br clear="all" />
      <br clear="all" />
      Please see also our <a href="faq.php">FAQs section</a> where most of your questions may be have been answered. <br clear="all" />
      <br clear="all" />
      <table cellpadding="5" cellspacing="5">
        <tr>
          <td valign="top" width="100">First Name*</td>
          <td valign="top"><input type="text" name="first_name" class="input" /></td>
        </tr>
        <tr>
          <td valign="top">Last Name*</td>
          <td valign="top"><input type="text" name="last_name" class="input" /></td>
        </tr>
        <tr>
          <td valign="top">Phone Number</td>
          <td valign="top"><input type="text" name="phone" class="input" /></td>
        </tr>
        <tr>
          <td valign="top">Email*</td>
          <td valign="top"><input type="text" name="email" class="input" /></td>
        </tr>
        <tr>
          <td valign="top">Message*</td>
          <td valign="top"><textarea name="message" class="textinput"></textarea></td>
        </tr>
        <tr>
          <td valign="top" colspan="2"><input type="checkbox" name="signup" value="1" checked="checked" />
            Sign me up for email newletters and receive exclusive offers & fashion tips </td>
        </tr>
      </table>
      <br />
      <small>* Required fields</small> <br />
      <div align="left" style="padding-left:430px;">
        <input type="image" src="images/contact_submit.jpg" />
      </div>
      <br />
      <br />
      <table width="590">
        <tr>
        <tr>
          <td width="550"><a href="http://maps.google.com.sg/maps?q=1557+Keppel+Road+&hl=en&sll=1.359,103.818&sspn=0.53749,0.891953&hnear=1557+Keppel+Rd,+089066&t=m&z=17" target="_blank"><img src="images/map.jpg" /></a></td>
          <td valign="bottom" style="vertical-align:bottom;">TailerMeOnline<br />
            1557 Keppel Road <br />
            Blk A, #03-02<br />
            Singapore 089066<br />
            <br />
            Office: (65) 6592 8588<br />
            Fax: (65) 6221 6168<br />
            Email: <a href="mailto:customerservice@tailermeonline.com">customerservice@tailermeonline.com</a></td>
        </tr>
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