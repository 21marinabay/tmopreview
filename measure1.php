<?
include('system/config.php');

$section = 5;
$point = 1;
$layer = 5;
$script = 'DisplayTieFix.php';
$folder = 'Tie Fix';

$sql = 'select * from fabrics order by item_order asc';
$d = $db->getAll($sql);

foreach($d as $f)
{
	$filename[$f['filename']] = $f['label']; 
}


if ($handle = opendir('design/fabrics')) {
  

    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
			if ($file != "." && $file != "..") {
			 $imgs[] = $file;
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
	<script src="inc/func.js"></script>
	<script>

	$(document).ready(function(){
		showpreview();	
		
		$("#size_measure1").change(function(){
		
			set_value('size_measure1', this.value);
			$('.modalOverlay').remove();
			$("body").append('<div class="modalOverlay">');
			
				$.ajax({
				  url: 'details_measure1.php',
				  cache: false,
				  async: false,
				  success: function(html){
					$('#details_c').html(html);
				}
				});		
			$("#detailsZoom").dialog({
				close: function(event, ui) { $('.modalOverlay').remove(); },
				height:470,
				width:470,
				title:'DETAILS SUMMARY',
				closeText:' ',
				
			});	
		
		});


		$("#details").click(function(){
			$('.modalOverlay').remove();
			$("body").append('<div class="modalOverlay">');
			
				$.ajax({
				  url: 'details_measure1.php',
				  cache: false,
				  async: false,
				  success: function(html){
					$('#details_c').html(html);
				}
				});		
			$("#detailsZoom").dialog({
				close: function(event, ui) { $('.modalOverlay').remove(); },
				height:470,
				width:470,
				title:'DETAILS SUMMARY',
				closeText:' ',
				
			});	
		});
		
		$("#final_order").click(function(){
		
			$('.modalOverlay').remove();
			$("body").append('<div class="modalOverlay">');
			
				$.ajax({
				  url: 'details_measure1.php',
				  data: 'order=order',
				  cache: false,
				  async: false,
				  success: function(html){
						$('#details_c').html(html);
					}
				});		
			$("#detailsZoom").dialog({
				close: function(event, ui) { $('.modalOverlay').remove(); },
				height:910,
				width:790,
				title:'DETAILS SUMMARY',
				closeText:' ',
				
			});	
		});
		
		
		
		
		
	});	
	
	function updateRender(id,icon_num)
	{
			$('#loading').fadeIn('slow');

			$.getJSON('fullview.php?type='+id,{}
			,function(data)
			{
				
				$('#loading').fadeOut('slow');
				
			
				$.each(data, function(index, itemData) {
					var layer = 'lay' + data[index].layer;
				
					if(data[index].path == 'img/Shirt/')
					{	
				
						$('#'+layer).attr('src','img/transparent.png');
					
					} else {
						$('#'+layer).attr('src',data[index].path);
						
					}
					
				});
			});			
		
	}
	
	function showpreview(id)
	{
			
			updateRender(id);
			updateRender_preview(id);
	}



	function updateRender_preview(type)
	{
			$('#loading').fadeIn('slow');

			$.getJSON('system/modules/<?=$script?>?type='+type,{}
			,function(data)
			{
				
				$('#loading').fadeOut('slow');
				
			
				$.each(data, function(index, itemData) {
					var layer = 'layf' + data[index].layer;
			
					if(data[index].path == 'img/<?=$folder?>/')
					{	
				
						$('#'+layer).attr('src','img/transparent.png');
					
					} else {
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
				$("#measurements").attr('src','images/ruler-white.png');
	});
</script>
          <? include('system/top_nav.php'); ?>
          </style>
          <br clear="all" />
          <table>
        <tbody>
              <tr>
            <td><div id="design_output">
                <? include('system/menu.php'); ?>
              </div></td>
            <td><div id="design_output" style="width:380px;padding-right:20px;font-size:13px;"> <br />
                <strong>Introduction</strong> <br />
                <br />
                Please use the tabs on the left to create your measuring profile. Follow the instructions carefully to ensure the best possible fit. We will adjust for movement room according to the fit you select. Please select the unit to be used for your measurements and the fit for your shirt. </div></td>
            <td><div id = "design_window">
                  <div class="toolbox" style="height:970px;">
                  <style>
#buttonWidget
{
	height:38px;
	margin-top:35px;
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
                  <div class="compartment2">
                <div class="title2">TOTAL COST <span style="float:right" id="total"></span></div>
              </div>
                  <div class="compartment" style="margin-top:-20px;font-size:13px;">
                <div class="title"> </div>
                <br />
                <p><strong>SELECT STANDARD MEASUREMENT</strong></p>
                <br />
                I want to order or adjust a standard size<br />
                Choose size ( XS - XXL )<br />
                <br />
                Standard size
                <select name="size_measure1" id="size_measure1">
                      <option value="xs" <?php if($_SESSION['size_measure1'] == 'xs') echo 'selected';?>>XS</option>
                      <option value="s" <?php if($_SESSION['size_measure1'] == 's') echo 'selected';?>>S</option>
                      <option value="m" <?php if($_SESSION['size_measure1'] == 'm') echo 'selected';?>>M</option>
                      <option value="l" <?php if($_SESSION['size_measure1'] == 'l') echo 'selected';?>>L</option>
                      <option value="xl" <?php if($_SESSION['size_measure1'] == 'xl') echo 'selected';?>>XL</option>
                      <option value="xxl" <?php if($_SESSION['size_measure1'] == 'xxl') echo 'selected';?>>XXL</option>
                    </select>
                <BR />
                <BR /> <img src="images/measure1_box.jpg" /> </div>
                  <div id="buttonWidget">
                  <ol>
                  <li style="background-color:white;"><a id="reset" href="#" style="background-color:white;color:black;" onclick="reset();return false;">Reset Sample</a></li>
                  <li><a href="#" id="details" onclick="return false;">Save</a></li>
                  <li><a href="#" id="final_order">Order</a></li>
                  <ol>
                  <div style="clear:both;"></div>
                  </div>
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
<? include('footer.php'); ?>
</body>
</html>