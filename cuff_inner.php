<?
include('system/config.php');

$section = 3;
$point = 4;
$layer = 9;
$script = 'DisplayCuff.php';
$folder = 'Fabric';

$sql1 = 'select * from fabricsnew order by DisplaySequence asc';
$e = $db->getAll($sql1);

foreach($e as $f)
{
	$filename[$f['Filename']] = $f; 
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
		showfabric('');	
		
		$(".img1").click(function(){
		
			var fabhtml = $(this).next().html();
			set_value('step14_value',fabhtml);
			
		});
		
		
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
	
	function showshirt(id)
	{
			
			updateRender(id);
	}

	function updateRender(id,icon_num)
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
	
	function showfabric(id,zoomin)
	{
			
			set_value('step14',id);
			updateRender('',id,zoomin);
			updateRender_preview(id);
	}



	function updateRender_preview(icon_num)
	{
			$('#loading').fadeIn('slow');
		
			<?php 
			if ( strtolower($_SESSION['step1b']) == 'short with normal cuff' )
			{
				$script = 'DisplayCuffShort.php';
			}
			?>

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
				$("#contrast").attr('src','images/ruler-white.png');
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
            <td><div id="design_output" style="width:400px;"> <img class="lay1" id="lay0" style="z-index:0;position:absolute;;"			src="img/transparent.png" /> <img class="lay1" id="lay1" style="z-index:1;position:absolute;;"					src="img/transparent.png" /> <img class="lay3" id="lay2" style="z-index:2;position:absolute;;"					src="img/transparent.png" /> <img class="lay4" id="lay3" style="z-index:3;position:absolute;;"					src="img/transparent.png" /> <img class="lay5" id="lay4" style="z-index:4;position:absolute;;"					src="img/transparent.png" /> <img class="lay6" id="lay5" style="z-index:5;position:absolute;;"					src="img/transparent.png" /> <img class="lay7" id="lay6" style="z-index:6;position:absolute;;"					src="img/transparent.png" /> <img class="lay8" id="lay7" style="z-index:7;position:absolute;;"					src="img/transparent.png" /> <img class="lay9" id="lay8" style="z-index:8;position:absolute;;"					src="img/transparent.png" /> <img class="lay10" id="lay9" style="z-index:9;position:absolute;;"					src="img/transparent.png" /> <img class="lay11" id="lay10" style="z-index:10;position:absolute;;"					src="img/transparent.png" /> <img class="lay12" id="lay11" id="lay0" style="z-index:11;position:absolute;;"					src="img/transparent.png" /> <img class="lay13" id="lay12" style="z-index:12;position:absolute;;"					src="img/transparent.png" /> <img class="lay14" id="lay13" style="z-index:13;position:absolute;;"					src="img/transparent.png" /> <img class="lay15" id="lay14" style="z-index:14;position:absolute;;"					src="img/transparent.png" /> <img class="lay16" id="lay15" style="z-index:15;position:absolute;;"					src="img/transparent.png" /> </div>
                  <div id="loading" style="display:none;" align="center"><small>Please wait while rendering...</small></div></td>
            <td><div id = "design_window">
                 
                 
                  <div class="toolbox" style="height:690px;">
                  <style>
#buttonWidget
{
	position:relative;
	height:38px;
	margin-bottom:-38px;
	margin-top:310px;
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
                  <div id="zoom" style="width:360px;height:210px;">
                  
                   <? for($i=0;$i<$layer;$i++): ?>
                  <img class="lay<?=$i?>" id="layf<?=$i?>" style="height:210px;position:absolute;" src="img/transparent.png" />
                  <? endfor; ?>
                  <img class=""style="height:210px;position:absolute;" src="images/frame.png" />
                  
                   </div>
                  <div class="fabric">
                
                <script type="text/javascript" src="js/jcycle.js"></script> 
                <script type="text/javascript">
				$(document).ready(function(){
					$("#previ").hide();
					$(".slideshow").cycle(
						{
							"slideExpr":".slide",
							timeout: 0, 
							pager:  '#nav', 
							next:'#nxt',
							prev:'#previ',
							fx:'none',
							
							onPrevNextEvent:function(isNext, zeroBasedSlideIndex, slideElement)
							{	
								$("#startNum").html(zeroBasedSlideIndex + 1);
								if(zeroBasedSlideIndex == 12)
								{
									$("#nxt").hide();
								}
								else
								{
									$("#nxt").show();
								}
								if(zeroBasedSlideIndex == 0)
								{
									$("#previ").hide();
								}	
								else
								{
									$("#previ").show();
								}								
							}
						});
				});
			 </script>
                <div class="slideshow">
                
                <? $count = 1; ?>
                <? $all = 'select * from fabricsnew where 1';
				$query1 = mysql_query($all);
				while($row=mysql_fetch_array($query1))
				{	
				?>	
                <?
				$id = $row['Filename'];
					$newId = substr($id,0,6);
                                        $restofId = substr($id,22,6);
                                        $newWord = $newId.$restofId.'jpg';
                                        $newFabric = substr($id,23,4);
				?>
                <? if($count % 12 == 1): ?>
                      <div class ="slide">
                <? endif; ?>
                <div class="imageBox"><img  style="" src="design/fabrics/<? print $newWord;?>" class="img1"  title="<? print $row['Label'];?>" onClick="showfabric('<? print $newFabric; ?>');return false;" />
                          <div id="imageTitle2" style="margin-top:15px;"><? print $row['Label'];?><br />
                          $<? print $row['Cuff Contrast Cost']; ?>
                          </div>
                          </div>
                          
                      <? $count ++; ?>
                <? if($count % 12 == 1): ?>
                      </div>
                <? endif; ?>
                
                <? } ?>
                
                    
                </div>
                    
              </div>
                <div id="buttonWidget">
                  <div style="float:left;padding-top:12px;"> <img src='images/pager-left.png' id='previ' style='cursor:pointer;' /> PAGE <span id="startNum">1</span>/<span id="pageNum">13</span> <img src='images/pager-right.png'id='nxt' ' style='cursor:pointer;' /> </div>
                  <ol>
                  <li style="background-color:white;"><a id="reset" href="#" style="background-color:white;color:black;" onclick="reset();return false;">Reset Sample</a></li>
                  <li><a href="#" id="details" onclick="return false;">Details</a></li>
                  <li><a href="measure1.php">Proceed To Order</a></li>
                  <ol>
                  <div style="clear:both;"></div>
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