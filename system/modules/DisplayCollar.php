<?

include('../global_variables.php');
include('../current_setting.php');


$collar = $_SESSION['step3'];

if($collar == '')
		$collar = 'business';

switch ($collar) {
    case 'business':	
		
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm";
		$CollarLyr06[2] = "Norm";
		$CollarLyr07[2] = "Norm";
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

		
		$CollarLyr04[3] = "Classic-Inner.";
		$CollarLyr05[3] = "Classic-Outer.";	 
		$CollarLyr06[3] = "Classic-Thread.";	 
		$CollarLyr07[3] = "Classic-Button.";	
		$ShirtLyr08[3] = "Classic-Inner.";
		$ShirtLyr09[3] = "Classic-Outer.";	
		$ShirtLyr10[3] = "Classic-Thread.";	
		$ShirtLyr11[3] = "Classic-Button.";	
        break;
    case 'full-spread':	
	
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

		$CollarLyr04[3] = "Fullspread-Inner.";
		$CollarLyr05[3] = "Fullspread-Outer.";	 
		$CollarLyr06[3] = "Fullspread-Thread.";	 
		$CollarLyr07[3] = "Fullspread-Button.";	
		$ShirtLyr08[3] = "Fullspread-Inner.";
		$ShirtLyr09[3] = "Fullspread-Outer.";	
		$ShirtLyr10[3] = "Fullspread-Thread.";	
		$ShirtLyr11[3] = "Fullspread-Button.";
        break;
    case 'cut away':
	
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

		$CollarLyr04[3] = "Cutaway-Inner.";
		$CollarLyr05[3] = "Cutaway-Outer.";	 
		$CollarLyr06[3] = "Cutaway-Thread.";	 
		$CollarLyr07[3] = "Cutaway-Button.";
        break;
		
    case 'mini':	
	
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

		$CollarLyr04[3] = "Mini-Inner.";
		$CollarLyr05[3] = "Mini-Outer.";	 
		$CollarLyr06[3] = "Mini-Thread.";	 
		$CollarLyr07[3] = "Mini-Button.";	
        break;
		
    case 'long sleeve':	
	
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

		$CollarLyr04[3] = "LongSleeve-Inner.";
		$CollarLyr05[3] = "LongSleeve-Outer.";	 
		$CollarLyr06[3] = "LongSleeve-Thread.";	 
		$CollarLyr07[3] = "LongSleeve-Button.";	
        break;
    case 'button down':
	
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

		$CollarLyr04[3] = "ButtonDown-Inner.";
		$CollarLyr05[3] = "ButtonDown-Outer.";	 
		$CollarLyr06[3] = "ButtonDown-Thread.";	 
		$CollarLyr07[3] = "ButtonDown-Button.";	
        break;
    case 'hidden button down':	

		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";
	
		$CollarLyr04[3] = "HiddenButton-Inner.";
		$CollarLyr05[3] = "HiddenButton-Outer.";	 
		$CollarLyr06[3] = "HiddenButton-Thread.";	 
		$CollarLyr07[3] = "HiddenButton-Button.";
        break;
    case 'round':
	
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

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
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

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
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

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
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";

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


$collar_height = $_SESSION['step3_height'];

switch ($collar_height) {
    case 'normal':			
		$CollarLyr04[2] = "Norm";
		$CollarLyr05[2] = "Norm"; 
		$CollarLyr06[2] = "Norm"; 
		$CollarLyr07[2] = "Norm";
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";
		break;
    case 'high':	
		if($CollarLyr04[3] != "Mao-Inner." && $CollarLyr04[3] != "Tap-Inner." && $CollarLyr04[3] != "Wing-Inner.")
		{
			$CollarLyr04[2] = "High";
			$CollarLyr05[2] = "High";
			$CollarLyr06[2] = "High";
			$CollarLyr07[2] = "High";
			$ShirtLyr08[2] = "Collar-High";
			$ShirtLyr09[2] = "Collar-High";	
			$ShirtLyr10[2] = "Collar-High";
			$ShirtLyr11[2] = "Collar-High";	
		}
		break;
}


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