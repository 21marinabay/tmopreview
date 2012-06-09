<?
include('system/config.php');

$section = 6;
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
		
		function generateHTML(){
			
			if($("#size1").attr("checked") == "checked")
				size = "cm";
			if($("#size2").attr("checked") == "checked")
				size = "inches";
			
			html = '<style>table.de tr td { padding:2px; }</style> <div align="center"><br />';
			html += '<table cellpadding="2" cellspacing="2" class="de" style="width:280px;text-align:center">';
			html += '<tr><td><strong>Measurement</strong></td><td>Measurement from best fitting shirt</td></tr>';
			html += '<tr><td><strong>SIZE</strong></td><td>'+size+'</td></tr>';
			html += '<tr><td><strong>Collar </strong></td><td>'+$("#f1").val()+'</td></tr>';
			html += '<tr><td><strong>Chest </strong></td><td>'+$("#f2").val()+'</td></tr>';
			html += '<tr><td><strong>Waist </strong></td><td>'+$("#f3").val()+'</td></tr>';
			html += '<tr><td><strong>Length to Waist </strong></td><td>'+$("#f4").val()+'</td></tr>';
			html += '<tr><td><strong>Bottom width </strong></td><td>'+$("#f5").val()+'</td></tr>';
			html += '<tr><td><strong>Shirt length </strong></td><td>'+$("#f6").val()+'</td></tr>';
			html += '<tr><td><strong>Shoulder width </strong></td><td>'+$("#f7").val()+'</td></tr>';
			html += '<tr><td><strong>Long sleeve upper length </strong></td><td>'+$("#f8").val()+'</td></tr>';
			html += '<tr><td><strong>Long sleeve lower length </strong></td><td>'+$("#f9").val()+'</td></tr>';
			html += '<tr><td><strong>Short sleeve upper length </strong></td><td>'+$("#f10").val()+'</td></tr>';
			html += '<tr><td><strong>Short sleeve lower length </strong></td><td>'+$("#f11").val()+'</td></tr>';
			html += '<tr><td><strong>Cuff </strong></td><td>'+$("#f12").val()+'</td></tr>';
			html += '<tr><td><strong>Sleeve width </strong></td><td>'+$("#f13").val()+'</td></tr>';
			html += '<tr><td><strong>Short sleeve opening </strong></td><td>'+$("#f14").val()+'</td></tr>';
			
			str = 'size_measure2='+size+'&f1='+$("#f1").val()+'&f2='+$("#f2").val()+'&f3='+$("#f3").val()+'&f4='+$("#f4").val()+'&f5='+$("#f5").val()+'&';
			str += 'f6='+$("#f6").val()+'&f7='+$("#f7").val()+'&f8='+$("#f8").val()+'&f9='+$("#f9").val()+'&f10='+$("#f10").val()+'&f11='+$("#f11").val()+'&';
			str += 'f12='+$("#f12").val()+'&f13='+$("#f13").val()+'&f14='+$("#f14").val();
			
			
			$.ajax({
				url: 'system/modules/session.php?key=measure2',
				data: str,
				cache: false,
				async: false,
				success: function(html){
				
				}
			});
						
			return html;

		}
		
		//DETAILS BUTTON CLICK
		$("#details").click(function(){

			$('.modalOverlay').remove();
			$("body").append('<div class="modalOverlay">');
			
			htmlStr = generateHTML();	
			htmlStr += '</table></div>';
			
			$('#details_c').html(htmlStr);

			$("#detailsZoom").dialog({
				close: function(event, ui) { $('.modalOverlay').remove(); },
				height:470,
				width:470,
				title:'DETAILS SUMMARY',
				closeText:' ',				
			});	
		});		
		
		//ORDER CLICK
		$("#final_order").click(function(){

			$('.modalOverlay').remove();
			$("body").append('<div class="modalOverlay">');
			
			htmlStr = generateHTML();	

			htmlStr += '<tr><td>Total Cost : $<?php echo $_SESSION['costTotal']?></td>';
			htmlStr += '<td><div id="buttonWidget"><ol><li><a href="javascript:void(0);" id="shipping">CONFIRM</a></li></ol></div></td></tr>';
			htmlStr += '</table></div>';
			
			
			//TODO
			$.ajax({
				url: 'details_measure2.php',
				cache: false,
				async: false,
				success: function(returnhtml){
					allData = '<table><tr><td>'+returnhtml+'</td><td>'+htmlStr+'</td></table>';
					$('#details_c').html(allData);
				}
			});
		
			

			$("#detailsZoom").dialog({
				close: function(event, ui) { $('.modalOverlay').remove(); },
				height:910,
				width:720,
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
		
		$(".gray2").focus(function(){
			id = this.id;
			var val = id.match(/\d+/g);
			show_div(val);
		});
		
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
        <td><div id="design_output" style="width:380px;padding-right:20px;font-size:15px;">
	<br />
            <div id="d1"> <img src="images/measure your shirt/collar.jpg" /> <br />
              <div align="center"> <strong>Collar Measurements Instructions</strong><br />
                <Br />
                The collar measurement is taken from the outer
                edge of the button hole to the center of the button. </div>
            </div>
          
          <div id="d2" style="display:none;"> <img src="images/measure your shirt/chest.jpg" /> <br />
              <div align="center"> <strong>Chest Measurements Instructions</strong><br />
                <Br />


The chest measurement is taken across the shirt at the
bottom of the sleeve seams. Note that this is
NOT a circumference measurement.  </div>
            </div>
          
          
          <div id="d3" style="display:none;"> <img src="images/measure your shirt/waist.jpg" /> <br />
              <div align="center"> <strong>Waist Measurements Instructions</strong><br />
                <Br />
                The waist measurement is taken across the shirt at
the narrowest part of the waist. Note that this is
NOT a circumference measurement.  </div>
            </div>
          <div id="d4" style="display:none;"> <img src="images/measure your shirt/length to waist.jpg" /> <br />
              <div align="center"> <strong>Length to Waist<br />
 Measurements Instructions</strong><br />
                <Br />
                

The length to waist measurement is taken from a
point straight out from the center of the neck opening
down to where you took the waist measurement. 

                </div>
            </div>
          
          <div id="d5" style="display:none;"> <img src="images/measure your shirt/bottom_width.jpg" /> <br />
              <div align="center"> <strong>Bottom Width<br />
 Measurements Instructions</strong><br />
                <Br />
                

The bottom width measurement is taken across the
shirt at the end of the side seams. Note that this
is NOT a circumference measurement. 
</div>
            </div>
          
          <div id="d6" style="display:none;"> <img src="images/measure your shirt/shirt_length.jpg" /> <br />
              <div align="center"> <strong> Shirt Length<br />
 Measurements Instructions</strong><br />
                <Br />              
               

The shirt length measurement is taken from a point
straight out from the center of the neck opening
down to where your shirt ends. 
 </div>
            </div>
          
          <div id="d7" style="display:none;"> <img src="images/measure your shirt/shoulder width.jpg" /> <br />
              <div align="center"> <strong>Shoulder Width<br />
 Measurements Instructions</strong><br />
                <Br />
                

The shoulder width measurement is taken at the
top of the shirt from one sleeve seam to the other. 
</div>
            </div>
          
          <div id="d8" style="display:none;"> <img src="images/measure your shirt/long sleeve upper length.jpg" /> <br />
              <div align="center"> <strong>Long Sleeve Upper Length<br />
 Measurements Instructions</strong><br />
                <Br />             
                

The upper length measurement is taken from the
top of the shoulder where the sleeve meets the
body to the end of the cuff.  </div>
            </div>
          
          <div id="d9" style="display:none;"> <img src="images/measure your shirt/long sleeve lower length.jpg" /> <br />
              <div align="center"> <strong>Long Sleeve Lower Length<br />
 Measurements Instructions</strong><br />
                <Br />
                

The lower length measurement is taken from the
armpit seam to the end of the cuff.
</div>
            </div>
          
          <div id="d10" style="display:none;"> <img src="images/measure your shirt/short sleeve upper length.jpg" /> <br />
              <div align="center"> <strong>Short Sleeve Upper Length<br />
 Measurements Instructions</strong><br />
                <Br />
               

The upper length measurement is taken from the
top of the shoulder where the sleeve meets the
body to the end of the sleeve.  </div>
            </div>
         <div id="d11" style="display:none;"> <img src="images/measure your shirt/bottom_width.jpg" /> <br />
              <div align="center"> <strong>Short Sleeve Lower Length<br />
 Measurements Instructions</strong><br />
                <Br />
                

The lower length measurement is taken from the
armpit seam to the end of the sleeve. 
 </div>
            </div>
         <div id="d12" style="display:none;"> <img src="images/measure your shirt/cuff.jpg" /> <br />
              <div align="center"> <strong>Cuff Measurements Instructions</strong><br />
                <Br />
                

The cuff measurement is taken across the open cuff, from the outer edge of the button hole to the center of the button. 
</div>
            </div>
         <div id="d13" style="display:none;"> <img src="images/measure your shirt/sleeve width.jpg" /> <br />
              <div align="center"> <strong>Sleeve Width
Measurements Instructions</strong><br />
                <Br />
                

The sleeve width measurement is taken across the sleeve
where it meets the shirt body. Straighten the seam. 

                 </div>
            </div>
            
         <div id="d14" style="display:none;"> <img src="images/measure your shirt/short sleeve opening.jpg" /> <br />
              <div align="center"> <strong> Short Sleeve Opening<br />
Measurements Instructions</strong><br />
                <Br />
               

This measurement is taken across the flat short
sleeve at the end of the cuff. 

                 </div>
            </div>
          </div>
          </td>
        <td><div id = "design_window">
              <div class="toolbox" style="height:650px;">
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
input.gray2 {
	background-color:#c3c3c3;
	border:0px;
	height:25px;	
	margin-bottom:5px;
	padding-left:10px;
}

</style>
<script>
function reset_input()
{
	$('.gray2').css('background-color','#c3c3c3');	
}
function show_div(id)
{
	
	$('#d1').hide();
	$('#d2').hide();
	$('#d3').hide();
	$('#d4').hide();
	$('#d5').hide();
	$('#d6').hide();
	$('#d7').hide();
	$('#d8').hide();
	$('#d9').hide();
	$('#d10').hide();
	$('#d11').hide();
	$('#d12').hide();
	$('#d13').hide();	
	$('#d14').hide();	
	$('#d'+id).show();	
}
</script>
              <div class="compartment2">
            <div class="title2">TOTAL COST <span style="float:right" id="total"></span></div>
          </div>
              <div class="compartment" style="margin-top:-20px;font-size:13px;">
              <div class="title"> </div>
              <br />
              <strong>MEASURE FROM YOUR BEST FITING SHIRT</strong><br />
              <input type="radio" name="size_measure2" id="size1" <?php if($_SESSION['size_measure2'] == 'cm') echo 'checked';?> checked="checked" />
              cm
              &nbsp;              &nbsp;              &nbsp;
              <input type="radio" name="size_measure2" id="size2" <?php if($_SESSION['size_measure2'] == 'inches') echo 'checked';?> />
              inches <br />
              <br />
              <br />
              
		<table style="width:300px;" cellspacing="4" cellspacing="5">
            <tr>
                  <td>Collar</td>
                  <td><input type="text" size="15"  value="<?php echo $_SESSION['f1'];?>"  class="gray2" id="f1" onclick="reset_input();;$('#f1').css('background-color','#e3e3e3');show_div(1)" /></td>
                </tr>
          
            <tr>
              <td>Chest</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f2'];?>"  class="gray2" id="f2" onclick="reset_input();;$('#f2').css('background-color','#e3e3e3');show_div(2)" /></td>
            </tr>
          
            <tr>
              <td>Waist</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f3'];?>"  class="gray2" id="f3" onclick="reset_input();;$('#f3').css('background-color','#e3e3e3');show_div(3)" /></td>
            </tr>
          
            <tr>
              <td>Length to Waist</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f4'];?>"  class="gray2" id="f4" onclick="reset_input();;$('#f4').css('background-color','#e3e3e3');show_div(4)" /></td>
            </tr>
          
            <tr>
              <td>Bottom width</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f5'];?>"  class="gray2" id="f5" onclick="reset_input();;$('#f5').css('background-color','#e3e3e3');show_div(5)" /></td>
            </tr>
          
            <tr>
              <td>Shirt length</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f6'];?>"  class="gray2" id="f6" onclick="reset_input();;$('#f6').css('background-color','#e3e3e3');show_div(6)" /></td>
            </tr>
          
            <tr>
              <td>Shoulder width</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f7'];?>"  class="gray2" id="f7" onclick="reset_input();;$('#f7').css('background-color','#e3e3e3');show_div(7)" /></td>
            </tr>
          
            <tr>
              <td>Long sleeve upper length</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f8'];?>"  class="gray2" id="f8" onclick="reset_input();;$('#f8').css('background-color','#e3e3e3');show_div(8)" /></td>
            </tr>
          
            <tr>
              <td>Long sleeve lower length</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f9'];?>"  class="gray2" id="f9" onclick="reset_input();;$('#f9').css('background-color','#e3e3e3');show_div(9)" /></td>
            </tr>
          
            <tr>
              <td>Short sleeve upper length</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f10'];?>"  class="gray2" id="f10" onclick="reset_input();;$('#f10').css('background-color','#e3e3e3');show_div(10)" /></td>
            </tr>
          
            <tr>
              <td>Short sleeve lower length</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f11'];?>"  class="gray2" id="f11" onclick="reset_input();;$('#f11').css('background-color','#e3e3e3');show_div(11)" /></td>
            </tr>
          
            <tr>
              <td>Cuff</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f12'];?>"  class="gray2" id="f12" onclick="reset_input();;$('#f12').css('background-color','#e3e3e3');show_div(12)" /></td>
            </tr>
            <tr>
              <td>Sleeve width</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f13'];?>"  class="gray2" id="f13" onclick="reset_input();;$('#f13').css('background-color','#e3e3e3');show_div(13)" /></td>
            </tr>
          
            <tr>
              <td>Short sleeve opening</td>
              <td><input type="text" size="15"  value="<?php echo $_SESSION['f14'];?>"  class="gray2" id="f14" onclick="reset_input();;$('#f14').css('background-color','#e3e3e3');show_div(14)" /></td>
            </tr>
  </table>
    </div>
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
        </table>
    </td>
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