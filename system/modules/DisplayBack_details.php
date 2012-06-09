<?

include('../global_variables.php');
include('../current_setting.php');


$back_details = $_SESSION['step9'];

if($back_details == '')
	$back_details = 'no back folds';

switch ($back_details) {
	case 'no back darts':
		$BackDetails[2] = "";
		$BackYoke[2] = "ClassicYoke.";
		$show = 1;
		break;
    case 'no back folds':			
		$BackDetails[2] = "";
		$BackYoke[2] = "ClassicYoke.";
		$show = 2;
        break;
   
    case 'centre folds':		
		$BackYoke[2] = "ClassicYokeCentreFold.";
		$show = 2;
        break;
    case 'side folds':			
		$BackYoke[2] = "ClassicYokeSideFold.";
		$show = 2;
        break;
    case 'back darts':			
		$BackDetails[2] = "BackDart.";
		$show = 1;
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
	$back_detailsLyr01[4] = $icon_num; 
	$back_detailsLyr02[4] = $icon_num; 
	$back_detailsLyr03[4] = $icon_num; 
	$back_detailsLyr04[4] = $icon_num;
	$back_detailsLyr05[4] = $icon_num;	 
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

if($show == 1)
{
		
	if($BackDetails[5]=="Show")	
	{
		$lay1 = $BackDetails[0];
		
		$list['layer'] = 0;
		$list['path'] = 'img/Back Details/'.$lay1;
		$d[] = $list;
		
		unset($list);
	} else{
		$list['layer'] = 0;
		$list['path'] = 'img/Back Details/';
		$d[] = $list;
		
		unset($list);
	}

}

if($show == 2)
{
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
}
 
// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;
?>