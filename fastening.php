<?
include('system/config.php');

$section = 2;
$point = 2;
$layer = 4;
$script = 'DisplayFastening.php';
$folder = 'Placket';

$sql = 'select * from fastening order by item_order asc';
$d = $db->getAll($sql);

foreach($d as $f)
{
	$filename[$f['filename']] = $f; 
}





if ($handle = opendir('design/fastening')) {
  

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
		showfastening('');
		
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
	


	function updateRender(fastening)
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
						$('#'+layer).attr('src',data[index].path);
						
					}
					
				});
			});			
		
	}
	
	function showfastening(fastening)
	{
			set_value('step6',fastening);
			updateRender(fastening);
			updateRender_preview(fastening);
	}



	function updateRender_preview(fastening)
	{
			$('#loading').fadeIn('slow');

			$.getJSON('system/modules/<?=$script?>',{}
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
				$("#customize").attr('src','images/ruler-white.png');
	});
</script>
         <? include('system/top_nav.php'); ?>
        
          <br clear="all" />
          <table>
        <tbody>
              <tr>
            <td><div id="design_output">
                <? include('system/menu.php'); ?>
                
              </div></td>
            <td><div id="design_output" style="width:400px;"> <img class="lay1" id="lay0" style="z-index:0;position:absolute;"			src="img/transparent.png" /> <img class="lay1" id="lay1" style="z-index:1;position:absolute;"					src="img/transparent.png" /> <img class="lay3" id="lay2" style="z-index:2;position:absolute;"					src="img/transparent.png" /> <img class="lay4" id="lay3" style="z-index:3;position:absolute;"					src="img/transparent.png" /> <img class="lay5" id="lay4" style="z-index:4;position:absolute;"					src="img/transparent.png" /> <img class="lay6" id="lay5" style="z-index:5;position:absolute;"					src="img/transparent.png" /> <img class="lay7" id="lay6" style="z-index:6;position:absolute;"					src="img/transparent.png" /> <img class="lay8" id="lay7" style="z-index:7;position:absolute;"					src="img/transparent.png" /> <img class="lay9" id="lay8" style="z-index:8;position:absolute;"					src="img/transparent.png" /> <img class="lay10" id="lay9" style="z-index:9;position:absolute;"					src="img/transparent.png" /> <img class="lay11" id="lay10" style="z-index:10;position:absolute;"					src="img/transparent.png" /> <img class="lay12" id="lay11" id="lay0" style="z-index:11;position:absolute;"					src="img/transparent.png" /> <img class="lay13" id="lay12" style="z-index:12;position:absolute;"					src="img/transparent.png" /> <img class="lay14" id="lay13" style="z-index:13;position:absolute;"					src="img/transparent.png" /> <img class="lay15" id="lay14" style="z-index:14;position:absolute;"					src="img/transparent.png" /> <img class="lay16" id="lay15" style="z-index:15;position:absolute;"					src="img/transparent.png" /> </div>
                  <div id="loading" style="display:none;" align="center"><small>Please wait while rendering...</small></div></td>
            <td><div id = "design_window">
               
              <div style="height:595px;margin-bottom:100px;" class="toolbox">
		<style>
#buttonWidget
{
	position:relative;
	height:38px;
	margin-top:-5px;
	margin-top:-5px\9;
	padding-bottom:10px;
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
</style>	<div class="compartment2">
			<div class="title2">TOTAL COST <span style="float:right" id="total"></span></div>
		</div>
		<div style="width:360px;height:210px;" id="zoom">
			 <? for($i=0;$i<$layer;$i++): ?>
                  <img class="lay<?=$i?>" id="layf<?=$i?>" style="height:210px;position:absolute;" src="img/transparent.png" />
                  <? endfor; ?>
                  <img class=""style="height:210px;position:absolute;" src="images/frame.png" />
	
		</div>
        	<div class="compartment">
        <div class="title" style="margin-top:-15px;"> </div><br />
		<div class="compartment">
                <? foreach($filename as $file => $s): ?>
                <?
					$id = str_replace('.jpg','',$file);
					$id = str_replace('.png','',$file);
					$id = str_replace('-',' ',$id);

				?>
				
		<div style="text-align:center;width:100px;height:140px;margin-right:10px;float:left;cursor:pointer;" onClick="showfastening('<?=$id?>');" >
		<img class="img1" src="design/fastening/<?=$file?>"><div style=""><?=$s['label']?></div>
		</div>
            <? endforeach; ?>
		</div>
		<div style="clear:both;"></div>	
        
      
		</div>
		<div id="buttonWidget">
                  <ol>
                  <li style="background-color:white;"><a id="reset" href="#" style="background-color:white;color:black;" onclick="reset();return false;">Reset Sample</a></li>
                  <li><a href="#" id="details" onclick="return false;">Details</a></li>
                  <li><a href="measure1.php">Proceed To Order</a></li>
                  <ol>
                  <div style="clear:both;"></div>
</ol></ol></div>	


		
	<div style="display:none;" id="fabricZoom">
		<div class="fabricTitle">
			<div style="float:right">$39.90<br><span style="font-size:11pt;">per shirt</span></div>
			<span id="faTitle">Prive</span>
		</div>
		<div style="height:210px;" id="zoomImage">
		
		</div>
		<div>
			<table>
				<tbody><tr>
					<td>
						<span style="font-weight:bold;">Cosmoplitan</span>
						<br>
						
						100% Egyptian Cotton
					</td>
					<td>
						<span style="font-weight:bold;">Treatment</span>
						<br>
					
						Easy Care
					</td>
				</tr>
				<tr>
					<td>
						<span style="font-weight:bold;">Yarn</span>
						<br>
					
						One-ply 50s
					</td>
					<td>
						<span style="font-weight:bold;">Weaving Information</span>
						<br>
				
						Poplin
					</td>
				</tr>
				<tr>
					<td>
						<span style="font-weight:bold;">fastening Information</span>
						<br>
				
						White
					</td>
					<td>
					</td>
				</tr>
			</tbody></table>
		</div>
	</div>
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
                      <td><span style="font-weight:bold;">fastening Information</span> <br />
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