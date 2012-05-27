<?

include('../global_variables.php');


$yoke = strtolower($_GET['yoke']);

if($yoke != '' && $yoke != 'undefined')
{
	$_SESSION['yoke'] = $yoke;	
} else {
	
	$yoke = $_SESSION['yoke'];
	
}

switch ($yoke) {
    case 'classic':			
		$BackYoke[2] = "ClassicYoke.";
        break;
    case 'cowboy':	
		$BackYoke[2] = "CowboyYoke.";
        break;
}


$icon_num = $_SESSION['icon_num'];

if($icon_num != '')
{
	$BackDetails[4] = $icon_num;
	$BackYoke[4] = $icon_num;
	$ButtonLyr01[4] = $icon_num;
	$FabricZoomIn[4] = $icon_num;
	$FabricZoomOut[4] = $icon_num;
	$PlacketLyr01[4] = $icon_num;
	$PlacketLyr02[4] = $icon_num;
	$PlacketContrastLyr01[4] = $icon_num;
	$PlacketContrastLyr02[4] = $icon_num;
	$PlacketContrastLyr03[4] = $icon_num;
	$PlacketContrastLyr04[4] = $icon_num;
	$TieFixLyr01[4] = $icon_num;
	$TieFixLyr02[4] = $icon_num; 
	$TieFixLyr03[4] = $icon_num;
	$CollarLyr01[4] = $icon_num; 
	$CollarLyr02[4] = $icon_num; 
	$CollarLyr03[4] = $icon_num; 
	$CollarLyr04[4] = $icon_num;
	$CollarLyr05[4] = $icon_num; 
	$CuffLyr01[4] = $icon_num;
	$CuffLyr02[4] = $icon_num;
	$CuffLyr03[4] = $icon_num;
	$ShirtLyr01[4] = $icon_num; 
	$ShirtLyr02[4] = $icon_num;
	$ShirtLyr03[4] = $icon_num; 
	$ShirtLyr04[4] = $icon_num;
	$ShirtLyr05[4] = $icon_num; 
	$ShirtLyr08[4] = $icon_num;
	$ShirtLyr09[4] = $icon_num; 
	$ShirtLyr12[4] = $icon_num; 
	$ShirtLyr13[4] = $icon_num; 
	$ShirtLyr16[4] = $icon_num;
}


include('../refresh_filename.php');

$d = array();
$list = array();

if($BackYoke[5]=="Show")	
{
	$lay1 = $BackYoke[0];
	
	$list['layer'] = 0;
	$list['path'] = 'img/Back Yoke/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Back Yoke/';
	$d[] = $list;
	
	unset($list);
}

 
// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;
?>