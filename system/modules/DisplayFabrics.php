<?
include('../global_variables.php');
include('../current_setting.php');


$num = $_SESSION['step2'];

if($num == '')
	$num = '0002';

$zoomin = $_GET['zoomin'];

$BackDetails[4] = $num;
$BackYoke[4] = $num;
$ButtonLyr01[4] = $num;
$FabricZoomIn[4] = $num;
$FabricZoomOut[4] = $num;
$PlacketLyr01[4] = $num;
$PlacketLyr02[4] = $num;
$$PlacketContrastLyr01[4] = $num;
$PlacketContrastLyr02[4] = $num;
$PlacketContrastLyr03[4] = $num;
$PlacketContrastLyr04[4] = $num;
$TieFixLyr01[4] = $num;
$TieFixLyr02[4] = $num; 
$TieFixLyr03[4] = $num;
$CollarLyr01[4] = $num; 
$CollarLyr02[4] = $num; 
$CollarLyr03[4] = $num; 
$CollarLyr04[4] = $num;
$CollarLyr05[4] = $num; 
$CuffLyr01[4] = $num;
$CuffLyr02[4] = $num;
$CuffLyr03[4] = $num;
$ShirtLyr01[4] = $num; 
$ShirtLyr02[4] = $num;
$ShirtLyr03[4] = $num; 
$ShirtLyr04[4] = $num;
$ShirtLyr05[4] = $num; 
$ShirtLyr08[4] = $num;
$ShirtLyr09[4] = $num; 
$ShirtLyr12[4] = $num; 
$ShirtLyr13[4] = $num; 
$ShirtLyr16[4] = $num;



include('../refresh_filename.php');

if($zoomin == 1)
{
	if($FabricZoomIn[5]=="Show")
	{
		$lay16 = $FabricZoomIn[0];
		
		$list['layer'] = 0;
		$list['path'] = 'img/Fabric/'.$lay16;
		$d[] = $list;
		
		unset($list);
	}else{
		$list['layer'] = 0;
		$list['path'] = 'img/Fabric/';
		$d[] = $list;
		
		unset($list);
	}
} else {
	
	if($FabricZoomOut[5]=="Show")
	{
		$lay16 = $FabricZoomOut[0];
		
		$list['layer'] = 0;
		$list['path'] = 'img/Fabric/'.$lay16;
		$d[] = $list;
		
		unset($list);
	}else{
		$list['layer'] = 0;
		$list['path'] = 'img/Fabric/';
		$d[] = $list;
		
		unset($list);
	}

	
}

// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;

?>




