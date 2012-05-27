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

if($TieFixLyr01[5]=="Show")
{
	$lay2 = $TieFixLyr01[0];
	
	$list['layer'] = 0;
	$list['path'] = 'img/Tie Fix/'.$lay2;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 0;
	$list['path'] = 'img/Tie Fix/';
	$d[] = $list;
	
	unset($list);
}

if($TieFixLyr02[5]=="Show")
{
	$lay2 = $TieFixLyr02[0];
	
	$list['layer'] = 1;
	$list['path'] = 'img/Tie Fix/'.$lay2;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 1;
	$list['path'] = 'img/Tie Fix/';
	$d[] = $list;
	
	unset($list);
}

if($TieFixLyr03[5]=="Show")
{
	$lay2 = $TieFixLyr03[0];
	
	$list['layer'] = 2;
	$list['path'] = 'img/Tie Fix/'.$lay2;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 2;
	$list['path'] = 'img/Tie Fix/';
	$d[] = $list;
	
	unset($list);
}

if($TieFixLyr04[5]=="Show")
{
	$lay2 = $TieFixLyr04[0];
	
	$list['layer'] = 3;
	$list['path'] = 'img/Tie Fix/'.$lay2;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 3;
	$list['path'] = 'img/Tie Fix/';
	$d[] = $list;
	
	unset($list);
}
if($TieFixLyr05[5]=="Show")
{
	$lay2 = $TieFixLyr05[0];
	
	$list['layer'] = 4;
	$list['path'] = 'img/Tie Fix/'.$lay2;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 4;
	$list['path'] = 'img/Tie Fix/';
	$d[] = $list;
	
	unset($list);
}


$output = json_encode($d);

print $output;



?>