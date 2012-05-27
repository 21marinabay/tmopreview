<?

include('../global_variables.php');


$cuff = strtolower($_GET['cuff']);

switch ($cuff) {
    case 'narrow':	
		$CuffLyr02[3] = "Narrow-Outer.";
		$CuffLyr03[3] = "Narrow-Inner.";
		$CuffLyr04[3] = "Narrow-Thread.";
		$CuffLyr05[3] = "Narrow-Button.";
		$ShirtLyr12[3] = "Narrow-Outer.";
		$ShirtLyr13[3] = "Narrow-Inner.";
		$ShirtLyr14[3] = "Narrow-Thread.";
		$ShirtLyr15[3] = "Narrow-Button.";
		$ShirtLyr16[2] = "Cuff-ShortRight."; 
		
        break;
    case 'double button':
		$CuffLyr02[3] = "DbButton-Outer.";
		$CuffLyr03[3] = "DbButton-Inner.";
		$CuffLyr04[3] = "DbButton-Thread.";
		$CuffLyr05[3] = "DbButton-Button.";
		$ShirtLyr12[3] = "DbButton-Outer.";
		$ShirtLyr13[3] = "DbButton-Inner.";
		$ShirtLyr14[3] = "DbButton-Thread.";
		$ShirtLyr15[3] = "DbButton-Button.";
		$ShirtLyr16[2] = "Cuff-NormRight."; 	
		
        break;
    case 'single button':	
		$CuffLyr02[3] = "SingleButton-Outer.";
		$CuffLyr03[3] = "SingleButton-Inner.";
		$CuffLyr04[3] = "SingleButton-Thread.";
		$CuffLyr05[3] = "SingleButton-Button.";
		$ShirtLyr12[3] = "SingleButton-Outer.";
		$ShirtLyr13[3] = "SingleButton-Inner.";
	$ShirtLyr14[3] = "SingleButton-Thread.";
		$ShirtLyr15[3] = "SingleButton-Button.";
		$ShirtLyr16[2] = "Cuff-NormRight."; 

		
        break;
    case 'neapolitan':	
		$CuffLyr02[2] = "Neapolitan";
		$CuffLyr03[2] = "Neapolitan";
		$CuffLyr04[2] = "Neapolitan";
		$CuffLyr05[2] = "Neapolitan";
		$ShirtLyr12[2] = "Cuff-Neapolitan";
		$ShirtLyr13[2] = "Cuff-Neapolitan";
		$ShirtLyr14[2] = "Cuff-Neapolitan";
		$ShirtLyr15[2] = "Cuff-Neapolitan";
		$CuffLyr02[3] = "-Outer.";
		$CuffLyr03[3] = "-Inner.";
		$CuffLyr04[3] = "-Thread.";
		$CuffLyr05[3] = "-Button.";
		$ShirtLyr12[3] = "-Outer.";
		$ShirtLyr13[3] = "-Inner.";
		$ShirtLyr14[3] = "-Thread.";
		$ShirtLyr15[3] = "-Button.";
		$ShirtLyr16[2] = "Cuff-NormRight."; 
			
        break;
    case 'french cuff':	
		$CuffLyr02[3] = "French-Outer.";
		$CuffLyr03[3] = "French-Inner.";
		$CuffLyr04[3] = "French-Thread.";
		$CuffLyr05[3] = "French-Button.";
		$ShirtLyr12[3] = "French-Outer.";
		$ShirtLyr13[3] = "French-Inner.";
		$ShirtLyr14[3] = "French-Thread.";
		$ShirtLyr15[3] = "French-Button.";
		$ShirtLyr16[2] = "Cuff-NormRight."; 

		
        break;
    case 'convertible':	
		$CuffLyr02[3] = "Convertible-Outer.";
		$CuffLyr03[3] = "Convertible-Inner.";
		$CuffLyr04[3] = "Convertible-Thread.";
		$CuffLyr05[3] = "Convertible-Button.";
		$ShirtLyr12[3] = "Convertible-Outer.";
		$ShirtLyr13[3] = "Convertible-Inner.";
		$ShirtLyr14[3] = "Convertible-Thread.";
		$ShirtLyr15[3] = "Convertible-Button.";
		$ShirtLyr16[2] = "Cuff-NormRight."; 

		
        break;
    case 'triple button':	
		$CuffLyr02[3] = "TrpButton-Outer.";
		$CuffLyr03[3] = "TrpButton-Inner.";
		$CuffLyr04[3] = "TrpButton-Thread.";
		$CuffLyr05[3] = "TrpButton-Button.";
		$ShirtLyr12[3] = "TrpButton-Outer.";
		$ShirtLyr13[3] = "TrpButton-Inner.";
		$ShirtLyr14[3] = "TrpButton-Thread.";
		$ShirtLyr15[3] = "TrpButton-Button.";
		$ShirtLyr16[2] = "Cuff-HighRight."; 
		
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