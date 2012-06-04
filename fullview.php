<?

// Declare global variables

// End of Declare global variables
// Subroutine - InitialiseVariables()
error_reporting(1);
ini_set('display_errors',1);

session_start();

include('system/global_variables.php');


$fit = $_SESSION['step1a'];




switch ($fit) {
    case 'slim':	
        $ShirtLyr01[2] = "Torso-Slim";
		$ShirtLyr05[2] = "Slim";
        break;
    case 'regular':	
        $ShirtLyr01[2] = "Torso-Norm";
		$ShirtLyr05[2] = "Norm";
        break;
}

$type = $_SESSION['step1b'];


switch ($type) {
    case 'long':	
		$ShirtLyr05[3] = "LongSleeve.";
		$ShirtLyr05[5] = "Show";
		$ShirtLyr12[5] = "Show";
		$ShirtLyr13[5] = "Show";
		$ShirtLyr14[5] = "Show";
		$ShirtLyr15[5] = "Show";
		$ShirtLyr16[5] = "Show";
        break;
		
    case 'roll-up':	
		$ShirtLyr05[3] = "RollupSleeve.";
		$ShirtLyr05[5] = "Show";
		$ShirtLyr12[5] = "Hide";
		$ShirtLyr13[5] = "Hide";
		$ShirtLyr14[5] = "Hide";
		$ShirtLyr15[5] = "Hide";
		$ShirtLyr16[5] = "Show";
        break;
		
    case 'sleeveless':	
		$ShirtLyr05[5] = "Hide";
		$ShirtLyr12[5] = "Hide";
		$ShirtLyr13[5] = "Hide";
		$ShirtLyr14[5] = "Hide";
		$ShirtLyr15[5] = "Hide";
		$ShirtLyr16[5] = "Hide";
        break;
    case 'short':	 
		$ShirtLyr05[3] = "ShortSleeve.";
		$ShirtLyr05[5] = "Show";
		$ShirtLyr12[5] = "Hide";
		$ShirtLyr13[5] = "Hide";
		$ShirtLyr14[5] = "Hide";
		$ShirtLyr15[5] = "Hide";
		$ShirtLyr16[5] = "Hide";
        break;
    case 'short with normal cuff':
		$ShirtLyr05[3] = "NarrowCuffShortSleeve.";
		$ShirtLyr05[5] = "Show";
		$ShirtLyr12[5] = "Hide";
		$ShirtLyr13[5] = "Hide";
		$ShirtLyr14[5] = "Hide";
		$ShirtLyr15[5] = "Hide";
		$ShirtLyr16[5] = "Hide";
        break;
}


$collar = $_SESSION['step3'];

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
    case 'full-spread':	
		$CollarLyr04[3] = "Fullspread-Inner.";
		$CollarLyr05[3] = "Fullspread-Outer.";	 
		$CollarLyr06[3] = "Fullspread-Thread.";	 
		$CollarLyr07[3] = "Fullspread-Button.";	
		$ShirtLyr08[3] = "Fullspread-Inner.";
		$ShirtLyr09[3] = "Fullspread-Outer.";	
		$ShirtLyr10[3] = "Fullspread-Thread.";	
		$ShirtLyr11[3] = "Fullspread-Button.";
        break;
    case 'semi cut away':
		$CollarLyr04[3] = "Cutaway-Inner.";
		$CollarLyr05[3] = "Cutaway-Outer.";	 
		$CollarLyr06[3] = "Cutaway-Thread.";	 
		$CollarLyr07[3] = "Cutaway-Button.";	
		$ShirtLyr08[3] = "Cutaway-Inner.";
		$ShirtLyr09[3] = "Cutaway-Outer.";	
		$ShirtLyr10[3] = "Cutaway-Thread.";	
		$ShirtLyr11[3] = "Cutaway-Button.";	
        break;
		
    case 'mini':	
		$CollarLyr04[3] = "Mini-Inner.";
		$CollarLyr05[3] = "Mini-Outer.";	 
		$CollarLyr06[3] = "Mini-Thread.";	 
		$CollarLyr07[3] = "Mini-Button.";	
		$ShirtLyr08[3] = "Mini-Inner.";
		$ShirtLyr09[3] = "Mini-Outer.";	
		$ShirtLyr10[3] = "Mini-Thread.";	
		$ShirtLyr11[3] = "Mini-Button.";	
        break;
		
    case 'long sleeve':	
		$CollarLyr04[3] = "LongSleeve-Inner.";
		$CollarLyr05[3] = "LongSleeve-Outer.";	 
		$CollarLyr06[3] = "LongSleeve-Thread.";	 
		$CollarLyr07[3] = "LongSleeve-Button.";	
		$ShirtLyr08[3] = "LongSleeve-Inner.";
		$ShirtLyr09[3] = "LongSleeve-Outer.";	
		$ShirtLyr10[3] = "LongSleeve-Thread.";	
		$ShirtLyr11[3] = "LongSleeve-Button.";
        break;
    case 'button down':	
		$CollarLyr04[3] = "ButtonDown-Inner.";
		$CollarLyr05[3] = "ButtonDown-Outer.";	 
		$CollarLyr06[3] = "ButtonDown-Thread.";	 
		$CollarLyr07[3] = "ButtonDown-Button.";	
		$ShirtLyr08[3] = "ButtonDown-Inner.";
		$ShirtLyr09[3] = "ButtonDown-Outer.";	
		$ShirtLyr10[3] = "ButtonDown-Thread.";	
		$ShirtLyr11[3] = "ButtonDown-Button.";
        break;
    case 'hidden button down':	
		$CollarLyr04[3] = "HiddenButton-Inner.";
		$CollarLyr05[3] = "HiddenButton-Outer.";	 
		$CollarLyr06[3] = "HiddenButton-Thread.";	 
		$CollarLyr07[3] = "HiddenButton-Button.";	
		$ShirtLyr08[3] = "HiddenButton-Inner.";
		$ShirtLyr09[3] = "HiddenButton-Outer.";	
		$ShirtLyr10[3] = "HiddenButton-Thread.";	
		$ShirtLyr11[3] = "HiddenButton-Button.";
        break;
    case 'round':	
		$CollarLyr04[3] = "Rounded-Inner.";
		$CollarLyr05[3] = "Rounded-Outer.";	 
		$CollarLyr06[3] = "Rounded-Thread.";	 
		$CollarLyr07[3] = "Rounded-Button.";	
		$ShirtLyr08[3] = "Rounded-Inner.";
		$ShirtLyr09[3] = "Rounded-Outer.";	
		$ShirtLyr10[3] = "Rounded-Thread.";	
		$ShirtLyr11[3] = "Rounded-Button.";
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
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";
		$ShirtLyr08[3] = "Mao-Inner.";
		$ShirtLyr09[3] = "Mao-Outer.";	
		$ShirtLyr10[3] = "Mao-Thread.";	
		$ShirtLyr11[3] = "Mao-Button.";	
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
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";
		$ShirtLyr08[3] = "Wing-Inner.";
		$ShirtLyr09[3] = "Wing-Outer.";	
		$ShirtLyr10[3] = "Wing-Thread.";	
		$ShirtLyr11[3] = "Wing-Button.";
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
		$ShirtLyr08[2] = "Collar-Norm";
		$ShirtLyr09[2] = "Collar-Norm";	
		$ShirtLyr10[2] = "Collar-Norm";
		$ShirtLyr11[2] = "Collar-Norm";
		$ShirtLyr08[3] = "Tap-Inner.";
		$ShirtLyr09[3] = "Tap-Outer.";	
		$ShirtLyr10[3] = "Tap-Thread.";	
		$ShirtLyr11[3] = "Tap-Button.";
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



$icon_num = $_SESSION['step2'];


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

$thread_num = $_SESSION['step18'];

if($thread_num != '' )
{
	
	// Note : Number the thread icon in running number from 0001 onwards (ie. 0001, 0002, … , 0031)
	$ButtonLyr02[4] = $thread_num;	
	$PlacketLyr03[4] = $thread_num;	
	$PlacketContrastLyr05[4] = $thread_num;
	$TieFixLyr04[4] = $thread_num;	
	$CollarLyr06[4] = $thread_num;
	$CollarLyr08[4] = $thread_num;
	$CuffLyr04[4] = $thread_num;	
	$ShirtLyr06[4] = $thread_num; 
	$ShirtLyr10 [4] = $thread_num;
	$ShirtLyr14[4] = $thread_num; 

}



$pocket = $_SESSION['step7'];

if($pocket != '')
{
		
		switch ($pocket) {
    case 'no pocket':	
		$ShirtLyr04[5] = "Hide";
        break;
    case 'left pocket':	
		$ShirtLyr04[5] = "Show";
        break;
    case 'both':	
		$ShirtLyr04[5] = "Show";
		$ShirtLyr04[2] = "BothPocket.";
        break;
	}
}





$bottom_cut = $_SESSION['step8'];

if($bottom_cut != '')
{

	switch ($bottom_cut) {
		case 'classic':	
			$ShirtLyr01[3] = "ClassicBot.";
			break;
		case 'modern':	
			$ShirtLyr01[3] = "ModernBot.";
			break;
		case 'straight':	
			$ShirtLyr01[3] = "StrBot.";
			break;
	}	
}




$cuff = $_SESSION['step4'];

if($cuff == '')
{
	$cuff = 'single button';
}

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
		$CuffLyr02[3] = "SingButton-Outer.";
		$CuffLyr03[3] = "SingButton-Inner.";
		$CuffLyr04[3] = "SingButton-Thread.";
		$CuffLyr05[3] = "SingButton-Button.";
		$ShirtLyr12[3] = "SingButton-Outer.";
		$ShirtLyr13[3] = "SingButton-Inner.";
	$ShirtLyr14[3] = "SingButton-Thread.";
		$ShirtLyr15[3] = "SingButton-Button.";
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



$cuff_style = $_SESSION['step4_style'];

switch ($cuff_style) {
    case 'beveled':			
		$CuffLyr02[2] = "Bev";
		$CuffLyr03[2] = "Bev";
		$CuffLyr04[2] = "Bev";
		$CuffLyr05[2] = "Bev";
		$ShirtLyr12[2] = "Cuff-Bev";
		$ShirtLyr13[2] = "Cuff-Bev";
		$ShirtLyr14[2] = "Cuff-Bev";
		$ShirtLyr15[2] = "Cuff-Bev";
		break;
    case 'round':			
		if($CuffLyr02[2] != "Neapolitan")
		$CuffLyr02[2] = "Rd";
		$CuffLyr03[2] = "Rd";
		$CuffLyr04[2] = "Rd";
		$CuffLyr05[2] = "Rd";
		$ShirtLyr12[2] = "Cuff-Rd";
		$ShirtLyr13[2] = "Cuff-Rd";
		$ShirtLyr14[2] = "Cuff-Rd";
		$ShirtLyr15[2] = "Cuff-Rd";
		break;
    case 'straight':			
		if($CuffLyr02[2] != "Neapolitan")
		$CuffLyr02[2] = "Str";
		$CuffLyr03[2] = "Str";
		$CuffLyr04[2] = "Str";
		$CuffLyr05[2] = "Str";
		$ShirtLyr12[2] = "Cuff-Str";
		$ShirtLyr13[2] = "Cuff-Str";
		$ShirtLyr14[2] = "Cuff-Str";
		$ShirtLyr15[2] = "Cuff-Str";
		break;
}



$button = $_SESSION['step5'];

if($button != '')
{
		
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
		
}

$fastening = $_SESSION['step6'];

if($fastening == '')
{
	$fastening = 'normal placket';
}



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


$collar_outer = $_SESSION['step11'];

if($collar_outer != '')
{	
	$CollarLyr05[4] = $collar_outer;	 
	$ShirtLyr09[4] = $collar_outer;
}





$collar_inner = $_SESSION['step12'];

if($collar_inner == '')
	$collar_inner = $_SESSION['step2'];

if($collar_inner != '')
{	
	$CollarLyr04[4] = $collar_inner;	 
	$ShirtLyr08[4] = $collar_inner;
}



$cuff_outer = $_SESSION['step13'];

if($cuff_outer == '')
	$cuff_outer = $_SESSION['step2'];

if($cuff_outer != '')
{
	$CuffLyr02[4] = $cuff_outer;	 
	$ShirtLyr12[4] = $cuff_outer;
	$ShirtLyr16[4] = $cuff_outer;
}


$cuff_inner = $_SESSION['step14'];

if($cuff_inner == '')
	$cuff_inner = $_SESSION['step2'];

if($cuff_inner != '')
{
	$CuffLyr03[4] = $cuff_inner;	 
	$ShirtLyr13[4] = $cuff_inner;
}



$placket_outer = $_SESSION['step15'];

if($placket_outer == '')
{
	$placket_outer = $_SESSION['step2'];	
}

if($placket_outer != '')
{
	$PlacketLyr02[4] = $placket_outer;
	$PlacketContrastLyr04[4] = $placket_outer;	
	$ShirtLyr03[4] = $placket_outer;
	$TieFixLyr02[4] = $placket_outer;
	$TieFixLyr03[4] = $placket_outer;
}



$placket_inner = $_SESSION['step16'];

if($placket_inner == '')
{
	$placket_inner = $_SESSION['step2'];	
}


if($placket_inner != '')
{
	$PlacketContrastLyr02[4] = $placket_inner;
}


$flip_num = $_SESSION['step17'];

if($flip_num == '')
{
	$flip_num = $_SESSION['step2'];	
}

if($flip_num != '')
{
	$PlacketContrastLyr03[4] = $flip_num;
}



include('system/refresh_filename.php');

// Subroutine : DisplayFullview()

$d = array();
$list = array();

if($ShirtLyr01[5]=="Show")	
{
	$lay1 = $ShirtLyr01[0];
	
	$list['layer'] = 0;
	$list['path'] = 'img/Shirt/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr02[5]=="Show")
{
	$lay2 = $ShirtLyr02[0];
	
	$list['layer'] = 1;
	$list['path'] = 'img/Shirt/'.$lay2;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 1;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr03[5]=="Show")
{

	$lay3 = $ShirtLyr03[0];
	
	$list['layer'] = 2;
	$list['path'] = 'img/Shirt/'.$lay3;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 2;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr04[5]=="Show")
{
	$lay4 = $ShirtLyr04[0];
	
	$list['layer'] = 3;
	$list['path'] = 'img/Shirt/'.$lay4;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 3;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr05[5]=="Show") 
{
	$lay5 = $ShirtLyr05[0];
	
	$list['layer'] = 4;
	$list['path'] = 'img/Shirt/'.$lay5;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 4;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr06[5]=="Show")
{
	$lay6 = $ShirtLyr06[0];
	
	$list['layer'] = 5;
	$list['path'] = 'img/Shirt/'.$lay6;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 5;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr07[5]=="Show")
{
	$lay7 = $ShirtLyr07[0];
	
	$list['layer'] = 6;
	$list['path'] = 'img/Shirt/'.$lay7;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 6;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr08[5]=="Show")
{
	$lay8 = $ShirtLyr08[0];
	
	$list['layer'] = 7;
	$list['path'] = 'img/Shirt/'.$lay8;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 70;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr09[5]=="Show")
{
	$lay9 = $ShirtLyr09[0];
	
	$list['layer'] = 8;
	$list['path'] = 'img/Shirt/'.$lay9;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 8;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}
 
if($ShirtLyr10[5]=="Show")
{

	$lay10 = $ShirtLyr10[0];
	
	$list['layer'] = 9;
	$list['path'] = 'img/Shirt/'.$lay10;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 9;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}
	
if($ShirtLyr11[5]=="Show")
{
	$lay11 = $ShirtLyr11[0];
	
	$list['layer'] = 10;
	$list['path'] = 'img/Shirt/'.$lay11;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 10;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr12[5]=="Show") 
{
	$lay12 = $ShirtLyr12[0];
	
	$list['layer'] = 11;
	$list['path'] = 'img/Shirt/'.$lay12;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 11;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr13[5]=="Show") 
{
	$lay13 = $ShirtLyr13[0];
	
	$list['layer'] = 12;
	$list['path'] = 'img/Shirt/'.$lay13;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 12;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr14[5]=="Show")
{
	$lay14 = $ShirtLyr14[0];
	
	$list['layer'] = 13;
	$list['path'] = 'img/Shirt/'.$lay14;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 13;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr15[5]=="Show")
{
	$lay15 = $ShirtLyr15[0];
	
	$list['layer'] = 14;
	$list['path'] = 'img/Shirt/'.$lay15;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 14;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

if($ShirtLyr16[5]=="Show")
{
	$lay16 = $ShirtLyr16[0];
	
	$list['layer'] = 15;
	$list['path'] = 'img/Shirt/'.$lay16;
	$d[] = $list;
	
	unset($list);
}else{
	$list['layer'] = 15;
	$list['path'] = 'img/Shirt/';
	$d[] = $list;
	
	unset($list);
}

// End of Subroutine : RefreshFilenames()

$output = json_encode($d);

print $output;

if($PlacketLyr04[5] == 'Hide')
{
	$_SESSION['PlacketLyr04_hidden'] = 1;	
} else {
	$_SESSION['PlacketLyr04_hidden'] = 0;	
	
}


if($ShirtLyr04[5] == 'Hide')
{
	$_SESSION['ShirtLyr04_hidden'] = 1;	
} else {
	$_SESSION['ShirtLyr04_hidden'] = 0;	
	
}
?>