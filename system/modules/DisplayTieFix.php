<?

include('../global_variables.php');
include('../current_setting.php');


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