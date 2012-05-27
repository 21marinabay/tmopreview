<?

include('../global_variables.php');


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
	$cuffLyr01[4] = $icon_num; 
	$cuffLyr02[4] = $icon_num; 
	$cuffLyr03[4] = $icon_num; 
	$cuffLyr04[4] = $icon_num;
	$cuffLyr05[4] = $icon_num;	 
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


$cuff_outer = strtolower($_GET['cuff_outer']);

if($cuff_outer == 'undefined' || $cuff_outer == '')
{
	$cuff_outer = '0001';
}

if($cuff_outer != '' && $cuff_outer != 'undefined')
{
	
	$_SESSION['cuff_outer'] = $cuff_outer;	
} else {
	
	$cuff_outer = $_SESSION['cuff_outer'];
	
}



$CuffLyr02[4] = $cuff_outer;	 
$ShirtLyr12[4] = $cuff_outer;


if($_SESSION['cuff_inner'] == '')
{
	$_SESSION['cuff_inner'] = '0001';	
}


if($_SESSION['cuff_inner']  != '')
{
	
	$cuff_inner = $_SESSION['cuff_inner'];
	
	$CuffLyr03[4] = $cuff_inner;	 
	$ShirtLyr13[4] = $cuff_inner;
}

include('../refresh_filename.php');

$d = array();
$list = array();

if($CuffLyr01[5]=="Show")	
{
	$lay1 = $CuffLyr01[0];
	
	$list['layer'] = 0;
	$list['path'] = 'img/Cuff/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Cuff/';
	$d[] = $list;
	
	unset($list);
}

if($CuffLyr02[5]=="Show")
{
	$lay2 = $CuffLyr02[0];
	
	$list['layer'] = 1;
	$list['path'] = 'img/Cuff/'.$lay2;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 1;
	$list['path'] = 'img/Cuff/';
	$d[] = $list;
	
	unset($list);
}

if($CuffLyr03[5]=="Show")
{
	$lay3 = $CuffLyr03[0];
	
	$list['layer'] = 2;
	$list['path'] = 'img/Cuff/'.$lay3;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 2;
	$list['path'] = 'img/Cuff/';
	$d[] = $list;
	
	unset($list);
}

if($CuffLyr04[5]=="Show")
{
	$lay4 = $CuffLyr04[0];
	
	$list['layer'] = 3;
	$list['path'] = 'img/Cuff/'.$lay4;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 3;
	$list['path'] = 'img/Cuff/';
	$d[] = $list;
	
	unset($list);
}

if($CuffLyr05[5]=="Show") 
{
	$lay5 = $CuffLyr05[0];
	
	$list['layer'] = 4;
	$list['path'] = 'img/Cuff/'.$lay5;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 4;
	$list['path'] = 'img/Cuff/';
	$d[] = $list;
	
	unset($list);
}
 
// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;
?>