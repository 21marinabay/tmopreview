<?

include('../global_variables.php');
include('../current_setting.php');



$thread_num = $_SESSION['step18'];

if($thread_num == '')
	$thread_num = '0001';

// Note : Number the thread icon in running number from 0001 onwards (ie. 0001, 0002, … , 0031)
$ButtonLyr02[4] = $thread_num;	
$PlacketLyr03[4] = $thread_num;	
$PlacketContrastLyr05[4] = $thread_num;
$TieFixLyr04[4] = $thread_num;	
$CollarLyr06[4] = $thread_num;
$CollarLyr08[4] = $thread_num;
$CuffLyr04[4] = $thread_num;	
$ShirtLyr06[4] = $thread_num; 
$ShirtLyr10 [4] = $thread_num;
$ShirtLyr14[4] = $thread_num; 


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

if($ButtonLyr01[5]=="Show")
{
	$lay1 = $ButtonLyr01[0];
	
	$list['layer'] = 0;
	$list['path'] = 'img/Button/'.$lay1;
	$d[] = $list;

	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Button/';
	$d[] = $list;
	
	unset($list);
}

if($ButtonLyr02[5]=="Show")
{
	$lay1 = $ButtonLyr02[0];
	
	$list['layer'] = 1;
	$list['path'] = 'img/Button/'.$lay1;
	$d[] = $list;

	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Button/';
	$d[] = $list;
	
	unset($list);
}

if($ButtonLyr03[5]=="Show")
{
	$lay1 = $ButtonLyr03[0];
	
	$list['layer'] = 2;
	$list['path'] = 'img/Button/'.$lay1;
	$d[] = $list;

	unset($list);
} else{
	$list['layer'] = 2;
	$list['path'] = 'img/Button/';
	$d[] = $list;
	
	unset($list);
}

 
// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;
?>