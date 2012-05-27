<?

include('../global_variables.php');


$collar = strtolower($_GET['collar']);

if($collar != '')
{
	$_SESSION['collar'] = $collar;
} else {
	$collar = $_SESSION['collar'];
}

switch ($collar) {
    case 'business':	
		$CollarLyr04[3] = "Classic-Inner.";
		$CollarLyr05[3] = "Classic-Outer.";	 
		$CollarLyr06[3] = "Classic-Thread.";	 
		$CollarLyr07[3] = "Classic-Button.";	
		$ShirtLyr08[3] = "Classic-Inner.";
		$ShirtLyr09[3] = "Classic-Outer.";	
		$ShirtLyr10[3] = "Classic-Thread.";	
		$ShirtLyr11[3] = "Classic-Button.";	
        break;
    case 'full spread':	
		$CollarLyr04[3] = "Fullspread-Inner.";
		$CollarLyr05[3] = "Fullspread-Outer.";	 
		$CollarLyr06[3] = "Fullspread-Thread.";	 
		$CollarLyr07[3] = "Fullspread-Button.";	
        break;
    case 'cut away':
		$CollarLyr04[3] = "Cutaway-Inner.";
		$CollarLyr05[3] = "Cutaway-Outer.";	 
		$CollarLyr06[3] = "Cutaway-Thread.";	 
		$CollarLyr07[3] = "Cutaway-Button.";
        break;
		
    case 'mini':	
		$CollarLyr04[3] = "Mini-Inner.";
		$CollarLyr05[3] = "Mini-Outer.";	 
		$CollarLyr06[3] = "Mini-Thread.";	 
		$CollarLyr07[3] = "Mini-Button.";	
        break;
		
    case 'long sleeve':	
		$CollarLyr04[3] = "LongSleeve-Inner.";
		$CollarLyr05[3] = "LongSleeve-Outer.";	 
		$CollarLyr06[3] = "LongSleeve-Thread.";	 
		$CollarLyr07[3] = "LongSleeve-Button.";	
        break;
    case 'button down':	
		$CollarLyr04[3] = "ButtonDown-Inner.";
		$CollarLyr05[3] = "ButtonDown-Outer.";	 
		$CollarLyr06[3] = "ButtonDown-Thread.";	 
		$CollarLyr07[3] = "ButtonDown-Button.";	
        break;
    case 'hidden button down':	
		$CollarLyr04[3] = "HiddenButton-Inner.";
		$CollarLyr05[3] = "HiddenButton-Outer.";	 
		$CollarLyr06[3] = "HiddenButton-Thread.";	 
		$CollarLyr07[3] = "HiddenButton-Button.";
        break;
    case 'round':	
		$CollarLyr04[3] = "Rounded-Inner.";
		$CollarLyr05[3] = "Rounded-Outer.";	 
		$CollarLyr06[3] = "Rounded-Thread.";	 
		$CollarLyr07[3] = "Rounded-Button.";
        break;
		
    case 'mandarin':	
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$CollarLyr04[3] = "Mao-Inner.";
		$CollarLyr05[3] = "Mao-Outer.";	 
		$CollarLyr06[3] = "Mao-Thread.";	 
		$CollarLyr07[3] = "Mao-Button.";	
        break;
    case 'wing':	
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$CollarLyr04[3] = "Wing-Inner.";
		$CollarLyr05[3] = "Wing-Outer.";	 
		$CollarLyr06[3] = "Wing-Thread.";	 
		$CollarLyr07[3] = "Wing-Button.";	
        break;
    case 'tap':	
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$CollarLyr04[3] = "Tap-Inner.";
		$CollarLyr05[3] = "Tap-Outer.";	 
		$CollarLyr06[3] = "Tap-Thread.";	 
		$CollarLyr07[3] = "Tap-Button.";	
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

$collar_outer = strtolower($_GET['collar_outer']);

if($collar_outer != '')
{

	$_SESSION['collar_outer'] = $collar_outer;
}else {
	
	$collar_outer = $_SESSION['collar_outer'];
	
}


$CollarLyr05[4] = $collar_outer;	 
$ShirtLyr09[4] = $collar_outer;


$collar_inner = strtolower($_GET['collar_inner']);



if($collar_inner != '')
{
	
	$_SESSION['collar_inner'] = $collar_inner;	
} else {
	
	$collar_inner = $_SESSION['collar_inner'];
	
}

$CollarLyr04[4] = $collar_inner;	 
$ShirtLyr08[4] = $collar_inner;


include('../refresh_filename.php');

$d = array();
$list = array();

if($CollarLyr01[5]=="Show")	
{
	$lay1 = $CollarLyr01[0];
	
	$list['layer'] = 0;
	$list['path'] = 'img/Collar/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Collar/';
	$d[] = $list;
	
	unset($list);
}

if($CollarLyr02[5]=="Show")
{
	$lay2 = $CollarLyr02[0];
	
	$list['layer'] = 1;
	$list['path'] = 'img/Collar/'.$lay2;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 1;
	$list['path'] = 'img/Collar/';
	$d[] = $list;
	
	unset($list);
}

if($CollarLyr03[5]=="Show")
{
	$lay3 = $CollarLyr03[0];
	
	$list['layer'] = 2;
	$list['path'] = 'img/Collar/'.$lay3;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 2;
	$list['path'] = 'img/Collar/';
	$d[] = $list;
	
	unset($list);
}

if($CollarLyr04[5]=="Show")
{
	$lay4 = $CollarLyr04[0];
	
	$list['layer'] = 3;
	$list['path'] = 'img/Collar/'.$lay4;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 3;
	$list['path'] = 'img/Collar/';
	$d[] = $list;
	
	unset($list);
}

if($CollarLyr05[5]=="Show") 
{
	$lay5 = $CollarLyr05[0];
	
	$list['layer'] = 4;
	$list['path'] = 'img/Collar/'.$lay5;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 4;
	$list['path'] = 'img/Collar/';
	$d[] = $list;
	
	unset($list);
}

if($CollarLyr06[5]=="Show")
{
	$lay6 = $CollarLyr06[0];
	
	$list['layer'] = 5;
	$list['path'] = 'img/Collar/'.$lay6;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 5;
	$list['path'] = 'img/Collar/';
	$d[] = $list;
	
	unset($list);
}

if($CollarLyr07[5]=="Show")
{
	$lay7 = $CollarLyr07[0];
	
	$list['layer'] = 6;
	$list['path'] = 'img/Collar/'.$lay7;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 6;
	$list['path'] = 'img/Collar/';
	$d[] = $list;
	
	unset($list);
}

if($CollarLyr08[5]=="Show")
{
	$lay8 = $CollarLyr08[0];
	
	$list['layer'] = 7;
	$list['path'] = 'img/Collar/'.$lay8;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 70;
	$list['path'] = 'img/Collar/';
	$d[] = $list;
	
	unset($list);
}

if($CollarLyr09[5]=="Show")
{
	$lay9 = $CollarLyr09[0];
	
	$list['layer'] = 8;
	$list['path'] = 'img/Collar/'.$lay9;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 8;
	$list['path'] = 'img/Collar/';
	$d[] = $list;
	
	unset($list);
}
 
// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;
?>