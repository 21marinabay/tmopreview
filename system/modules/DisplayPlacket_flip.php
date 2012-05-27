<?

include('../global_variables.php');
include('../current_setting.php');


$flip_num = $_SESSION['step17'];

if($flip_num == '')
{
	$flip_num = $_SESSION['step2'];	
}

if($flip_num != '')
{
	$PlacketContrastLyr03[4] = $flip_num;
}


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