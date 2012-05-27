<?
include('system/config.php');

$section = 1;
$point = 2;
$layer = 1;
$script = 'DisplayFabrics.php';
$folder = 'Fabric';

$sql = 'select * from fabrics order by item_order asc';
$d = $db->getAll($sql);

foreach($d as $f)
{
	$filename[$f['filename']] = $f; 
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
		
			
		
		$("#zoom").click(function(){
	
			$('.modalOverlay').remove();
			$("body").append('<div class="modalOverlay">');
			$("#fabricZoom").dialog({
				close: function(event, ui) { $('.modalOverlay').remove(); },
				height:470,
				width:470,
				title:'FABRIC INFORMATION',
				closeText:' ',
				
			});
			src2 = $(".zoomLay1").attr('src');
	
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
	


	function updateRender(icon_num)
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
	
	function showfabric(icon_num)
	{
				
			set_value('step2',icon_num);
			$('#popup_content').html('');
			
			updateRender(icon_num);
			updateRender_preview(icon_num);
			updateRender_preview_zoom(icon_num);	
			
			if(icon_num == '')
				var icon_num = "<?=$_SESSION['step2']?>";
				
			if(icon_num == '')
				icon_num = "0001";
	
			$('#popup_content').load('fabric_details.php?code='+icon_num);
			
	}



	function updateRender_preview(icon_num)
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
	
	
	

	function updateRender_preview_zoom(icon_num)
	{
			$('#loading').fadeIn('slow');
	
			$.getJSON('system/modules/<?=$script?>?zoomin=1',{}
			,function(data)
			{
				
				$('#loading').fadeOut('slow');
				
			
				$.each(data, function(index, itemData) {
					var layer = 'layz' + data[index].layer;
		
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
								if(zeroBasedSlideIndex == 2)
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
         
          <br clear="all" />
          <table>
        <tbody>
              <tr>
            <td><div id="design_output">
                <? include('system/menu.php'); ?>
                <div style="font-family:AvantGardeITbyBT;width:144px;"> <br>
                
                  A good fitting shirt is what every
                  man should have to be ready for all occasions. A formal shirt for weddings, job interview, work in
                  the office, or casual shirt for 
                  gatherings with friends. <br>
                  <br>
                  With TailorMeOnline, you design 
                  and create shirts that are uniquely yours. </div>
              </div></td>
            <td><div id="design_output" style="width:400px;"> <img class="lay1" id="lay0" style="z-index:0;position:absolute;;"			src="img/transparent.png" /> <img class="lay1" id="lay1" style="z-index:1;position:absolute;;"					src="img/transparent.png" /> <img class="lay3" id="lay2" style="z-index:2;position:absolute;;"					src="img/transparent.png" /> <img class="lay4" id="lay3" style="z-index:3;position:absolute;;"					src="img/transparent.png" /> <img class="lay5" id="lay4" style="z-index:4;position:absolute;;"					src="img/transparent.png" /> <img class="lay6" id="lay5" style="z-index:5;position:absolute;;"					src="img/transparent.png" /> <img class="lay7" id="lay6" style="z-index:6;position:absolute;;"					src="img/transparent.png" /> <img class="lay8" id="lay7" style="z-index:7;position:absolute;;"					src="img/transparent.png" /> <img class="lay9" id="lay8" style="z-index:8;position:absolute;;"					src="img/transparent.png" /> <img class="lay10" id="lay9" style="z-index:9;position:absolute;;"					src="img/transparent.png" /> <img class="lay11" id="lay10" style="z-index:10;position:absolute;;"					src="img/transparent.png" /> <img class="lay12" id="lay11" id="lay0" style="z-index:11;position:absolute;;"					src="img/transparent.png" /> <img class="lay13" id="lay12" style="z-index:12;position:absolute;;"					src="img/transparent.png" /> <img class="lay14" id="lay13" style="z-index:13;position:absolute;;"					src="img/transparent.png" /> <img class="lay15" id="lay14" style="z-index:14;position:absolute;;"					src="img/transparent.png" /> <img class="lay16" id="lay15" style="z-index:15;position:absolute;;"					src="img/transparent.png" /> </div>
                  <div id="loading" style="display:none;" align="center"><small>Please wait while rendering...</small></div></td>
            <td><div id = "design_window">
                  <style>
#buttonWidget
{
	
	position:relative;
	height:65px;
	/*margin-top:317px;*/
	margin-top:32px ;
	
}
.modalOverlay {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    background-color: rgba(0,0,0,0.3); /* black semi-transparent */
}

.ui-dialog,.ui-widget,.ui-widget-content
{
	background-color:white;
	padding:10px;
}
.ui-dialog table
{
	width:400px;
	height:150px;
}



.ui-dialog-titlebar-close
{
	float:right;
	background-image:url(images/close.jpg);
	background-repeat:no-repeat;
	width:85px;	
	height:26px;
}

.ui-dialog-title
{
	font-size:11pt;
	font-family:bold;
	color:#333333;
	font-family:AvantGardeITbyBT;
	margin-left:10px;
}

div.ui-dialog-content{
	font-family:AvantGardeITbyBT;
	
}

.fabricTitle
{
	font-size:15pt;
}

#faTitle {
	font-family:CharcoalCY;
	
}

</style>
                  <div class="toolbox" style="height:920px;">
             
                 
                   <div class="compartment2">
			<div class="title2">TOTAL COST <span style="float:right" id="total"></span></div>
		</div>
                  <div class="compartment">
              
              </div>
                  <div id="zoom" style="width:360px;height:210px;" class="cursor">
                  
                   <? for($i=0;$i<$layer;$i++): ?>
                  <img class="lay<?=$i?>" id="layf<?=$i?>" style="height:210px;position:absolute;" src="img/transparent.png" />
                  <? endfor; ?>
                  <img class=""style="height:210px;position:absolute;" src="images/frame.png" />
                  
                   </div>
                       <div class="compartment">
        <div class="title" style="margin-bottom:-15px;"> </div>
        </div>
               
               <div id="buttonWidget">
                 
                  <ol>
                  <li ><a id="reset" onclick="">ALL FABRICS</a></li>
                  <li><a href="#" id="details" onclick="return false;">PLAIN</a></li>
                  <li><a href="#">STRIPPED</a></li>
<li ><a id="reset" onclick="">ALL PATTERNS</a></li>
                  <li><a href="#" id="details" onclick="return false;">CHECKERED</a></li>
                  <li><a href="#">PRINT</a></li>
                  </ol>
              
                  </div>
                   <div class="compartment">
        <div class="title" style="margin-top:-15px;"> </div>
        </div>
        <div class="compartment">
                  <div class="fabric" style="height:420px"">
              
                <div class="slideshow">
                <? $count = 1; ?>
                <? foreach($filename as $file => $s): ?>
                <?
					$id = str_replace('Fabric.','',$file );
					$id = str_replace('.jpg','',$id);

				?>
                <? if($count % 12 == 1): ?>
                      <div class ="slide">
                <? endif; ?>
                <div class="imageBox"><img  style="" src="design/fabrics/Fabric.<?=$file?>" class="img1"  title="<?=$s['label']?>" onClick="showfabric('<?=$id?>');" />
                          <div id="imageTitle2" style="margin-top:15px;"><?=$s['label']?><br />
                          $<?=$s['price']?>
                          </div>
                          </div>
                          
                      <? $count ++; ?>
                <? if($count % 12 == 1): ?>
                      </div>
                <? endif; ?>
                <? endforeach; ?>
                    
                    </div>
              </div>
              </div>
              
                <div class="compartment">
        <div class="title" style="margin-top:-15px;"> </div>
        </div>
        <div style="float:left;padding-top:12px;"> <img src='images/pager-left.png' id='previ' style='cursor:pointer;' /> PAGE <span id="startNum">1</span>/<span id="pageNum">3</span> <img src='images/pager-right.png'id='nxt' ' style='cursor:pointer;' /> </div>
                 <div id="buttonWidget">
                  <ol>
                  <li style="background-color:white;"><a id="reset" href="#" style="background-color:white;color:black;" onclick="reset();updateRender_preview('undefined');return false;">Reset Sample</a></li>
                  <li><a href="#" id="details" onclick="return false;">Details</a></li>
                  <li><a href="#">Add To Cart</a></li>
                  <ol>
                  </div>
          <div class="compartment">
        <div class="title" style="margin-top:-15px;"> </div>
        </div>
        
        
                
                  
                  
		</td>
          </tr>
            </tbody>
      </table>
        </div>
         <div id="fabricZoom" style="display:none;">
                  <div class="fabricTitle">
                <div style="float:right"><strong>$39.90</strong><br />
                      <span style="font-size:11pt;">per shirt</span></div>
                <span id="faTitle">Prive</span> </div>
                  <div id="zoomImage" style="height:210px;"> 
                  
                  <img class="layz0" id="layz0" style="height:210px;position:absolute;" src="img/transparent.png" />
                  </div>
                  <div>
              <div id="popup_content"></div>   
    <!-- content --> 
  </div>
    </div>
    
<!-- page -->

 <? include('footer.php'); ?>
</body>
</html>