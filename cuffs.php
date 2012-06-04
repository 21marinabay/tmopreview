<?
include('system/config.php');

$section = 1;
$point = 4;
$layer = 5;
$script = 'DisplayCuff.php';
$folder = 'Cuff';

$sql = "select * from cuffs order by item_order asc";
$res = $db->getAll($sql);

foreach($res as $f)
{
	$label[$f['filename']] = $f; 	
}


if ($handle = opendir('design/cuff')) {
  

    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
		if ($file != "." && $file != "..") {
      	 $filename[] = $file;
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
		showcuff();	
		$("div img").click(function(){
			var imageName = $(this).attr('title');
			$("div img").css('border','none');
			$(this).css('border','3px solid #ababab');
			$(this).css('-moz-border-radius','15px');
			$(this).css('border-radius','15px');
			$(this).css('padding','3px');
			
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
	


	function updateRender(cuff)
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
	
	function showcuff(cuff)
	{
	
			$("#stiffness2").attr("checked","checked");
			$("#style3").attr("checked","checked");
			
			styleval	= $("#style3").val();
			stiffnessval= $("#stiffness2").val();
			
			//Change color & enable to original on click of collor			
			$('input:radio').attr('disabled', false);
			$(".cuff_height li").css("color","#555555");
			
			if(cuff == 'neapolitan'){
				$(".listiffness1").css("color","#ccc");
				$(".listyle1").css("color","#ccc");
				$(".listyle2").css("color","#ccc");
				
				$("#stiffness1").attr("disabled","disabled");
				$("#style1").attr("disabled","disabled");
				$("#style2").attr("disabled","disabled");
			}
			if(cuff == 'french cuff'){
				$(".listiffness1").css("color","#ccc");
				$("#stiffness1").attr("disabled","disabled");
			}
			
			set_value('step4_style',styleval);
			set_value('step4_stiffness',stiffnessval);			
						
			set_value('step4',cuff);
			updateRender(cuff);
			updateRender_preview(cuff);
	}


	function setstyle(style)
	{	
		set_value('step4_style',style);
		updateRender();
		updateRender_preview();
	}
	function setstiffness(stiffness)
	{
		set_value('step4_stiffness',stiffness);
	}



	function updateRender_preview(cuff)
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
		$("#design").attr('src','images/ruler-white.png');
	});
</script>
         <? include('system/top_nav.php'); ?>
          <style>
#design_window .title
{
	font-size:10pt;
	text-transform:uppercase;
}

#design_window .toolbox .compartment
{
	margin:10px;
}

#design_window .toolbox .compartment .section
{
	width:110px;
	display:inline;
	float:left;
}

#design_window .toolbox .compartment .section .name
{
	height:40px;
}
#design_window .toolbox .compartment .title
{
	border-bottom:1px dotted black;
}
table
{
	width:963px;
}
table tr td
{
	vertical-align:top;
}

#click .section,#click .section img
{
			width:50px;
			height:50px;
			cursor:pointer;
}
.activeBorder
{
	border:3px solid gray;
}
.section img
{
	cursor:pointer;
}


.cuff_height
{
	height:30px;
}
.cuff_height li
{
	height:30px;
	float:left;
}

#zoom,#zoom img
{
	width:360px;
	height:210px;
}
</style>
          <br clear="all" />
          <table>
        <tbody>
              <tr>
            <td><div id="design_output">
                <? include('system/menu.php'); ?>
                <div style="font-family:AvantGardeITbyBT;width:144px;"> <br>
                 For a more formal setting, create shirt with French Cuffs. Which gives you a more professional and stylish look. 
<br /><br />
For the dressier occasions, accessorize with a pair of fancy cuff links for enhancements. 
<br /><br />
Go for regular cuffs with buttons for other casual occasions. Other options includes narrow, single buttons, triple buttons... </div>
              </div></td>
            <td><div id="design_output" style="width:400px;"> <img class="lay1" id="lay0" style="z-index:0;position:absolute;"			src="img/transparent.png" /> <img class="lay1" id="lay1" style="z-index:1;position:absolute;"					src="img/transparent.png" /> <img class="lay3" id="lay2" style="z-index:2;position:absolute;"					src="img/transparent.png" /> <img class="lay4" id="lay3" style="z-index:3;position:absolute;"					src="img/transparent.png" /> <img class="lay5" id="lay4" style="z-index:4;position:absolute;"					src="img/transparent.png" /> <img class="lay6" id="lay5" style="z-index:5;position:absolute;"					src="img/transparent.png" /> <img class="lay7" id="lay6" style="z-index:6;position:absolute;"					src="img/transparent.png" /> <img class="lay8" id="lay7" style="z-index:7;position:absolute;"					src="img/transparent.png" /> <img class="lay9" id="lay8" style="z-index:8;position:absolute;"					src="img/transparent.png" /> <img class="lay10" id="lay9" style="z-index:9;position:absolute;"					src="img/transparent.png" /> <img class="lay11" id="lay10" style="z-index:10;position:absolute;"					src="img/transparent.png" /> <img class="lay12" id="lay11" id="lay0" style="z-index:11;position:absolute;"					src="img/transparent.png" /> <img class="lay13" id="lay12" style="z-index:12;position:absolute;"					src="img/transparent.png" /> <img class="lay14" id="lay13" style="z-index:13;position:absolute;"					src="img/transparent.png" /> <img class="lay15" id="lay14" style="z-index:14;position:absolute;"					src="img/transparent.png" /> <img class="lay16" id="lay15" style="z-index:15;position:absolute;"					src="img/transparent.png" /> </div>
                  <div id="loading" style="display:none;" align="center"><small>Please wait while rendering...</small></div></td>
            <td><div id = "design_window">
               
                 
              <div style="height:auto;" class="toolbox">
		
		 <div class="compartment2">
			<div class="title2">TOTAL COST <span style="float:right" id="total"></span></div>
		</div>
		<div style="width:360px;height:210px;" id="zoom">
			 <? for($i=0;$i<$layer;$i++): ?>
                  <img class="lay<?=$i?>" id="layf<?=$i?>" style="height:210px;position:absolute;" src="img/transparent.png" />
                  <? endfor; ?>
                  <img class=""style="height:210px;position:absolute;" src="images/frame.png" />
	
		</div>
		<div class="compartment">
		<? foreach($label as $filename => $f): ?>
                <?
					$id = str_replace('.jpg','',$filename);

				?>
				
		<div style="text-align:center;width:95px;margin-right:10px;height:110px;float:left;cursor:pointer;" onClick="showcuff('<?=$id?>');" >
		<img class="img1" src="design/cuff/<?=$filename?>"><div style=""><?=$f['label']?></div>
		</div>
            <? endforeach; ?>
		</div>
		<div style="clear:both;"></div>	
       
       <div class="compartment">
		<div class="title">CUFF STIFFNESS</div>
		<ul class="cuff_height">
			<li class="listiffness1">
				<input type="radio" id="stiffness1" name="stiffness" value="Soft" onclick="setstiffness(this.value);" >Soft
			</li>
			<li class="listiffness2">
				<input type="radio" id="stiffness2" name="stiffness" value="Standard" onclick="setstiffness(this.value);" >Standard
			</li>
			<li class="listiffness3">
				<input type="radio" id="stiffness3" name="stiffness" value="Hard" onclick="setstiffness(this.value);">Hard
			</li>
		</ul>
		</div>
        <div class="compartment">
		<div class="title">CUFF STYLE </div>
		<ul class="cuff_height">
			<li class="listyle1">
				<input type="radio"  name="style" id="style1" value="Beveled" onclick="setstyle('beveled');">Beveled
			</li>
			<li class="listyle2">
				<input type="radio" name="style" id="style2" value="Round" onclick="setstyle('round');">Round
			</li>
			<li class="listyle3">
				<input type="radio"  name="style" id="style3" value="Straight" onclick="setstyle('straight');">Straight
			</li>
			</ul>
		</div>
        <br clear="all" />
        <br clear="all" />
        <div id="buttonWidget">
		<ol>
		<li style="background-color:white;"><a style="background-color:white;color:black;" href="#" id="reset" onclick="reset();return false;">Reset Sample</a></li>
		<li><a href="#" id="details" onclick="return false;">Details</a></li>
		<li><a href="#">Add To Cart</a></li>
	<ol>

</ol></ol></div>
		</div>
		

		
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
						<span style="font-weight:bold;">Color Information</span>
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