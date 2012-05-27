<?

include('../global_variables.php');



$fastening = strtolower($_GET['fastening']);

switch ($fastening) {
    case 'normal placket':	
		$PlacketLyr02[5] = "Show";
		$PlacketLyr02[2] = "NormPlacket";
		$PlacketLyr02[3] = ".";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
		$TieFixLyr02[5] = "Show";
		$TieFixLyr02[2] = "NormPlacket"; 
		$TieFixLyr02[3] = ".";
		$CollarLyr03[5] = "Show";
		$CollarLyr03[2] = "NormPlacket";
		$CollarLyr03[3] = ".";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
		$ShirtLyr03[5] = "Show";
		$ShirtLyr03[2] = "NormPlacket";
		$ShirtLyr03[3] = ".";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'normal placket 45':	
		$PlacketLyr02[5] = "Show";
		$PlacketLyr02[2] = "NormPlacket";
		$PlacketLyr02[3] = "45deg.";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
			$TieFixLyr02[5] = "Show";
		$TieFixLyr02[2] = "NormPlacket"; 
		$TieFixLyr02[3] = "45deg.";
			$CollarLyr03[5] = "Show";
		$CollarLyr03[2] = "NormPlacket";
		$CollarLyr03[3] = "45deg.";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
			$ShirtLyr03[5] = "Show";
		$ShirtLyr03[2] = "NormPlacket";
		$ShirtLyr03[3] = "45deg.";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'normal placket 90':	
		$PlacketLyr02[5] = "Show";
		$PlacketLyr02[2] = "NormPlacket";
		$PlacketLyr02[3] = "90deg.";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
		$TieFixLyr02[5] = "Show";
		$TieFixLyr02[2] = "NormPlacket"; 
		$TieFixLyr02[3] = "90deg.";
		$CollarLyr03[5] = "Show";
		$CollarLyr03[2] = "NormPlacket";
		$CollarLyr03[3] = "90deg.";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
		$ShirtLyr03[5] = "Show";
		$ShirtLyr03[2] = "NormPlacket";
		$ShirtLyr03[3] = "90deg.";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'narrow placket':	
		$PlacketLyr02[5] = "Show";
		$PlacketLyr02[2] = "Narrow$Placket";
		$PlacketLyr02[3] = ".";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
			$TieFixLyr02[5] = "Show";
		$TieFixLyr02[2] = "Narrow$Placket";
		$TieFixLyr02[3] = ".";
			$CollarLyr03[5] = "Show";
		$CollarLyr03[2] = "Narrow$Placket";
		$CollarLyr03[3] = ".";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
			$ShirtLyr03[5] = "Show";
		$ShirtLyr03[2] = "Narrow$Placket";
		$ShirtLyr03[3] = ".";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'narrow placket 45':
		$PlacketLyr02[5] = "Show";
		$PlacketLyr02[2] = "Narrow$Placket";
		$PlacketLyr02[3] = "45deg.";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
		$TieFixLyr02[5] = "Show";
		$TieFixLyr02[2] = "Narrow$Placket";
		$TieFixLyr02[3] = "45deg.";
		$CollarLyr03[5] = "Show";
		$CollarLyr03[2] = "Narrow$Placket";
		$CollarLyr03[3] = "45deg.";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
		$ShirtLyr03[5] = "Show";
		$ShirtLyr03[2] = "Narrow$Placket";
		$ShirtLyr03[3] = "45deg.";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'narrow placket 90':	
		$PlacketLyr02[5] = "Show";
		$PlacketLyr02[2] = "Narrow$Placket";
		$PlacketLyr02[3] = "90deg.";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
			$TieFixLyr02[5] = "Show";
		$TieFixLyr02[2] = "Narrow$Placket"; 
		$TieFixLyr02[3] = "90deg.";
			$CollarLyr03[5] = "Show";
		$CollarLyr03[2] = "Narrow$Placket";
		$CollarLyr03[3] = "90deg.";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
			$ShirtLyr03[5] = "Show";
		$ShirtLyr03[2] = "Narrow$Placket";
		$ShirtLyr03[3] = "90deg.";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'no placket':	
		$PlacketLyr02[5] = "Hide";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
			$TieFixLyr02[5] = "Hide";
			$CollarLyr03[5] = "Hide";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
			$ShirtLyr03[5] = "Hide";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'hidden button (no $Placket)':	
			$PlacketLyr02[5] = "Hide";
			$PlacketLyr03[5] = "Hide";
		$PlacketLyr04[5] = "Hide";
			$TieFixLyr02[5] = "Hide";
			$CollarLyr03[5] = "Hide";
		$CollarLyr08[5] = "Hide";
		$CollarLyr09[5] = "Hide";
			$ShirtLyr03[5] = "Hide";
		$ShirtLyr06[5] = "Hide";
		$ShirtLyr07[5] = "Hide";
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

if($PlacketLyr01[5]=="Show")
{
	$lay1 = $PlacketLyr01[0];
	
	$list['layer'] = 0;
	$list['path'] = 'img/Placket/'.$lay1;
	$d[] = $list;

	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Placket/';
	$d[] = $list;
	
	unset($list);
}
 
 
if($PlacketLyr02[5]=="Show")
{
	$lay1 = $PlacketLyr02[0];
	
	$list['layer'] = 1;
	$list['path'] = 'img/Placket/'.$lay1;
	$d[] = $list;

	unset($list);
} else{
	$list['layer'] = 1;
	$list['path'] = 'img/Placket/';
	$d[] = $list;
	
	unset($list);
}

if($PlacketLyr03[5]=="Show")
{
	$lay1 = $PlacketLyr03[0];
	
	$list['layer'] = 2;
	$list['path'] = 'img/Placket/'.$lay1;
	$d[] = $list;

	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Placket/';
	$d[] = $list;
	
	unset($list);
}

if($PlacketLyr04[5]=="Show")
{
	$lay1 = $PlacketLyr04[0];
	
	$list['layer'] = 3;
	$list['path'] = 'img/Placket/'.$lay1;
	$d[] = $list;

	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Placket/';
	$d[] = $list;
	
	unset($list);
}

// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;
?>