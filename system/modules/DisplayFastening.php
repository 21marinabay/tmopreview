<?

include('../global_variables.php');
include('../current_setting.php');



$fastening = $_SESSION['step6'];

if($fastening == '')
	$fastening = 'normal placket';


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
		$CollarLyr03[2] = "PlacketNarrow";
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
		$CollarLyr03[2] = "PlacketNarrow";
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
		$CollarLyr03[2] = "PlacketNarrow";
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
		$PlacketLyr02[2] = "NarrowPlacket";
		$PlacketLyr02[3] = ".";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
		$TieFixLyr02[5] = "Show";
		$TieFixLyr02[2] = "NarrowPlacket";
		$TieFixLyr02[3] = ".";
		$CollarLyr03[5] = "Show";
		$CollarLyr03[2] = "NarrowPlacket";
		$CollarLyr03[3] = ".";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
		$ShirtLyr03[5] = "Show";
		$ShirtLyr03[2] = "NarrowPlacket";
		$ShirtLyr03[3] = ".";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'narrow placket 45':
		$PlacketLyr02[5] = "Show";
		$PlacketLyr02[2] = "NarrowPlacket";
		$PlacketLyr02[3] = "45deg.";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
		$TieFixLyr02[5] = "Show";
		$TieFixLyr02[2] = "NarrowPlacket";
		$TieFixLyr02[3] = "45deg.";
		$CollarLyr03[5] = "Show";
		$CollarLyr03[2] = "NarrowPlacket";
		$CollarLyr03[3] = "45deg.";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
		$ShirtLyr03[5] = "Show";
		$ShirtLyr03[2] = "NarrowPlacket";
		$ShirtLyr03[3] = "45deg.";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'narrow placket 90':	
		$PlacketLyr02[5] = "Show";
		$PlacketLyr02[2] = "NarrowPlacket";
		$PlacketLyr02[3] = "90deg.";
		$PlacketLyr03[5] = "Show";
		$PlacketLyr04[5] = "Show";
			$TieFixLyr02[5] = "Show";
		$TieFixLyr02[2] = "NarrowPlacket"; 
		$TieFixLyr02[3] = "90deg.";
			$CollarLyr03[5] = "Show";
		$CollarLyr03[2] = "NarrowPlacket";
		$CollarLyr03[3] = "90deg.";
		$CollarLyr08[5] = "Show";
		$CollarLyr09[5] = "Show";
			$ShirtLyr03[5] = "Show";
		$ShirtLyr03[2] = "NarrowPlacket";
		$ShirtLyr03[3] = "90deg.";
		$ShirtLyr06[5] = "Show";
		$ShirtLyr07[5] = "Show";
        break;
    case 'hidden placket':	
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
    case 'hidden button (no placket)':	
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
	$list['layer'] = 2;
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
	$list['layer'] = 3;
	$list['path'] = 'img/Placket/';
	$d[] = $list;
	
	unset($list);
}

// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;
?>