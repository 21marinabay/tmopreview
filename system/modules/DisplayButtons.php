<?

include('../global_variables.php');
include('../current_setting.php');


$button = $_SESSION['step5'];

if($button == '')
	$button = '0001';

$ButtonLyr03[4] = $button;
$PlacketLyr04[4] = $button;
$PlacketContrastLyr06[4] = $button;
$TieFixLyr05[4] = $button;
$CollarLyr07[4] = $button; 
$CollarLyr09[4] = $button; 
$CuffLyr05[4] = $button;
$ShirtLyr07[4] = $button; 
$ShirtLyr11[4] = $button;
$ShirtLyr15[4] = $button; 


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