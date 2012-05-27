<?

include('../global_variables.php');

$flip_num = strtolower($_GET['flip_num']);

if($flip_num == 'undefined' || $flip_num == '')
{
	$flip_num = '0001';
}

if($flip_num != '' && $flip_num != 'undefined')
{
	$_SESSION['flip_num'] = $flip_num;	
} else {
	
	$flip_num = $_SESSION['flip_num'];
	
}
$PlacketContrastLyr03[4] = $flip_num;

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
	$icon_numLyr01[4] = $icon_num; 
	$icon_numLyr02[4] = $icon_num; 
	$icon_numLyr03[4] = $icon_num; 
	$icon_numLyr04[4] = $icon_num;
	$icon_numLyr05[4] = $icon_num;	 
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


$icon_num_inner = strtolower($_GET['icon_num_inner']);

if($icon_num_inner == 'undefined' || $icon_num_inner == '')
{
	$icon_num_inner = '0001';
}

if($icon_num_inner != '')
{
	
	$_SESSION['icon_num_inner'] = $icon_num_inner;	
} else {
	
	$icon_num_inner = $_SESSION['icon_num_inner'];
	
}

$icon_numLyr04[4] = $icon_num_inner;	 
$ShirtLyr08[4] = $icon_num_inner;



if($_SESSION['icon_num_outer'] == '')
{
	$_SESSION['icon_num_outer'] = '0001';	
}

if($_SESSION['icon_num_outer'] != '')
{	
	$icon_num_outer = $_SESSION['icon_num_outer'];
	
}

$icon_numLyr05[4] = $icon_num_outer;	 
$ShirtLyr09[4] = $icon_num_outer;




include('../refresh_filename.php');

$d = array();
$list = array();


if($PlacketContrastLyr01[5]=="Show")	
{
	$lay1 = $PlacketContrastLyr01[0];
	
	$list['layer'] = 0;
	$list['path'] = 'img/Placket Contrast/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Placket Contrast/';
	$d[] = $list;
	
	unset($list);
}
if($PlacketContrastLyr02[5]=="Show")	
{
	$lay1 = $PlacketContrastLyr02[0];
	
	$list['layer'] = 1;
	$list['path'] = 'img/Placket Contrast/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 1;
	$list['path'] = 'img/Placket Contrast/';
	$d[] = $list;
	
	unset($list);
}
if($PlacketContrastLyr03[5]=="Show")	
{
	$lay1 = $PlacketContrastLyr03[0];
	
	$list['layer'] = 2;
	$list['path'] = 'img/Placket Contrast/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 2;
	$list['path'] = 'img/Placket Contrast/';
	$d[] = $list;
	
	unset($list);
}
if($PlacketContrastLyr04[5]=="Show")	
{
	$lay1 = $PlacketContrastLyr04[0];
	
	$list['layer'] = 3;
	$list['path'] = 'img/Placket Contrast/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 3;
	$list['path'] = 'img/Placket Contrast/';
	$d[] = $list;
	
	unset($list);
}
if($PlacketContrastLyr05[5]=="Show")	
{
	$lay1 = $PlacketContrastLyr05[0];
	
	$list['layer'] = 4;
	$list['path'] = 'img/Placket Contrast/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 4;
	$list['path'] = 'img/Placket Contrast/';
	$d[] = $list;
	
	unset($list);
}
if($PlacketContrastLyr06[5]=="Show")	
{
	$lay1 = $PlacketContrastLyr06[0];
	
	$list['layer'] = 5;
	$list['path'] = 'img/Placket Contrast/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 5;
	$list['path'] = 'img/Placket Contrast/';
	$d[] = $list;
	
	unset($list);
}
 
// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;
?>