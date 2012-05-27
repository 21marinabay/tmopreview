<?

include('../global_variables.php');


$color = strtolower($_GET['color']);

if($color == 'undefined' || $color == '')
{
	$color = '0001';
}

if($color != '' && $color != 'undefined')
{
	
	$_SESSION['color'] = $color;	
} else {
	
	$color = $_SESSION['color'];
	
}


$ButtonLyr03[4] = $color;
$PlacketLyr04[4] = $color;
$PlacketContrastLyr06[4] = $color;
$TieFixLyr05[4] = $color;
$CollarLyr07[4] = $color; 
$CollarLyr09[4] = $color; 
$CuffLyr05[4] = $color;
$ShirtLyr07[4] = $color; 
$ShirtLyr11[4] = $color;
$ShirtLyr15[4] = $color; 


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