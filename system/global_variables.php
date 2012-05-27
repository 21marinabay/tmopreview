<?

// Declare global variables

// End of Declare global variables
// Subroutine - InitialiseVariables()	

session_start();

$DefaultFabric	= "0001" ; 
$DefaultThread	= "0001" ; 
$DefaultButton	= "0001" ;


$BackDetails[1]	= "BackDetails-Closeup-Lyr01-";
$BackDetails[2]	= "";
$BackDetails[3]	= "";
$BackDetails[4]	= $DefaultFabric;
$BackDetails[5]	= "Show";
$BackDetails[0]	=  $BackDetails[1].$BackDetails[2].$BackDetails[3].$BackDetails[4].".png";

$BackYoke[1]	= "BackDetails-Closeup-Lyr01-";
$BackYoke[2]	= "ClassicYoke.";
$BackYoke[3]	= "";
$BackYoke[4]	= $DefaultFabric;
$BackYoke[5]	= "Show";
$BackYoke[0]	= $BackYoke[1].$BackYoke[2].$BackYoke[3].$BackYoke[4].".png";

$ButtonLyr01[1]	= "Button-Closeup-Lyr01-";
$ButtonLyr01[2]	= "Fabric.";
$ButtonLyr01[3]	= "";
$ButtonLyr01[4]	= $DefaultFabric;
$ButtonLyr01[5]	= "Show";
$ButtonLyr01[0]	= $ButtonLyr01[1].$ButtonLyr01[2].$ButtonLyr01[3].$ButtonLyr01[4].".png";

$ButtonLyr02[1]	= "Button-Closeup-Lyr02-";
$ButtonLyr02[2]	= "Thread.";
$ButtonLyr02[3]	= "";
$ButtonLyr02[4]	= $DefaultThread;
$ButtonLyr02[5]	= "Show";
$ButtonLyr02[0]	= $ButtonLyr02[1].$ButtonLyr02[2].$ButtonLyr02[3].$ButtonLyr02[4].".png";

$ButtonLyr03[1]	= "Button-Closeup-Lyr03-";
$ButtonLyr03[2]	= "Button.";
$ButtonLyr03[3]	= "";
$ButtonLyr03[4]	= $DefaultButton;
$ButtonLyr03[5]	= "Show";
$ButtonLyr03[0]	= $ButtonLyr03[1].$ButtonLyr03[2].$ButtonLyr03[3].$ButtonLyr03[4].".png";

$FabricZoomIn[1] = "Fabric-Closeup-";
$FabricZoomIn[2] = "ZoomIn.";
$FabricZoomIn[3] = "";
$FabricZoomIn[4] = $DefaultFabric;
$FabricZoomIn[5]	= "Show";
$FabricZoomIn[0] = $FabricZoomIn[1].$FabricZoomIn[2].$FabricZoomIn[3].$FabricZoomIn[4].".png";

$FabricZoomOut[1] = "Fabric-Closeup-";
$FabricZoomOut[2] = "ZoomOut.";
$FabricZoomOut[3] = "";
$FabricZoomOut[4] = $DefaultFabric;
$FabricZoomOut[5] = "Show";
$FabricZoomOut[0] = $FabricZoomOut[1].$FabricZoomOut[2].$FabricZoomOut[3].$FabricZoomOut[4].".png";

$PlacketLyr01[1]	= "Placket-Closeup-Lyr01-";
$PlacketLyr01[2]	= "Torso.";
$PlacketLyr01[3]	= "";
$PlacketLyr01[4]	= $DefaultFabric;
$PlacketLyr01[5]	= "Show";
$PlacketLyr01[0]	= $PlacketLyr01[1].$PlacketLyr01[2].$PlacketLyr01[3].$PlacketLyr01[4].".png";

$PlacketLyr02[1]	= "Placket-Closeup-Lyr02-";
$PlacketLyr02[2]	= "NormPlacket";
$PlacketLyr02[3]	= ".";
$PlacketLyr02[4]	= $DefaultFabric;
$PlacketLyr02[5]	= "Show";
$PlacketLyr02[0]	= $PlacketLyr02[1].$PlacketLyr02[2].$PlacketLyr02[3].$PlacketLyr02[4].".png";
$PlacketLyr03[1]	= "Placket-Closeup-Lyr03-";
$PlacketLyr03[2]	= "Thread.";
$PlacketLyr03[3]	= "";
$PlacketLyr03[4]	= $DefaultThread;
$PlacketLyr03[5]	= "Show";
$PlacketLyr03[0]	= $PlacketLyr03[1].$PlacketLyr03[2].$PlacketLyr03[3].$PlacketLyr03[4].".png";

$PlacketLyr04[1]	= "Placket-Closeup-Lyr04-";
$PlacketLyr04[2]	= "Button.";
$PlacketLyr04[3]	= "";
$PlacketLyr04[4]	= $DefaultButton;
$PlacketLyr04[5]	= "Show";
$PlacketLyr04[0]	= $PlacketLyr04[1].$PlacketLyr04[2].$PlacketLyr04[3].$PlacketLyr04[4].".png";

$PlacketContrastLyr01[1] = "PlacketContrast-Closeup-Lyr01-";
$PlacketContrastLyr01[2] = "Torso.";
$PlacketContrastLyr01[3] = "";
$PlacketContrastLyr01[4] = $DefaultFabric;
$PlacketContrastLyr01[5] = "Show";
$PlacketContrastLyr01[0] = $PlacketContrastLyr01[1].$PlacketContrastLyr01[2].$PlacketContrastLyr01[3].$PlacketContrastLyr01[4].".png";

$PlacketContrastLyr02[1] = "PlacketContrast-Closeup-Lyr02-";
$PlacketContrastLyr02[2] = "Inner.";
$PlacketContrastLyr02[3] = "";
$PlacketContrastLyr02[4] = $DefaultFabric;
$PlacketContrastLyr02[5] = "Show";
$PlacketContrastLyr02[0] = $PlacketContrastLyr02[1].$PlacketContrastLyr02[2].$PlacketContrastLyr02[3].$PlacketContrastLyr02[4].".png";

$PlacketContrastLyr03[1] = "PlacketContrast-Closeup-Lyr03-";
$PlacketContrastLyr03[2] = "Flip.";
$PlacketContrastLyr03[3] = "";
$PlacketContrastLyr03[4] = $DefaultFabric;
$PlacketContrastLyr03[5] = "Show";
$PlacketContrastLyr03[0] = $PlacketContrastLyr03[1].$PlacketContrastLyr03[2].$PlacketContrastLyr03[3].$PlacketContrastLyr03[4].".png";

$PlacketContrastLyr04[1] = "PlacketContrast-Closeup-Lyr04-";
$PlacketContrastLyr04[2] = "Outer";
$PlacketContrastLyr04[3] = ".";
$PlacketContrastLyr04[4] = $DefaultFabric;
$PlacketContrastLyr04[5] = "Show";
$PlacketContrastLyr04[0] = $PlacketContrastLyr04[1].$PlacketContrastLyr04[2].$PlacketContrastLyr04[3].$PlacketContrastLyr04[4].".png";

$PlacketContrastLyr05[1] = "PlacketContrast-Closeup-Lyr05-";
$PlacketContrastLyr05[2] = "Thread.";
$PlacketContrastLyr05[3] = "";
$PlacketContrastLyr05[4] = $DefaultFabric;
$PlacketContrastLyr05[5] = "Show";
$PlacketContrastLyr05[0] = $PlacketContrastLyr05[1].$PlacketContrastLyr05[2].$PlacketContrastLyr05[3].$PlacketContrastLyr05[4].".png";

$PlacketContrastLyr06[1] = "PlacketContrast-Closeup-Lyr06-";
$PlacketContrastLyr06[2] = "Button.";
$PlacketContrastLyr06[3] = "";
$PlacketContrastLyr06[4] = $DefaultButton;
$PlacketContrastLyr06[5] = "Show";

$PlacketContrastLyr06[0] = $PlacketContrastLyr06[1].$PlacketContrastLyr06[2].$PlacketContrastLyr06[3].$PlacketContrastLyr06[4].".png";

$TieFixLyr01[1]	= "TieFix-Closeup-Lyr01-";
$TieFixLyr01[2]	= "Torso.";
$TieFixLyr01[3]	= "";
$TieFixLyr01[4]	= $DefaultFabric;
$TieFixLyr01[5]	= "Show";
$TieFixLyr01[0]	= $TieFixLyr01[1].$TieFixLyr01[2].$TieFixLyr01[3].$TieFixLyr01[4].".png";

$TieFixLyr02[1]	= "TieFix-Closeup-Lyr02-";
$TieFixLyr02[2]	= "NormPlacket";
$TieFixLyr02[3]	= ".";
$TieFixLyr02[4]	= $DefaultFabric;
$TieFixLyr02[5]	= "Show";
$TieFixLyr02[0]	= $TieFixLyr02[1].$TieFixLyr02[2].$TieFixLyr02[3].$TieFixLyr02[4].".png";

$TieFixLyr03[1]	= "TieFix-Closeup-Lyr03-";
$TieFixLyr03[2]	= "Fix.";
$TieFixLyr03[3]	= "";
$TieFixLyr03[4]	= $DefaultFabric;
$TieFixLyr03[5]	= "Show";
$TieFixLyr03[0]	= $TieFixLyr03[1].$TieFixLyr03[2].$TieFixLyr03[3].$TieFixLyr03[4].".png";

$TieFixLyr04[1]	= "TieFix-Closeup-Lyr04-";
$TieFixLyr04[2]	= "Thread.";
$TieFixLyr04[3]	= "";
$TieFixLyr04[4]	= $DefaultThread;
$TieFixLyr04[5]	= "Show";
$TieFixLyr04[0]	= $TieFixLyr04[1].$TieFixLyr04[2].$TieFixLyr04[3].$TieFixLyr04[4].".png";

$TieFixLyr05[1]	= "TieFix-Closeup-Lyr05-";
$TieFixLyr05[2]	= "Button.";
$TieFixLyr05[3]	= "";
$TieFixLyr05[4]	= $DefaultButton;
$TieFixLyr05[5]	= "Show";
$TieFixLyr05[0]	= $TieFixLyr05[1].$TieFixLyr05[2].$TieFixLyr05[3].$TieFixLyr05[4].".png";

$CollarLyr01[1]	= "Collar-Closeup-Lyr01-";
$CollarLyr01[2]	= "Torso.";
$CollarLyr01[3]	= "";
$CollarLyr01[4]	= $DefaultFabric;
$CollarLyr01[5]	= "Show";
$CollarLyr01[0]	= $CollarLyr01[1].$CollarLyr01[2].$CollarLyr01[3].$CollarLyr01[4].".png";

$CollarLyr02[1]	= "Collar-Closeup-Lyr02-";
$CollarLyr02[2]	= "";
$CollarLyr02[3]	= "";
$CollarLyr02[4]	= $DefaultFabric;
$CollarLyr02[5]	= "Hide";
$CollarLyr02[0]	= $CollarLyr02[1].$CollarLyr02[2].$CollarLyr02[3].$CollarLyr02[4].".png";

$CollarLyr03[1]	= "Collar-Closeup-Lyr03-";
$CollarLyr03[2]	= "PlacketNorm";
$CollarLyr03[3]	= ".";
$CollarLyr03[4]	= $DefaultFabric;
$CollarLyr03[5]	= "Show";
$CollarLyr03[0]	= $CollarLyr03[1].$CollarLyr03[2].$CollarLyr03[3].$CollarLyr03[4].".png";

$CollarLyr04[1]	= "Collar-Closeup-Lyr04-";
$CollarLyr04[2]	= "Norm";
$CollarLyr04[3]	= "Classic-Inner.";
$CollarLyr04[4]	= $DefaultFabric;
$CollarLyr04[5]	= "Show";
$CollarLyr04[0]	= $CollarLyr04[1].$CollarLyr04[2].$CollarLyr04[3].$CollarLyr04[4].".png";

$CollarLyr05[1]	= "Collar-Closeup-Lyr05-";
$CollarLyr05[2]	= "Norm";
$CollarLyr05[3]	= "Classic-Outer.";
$CollarLyr05[4]	= "0002";
$CollarLyr05[5]	= "Show";
$CollarLyr05[0]	= $CollarLyr05[1].$CollarLyr05[2].$CollarLyr05[3].$CollarLyr05[4].".png";

$CollarLyr06[1]	= "Collar-Closeup-Lyr06-";
$CollarLyr06[2]	= "Norm";
$CollarLyr06[3]	= "Classic-Thread.";
$CollarLyr06[4]	= $DefaultThread;
$CollarLyr06[5]	= "Show";
$CollarLyr06[0]	= $CollarLyr06[1].$CollarLyr06[2].$CollarLyr06[3].$CollarLyr06[4].".png";

$CollarLyr07[1]	= "Collar-Closeup-Lyr07-";
$CollarLyr07[2]	= "Norm";
$CollarLyr07[3]	= "Classic-Button.";
$CollarLyr07[4]	= $DefaultButton;
$CollarLyr07[5]	= "Show";
$CollarLyr07[0]	= $CollarLyr07[1].$CollarLyr07[2].$CollarLyr07[3].$CollarLyr07[4].".png";

$CollarLyr08[1]	= "Collar-Closeup-Lyr08-";
$CollarLyr08[2]	= "PlacketThread.";
$CollarLyr08[3]	= "";
$CollarLyr08[4]	= $DefaultThread;
$CollarLyr08[5]	= "Show";
$CollarLyr08[0]	= $CollarLyr08[1].$CollarLyr08[2].$CollarLyr08[3].$CollarLyr08[4].".png";

$CollarLyr09[1]	= "Collar-Closeup-Lyr09-";
$CollarLyr09[2]	= "PlacketButton.";
$CollarLyr09[3]	= "";
$CollarLyr09[4]	= $DefaultButton;
$CollarLyr09[5]	= "Show";
$CollarLyr09[0]	= $CollarLyr09[1].$CollarLyr09[2].$CollarLyr09[3].$CollarLyr09[4].".png";

$CuffShortLyr01[1] = “CuffShort-Closeup-Lyr01-“;
$CuffShortLyr01[2] = ”Torso.”;
$CuffShortLyr01[3] = ””;
$CuffShortLyr01[4] = $DefaultFabric;
$CuffShortLyr01[5] =”Show”;
$CuffShortLyr01[0] = $CuffShortLyr01[1].$CuffShortLyr01[2].$CuffShortLyr01[3].$CuffShortLyr01[4].“.png”;

$CuffShortLyr02[1] = “CuffShort-Closeup-Lyr02-“;
$CuffShortLyr02[2] = ”Pocket.”;
$CuffShortLyr02[3] = ””;
$CuffShortLyr02[4] = $DefaultFabric;
$CuffShortLyr02[5] = ”Show”;
$CuffShortLyr02[0] = $CuffShortLyr02[1].$CuffShortLyr02[2].$CuffShortLyr02[3].$CuffShortLyr02[4].“.png”;

$CuffShortLyr03[1] = “CuffShort-Closeup-Lyr03-“;
$CuffShortLyr03[2] = ”Sleeve.”;
$CuffShortLyr03[3] = ””;
$CuffShortLyr03[4] = $DefaultFabric;
$CuffShortLyr03[5] = ”Show”;
$CuffShortLyr03[0] = $CuffShortLyr03[1].$CuffShortLyr03[2].$CuffShortLyr03[3].$CuffShortLyr03[4].“.png”;

$CuffShortLyr04[1] = “CuffShort-Closeup-Lyr04-“;
$CuffShortLyr04[2] = ”Outer.”;
$CuffShortLyr04[3] = ””;
$CuffShortLyr04[4] = $DefaultFabric;
$CuffShortLyr04[5] = ”Show”;
$CuffShortLyr04[0] = $CuffShortLyr04[1].$CuffShortLyr04[2].$CuffShortLyr04[3].$CuffShortLyr04[4].“.png”;

$CuffShortLyr05[1] = “CuffShort-Closeup-Lyr05-“;
$CuffShortLyr05[2] = ”Inner.”;
$CuffShortLyr05[3] = ””;
$CuffShortLyr05[4] = $DefaultFabric;
$CuffShortLyr05[5] = ”Show”;
$CuffShortLyr05[0] = $CuffShortLyr05[1].$CuffShortLyr05[2].$CuffShortLyr05[3].$CuffShortLyr05[4].“.png”;


$CuffLyr01[1]	= "Cuff-Closeup-Lyr00-";
$CuffLyr01[2]	= "Shirt.";
$CuffLyr01[3]	= "";
$CuffLyr01[4]	= $DefaultFabric;
$CuffLyr01[5] 	= "Show";
$CuffLyr01[0]	= $CuffLyr01[1].$CuffLyr01[2].$CuffLyr01[3].$CuffLyr01[4].".png";

$CuffLyr02[1]	= "Cuff-Closeup-Lyr01-";
$CuffLyr02[2]	= "Str";
$CuffLyr02[3]	= "SingButton-Outer.";
$CuffLyr02[4]	= $DefaultFabric;
$CuffLyr02[5] 	= "Show";
$CuffLyr02[0]	= $CuffLyr02[1].$CuffLyr02[2].$CuffLyr02[3].$CuffLyr02[4].".png";

$CuffLyr03[1]	= "Cuff-Closeup-Lyr02-";
$CuffLyr03[2]	= "Str";
$CuffLyr03[3]	= "SingButton-Inner.";
$CuffLyr03[4]	= $DefaultFabric;
$CuffLyr03[5] 	= "Show";
$CuffLyr03[0]	= $CuffLyr03[1].$CuffLyr03[2].$CuffLyr03[3].$CuffLyr03[4].".png";

$CuffLyr04[1]	= "Cuff-Closeup-Lyr03-";
$CuffLyr04[2]	= "Str";
$CuffLyr04[3]	= "SingButton-Thread.";
$CuffLyr04[4]	= $DefaultThread;
$CuffLyr04[5] 	= "Show";
$CuffLyr04[0]	= $CuffLyr04[1].$CuffLyr04[2].$CuffLyr04[3].$CuffLyr04[4].".png";

$CuffLyr05[1]	= "Cuff-Closeup-Lyr04-";
$CuffLyr05[2]	= "Str";
$CuffLyr05[3]	= "SingButton-Button.";
$CuffLyr05[4]	= $DefaultButton;
$CuffLyr05[5] 	= "Show";
$CuffLyr05[0]	= $CuffLyr05[1].$CuffLyr05[2].$CuffLyr05[3].$CuffLyr05[4].".png";

$ShirtLyr01[1]	= "Shirt-Wide-Lyr01-";
$ShirtLyr01[2]	= "Torso-Norm";
$ShirtLyr01[3]	= "ClassicBot.";
$ShirtLyr01[4]	= $DefaultFabric;
$ShirtLyr01[5] 	= "Show";
$ShirtLyr01[0]	= $ShirtLyr01[1].$ShirtLyr01[2].$ShirtLyr01[3].$ShirtLyr01[4].".png";

$ShirtLyr02[1]	= "Shirt-Wide-Lyr02-";
$ShirtLyr02[2]	= "";
$ShirtLyr02[3]	= "";
$ShirtLyr02[4]	= $DefaultFabric;
$ShirtLyr02[5] 	= "Hide";
$ShirtLyr02[0]	= $ShirtLyr02[1].$ShirtLyr02[2].$ShirtLyr02[3].$ShirtLyr02[4].".png";

$ShirtLyr03[1]	= "Shirt-Wide-Lyr03-";
$ShirtLyr03[2]	= "NormPlacket";
$ShirtLyr03[3]	= ".";
$ShirtLyr03[4]	= $DefaultFabric; 
$ShirtLyr03[5] 	= "Show";
$ShirtLyr03[0]	= $ShirtLyr03[1].$ShirtLyr03[2].$ShirtLyr03[3].$ShirtLyr03[4].".png";

$ShirtLyr04[1]	= "Shirt-Wide-Lyr04-";
$ShirtLyr04[2]	= "LeftPocket.";
$ShirtLyr04[3]	= "";
$ShirtLyr04[4]	= $DefaultFabric;
$ShirtLyr04[5] 	= "Show";
$ShirtLyr04[0]	= $ShirtLyr04[1].$ShirtLyr04[2].$ShirtLyr04[3].$ShirtLyr04[4].".png";

$ShirtLyr05[1]	= "Shirt-Wide-Lyr05-";
$ShirtLyr05[2]	= "Norm";
$ShirtLyr05[3]	= "LongSleeve.";
$ShirtLyr05[4]	= $DefaultFabric;
$ShirtLyr05[5] 	= "Show";
$ShirtLyr05[0]	= $ShirtLyr05[1].$ShirtLyr05[2].$ShirtLyr05[3].$ShirtLyr05[4].".png";

$ShirtLyr06[1]	= "Shirt-Wide-Lyr06-";
$ShirtLyr06[2]	= "PlacketThread.";
$ShirtLyr06[3]	= "";
$ShirtLyr06[4]	= $DefaultThread;
$ShirtLyr06[5] 	= "Show";
$ShirtLyr06[0]	= $ShirtLyr06[1].$ShirtLyr06[2].$ShirtLyr06[3].$ShirtLyr06[4].".png";

$ShirtLyr07[1]	= "Shirt-Wide-Lyr07-";
$ShirtLyr07[2]	= "PlacketButton.";
$ShirtLyr07[3]	= "";
$ShirtLyr07[4]	= $DefaultButton;
$ShirtLyr07[5] 	= "Show";
$ShirtLyr07[0]	= $ShirtLyr07[1].$ShirtLyr07[2].$ShirtLyr07[3].$ShirtLyr07[4].".png";

$ShirtLyr08[1]	= "Shirt-Wide-Lyr08-";
$ShirtLyr08[2]	= "Collar-Norm";
$ShirtLyr08[3]	= "Classic-Inner.";
$ShirtLyr08[4]	= $DefaultFabric;
$ShirtLyr08[5] 	= "Show";
$ShirtLyr08[0]	= $ShirtLyr08[1].$ShirtLyr08[2].$ShirtLyr08[3].$ShirtLyr08[4].".png";

$ShirtLyr09[1]	= "Shirt-Wide-Lyr09-";
$ShirtLyr09[2]	= "Collar-Norm";
$ShirtLyr09[3]	= "Classic-Outer.";
$ShirtLyr09[4]	= $DefaultFabric;
$ShirtLyr09[5] 	= "Show";
$ShirtLyr09[0]	= $ShirtLyr09[1].$ShirtLyr09[2].$ShirtLyr09[3].$ShirtLyr09[4].".png";

$ShirtLyr10[1]	= "Shirt-Wide-Lyr10-";
$ShirtLyr10[2]	= "Collar-Norm";
$ShirtLyr10[3]	= "Classic-Thread.";
$ShirtLyr10[4]	= $DefaultThread;
$ShirtLyr10[5] 	= "Show";
$ShirtLyr10[0]	= $ShirtLyr10[1].$ShirtLyr10[2].$ShirtLyr10[3].$ShirtLyr10[4].".png";

$ShirtLyr11[1]	= "Shirt-Wide-Lyr11-";
$ShirtLyr11[2]	= "Collar-Norm";
$ShirtLyr11[3]	= "Classic-Button.";
$ShirtLyr11[4]	= $DefaultButton;
$ShirtLyr11[5] 	= "Show";
$ShirtLyr11[0]	= $ShirtLyr11[1].$ShirtLyr11[2].$ShirtLyr11[3].$ShirtLyr11[4].".png";

$ShirtLyr12[1]	= "Shirt-Wide-Lyr12-";
$ShirtLyr12[2]	= "Cuff-Str";
$ShirtLyr12[3]	= "SingButton-Outer.";
$ShirtLyr12[4]	= $DefaultFabric;
$ShirtLyr12[5] 	= "Show";
$ShirtLyr12[0]	= $ShirtLyr12[1].$ShirtLyr12[2].$ShirtLyr12[3].$ShirtLyr12[4].".png";

$ShirtLyr13[1]	= "Shirt-Wide-Lyr13-";
$ShirtLyr13[2]	= "Cuff-Str";
$ShirtLyr13[3]	= "SingButton-Inner.";
$ShirtLyr13[4]	= $DefaultFabric;
$ShirtLyr13[5] 	= "Show";
$ShirtLyr13[0]	= $ShirtLyr13[1].$ShirtLyr13[2].$ShirtLyr13[3].$ShirtLyr13[4].".png";

$ShirtLyr14[1]	= "Shirt-Wide-Lyr14-";
$ShirtLyr14[2]	= "Cuff-Str";
$ShirtLyr14[3]	= "SingButton-Thread.";
$ShirtLyr14[4]	= $DefaultThread;
$ShirtLyr14[5] 	= "Show";
$ShirtLyr14[0]	= $ShirtLyr14[1].$ShirtLyr14[2].$ShirtLyr14[3].$ShirtLyr14[4].".png";

$ShirtLyr15[1]	= "Shirt-Wide-Lyr15-";
$ShirtLyr15[2]	= "Cuff-Str";
$ShirtLyr15[3]	= "SingButton-Button.";
$ShirtLyr15[4]	= $DefaultButton;
$ShirtLyr15[5] 	= "Show";
$ShirtLyr15[0]	= $ShirtLyr15[1].$ShirtLyr15[2].$ShirtLyr15[3].$ShirtLyr15[4].".png";

$ShirtLyr16[1]	= "Shirt-Wide-Lyr16-";
$ShirtLyr16[2]	= "Cuff-NormRight.";
$ShirtLyr16[3]	= "";
$ShirtLyr16[4]	= $DefaultFabric;
$ShirtLyr16[5] 	= "Show";
$ShirtLyr16[0]	= $ShirtLyr16[1].$ShirtLyr16[2].$ShirtLyr16[3].$ShirtLyr16[4].".png";




$specGender			= “Male”;
$specFit				= “Regular”;
$specSleeve			= “Long”;
$specBaseFabric			= “Bilbao”;
$specCollar			= “Business”;
$specCollarStay			= “Removable”;
$specCollarStiffness		= “Standard”;
$specCollarHeight			= “Normal”;
$specCollarOuterFabric		= “Bilbao”;
$specCollarInnerFabric		= “Bilbao”;
$specCuff				= “Single button”;
$specCuffStiffness			= “Standard”;
$specCuffPlacketButtons		= “Yes”;
$specCuffStyle			= “Straight”;
$specCuffOuterFabric		= “Bilbao”;
$specCuffInnerFabric		= “Bilbao”;
$specButton			= “White”;
$specFastening			= “Normal placket”;
$specPlacketOuterFabric		= “Bilbao”;
$specPlacketInnerFabric		= “Bilbao”;
$specPlacketFlipSideFabric		= “Bilbao”;
$specPocket			= “Left pocket”;
$specBottomCut			= “Classic”;
$specBackDetails			= “No back details”;
$specBackYoke			= “Classic”;
$specButtonThread		= “Splashed White”;
$specTieFix			= “No”;
$specHandkerchief		= “No”;
$specMeasurement		= “";
$specBaseFabricCode		= “JT7015-65/13”;
$specCollarOuterFabricCode	= “JT7015-65/13”;
$specCollarInnerFabricCode	= “JT7015-65/13”;
$specCuffOuterFabricCode		= “JT7015-65/13”;
$specCuffInnerFabricCode		= “JT7015-65/13”;
$specButtonCode			= “B002”;
$specPlacketOuterFabricCode	= “JT7015-65/13”;
$specPlacketInnerFabricCode	= “JT7015-65/13”;
$specPlacketFlipSideFabricCode	= “JT7015-65/13”;
$specButtonThreadCode		= “T1740”;
$specStandardSize			=0;
$specShirtMeasurementUnit	=“”;
$specShirtCollar			=0;
$specShirtChest			=0;
$specShirtWaist			=0;
$specShirtLengthtoWaist		=0;
$specShirtBottomWidth		=0;
$specShirtLength			= 0;
$specShirtShoulderWidth		=0;
$specShirtLongSleeveUpper	=0;
$specShirtLong SleeveLower	=0;
$specShirtShort SleeveUpper	=0;
$specShirtShort SleeveLower	=0;
$specShirtCuff			=0;
$specShirtSleeveWidth		=0;
$specShirtShortSleeveOpening	=0;
$specBodyMeasurementUnit	=“”;
$specBodyNeck			=0;
$specBodyChest			=0;
$specBodyLengthtoWaist		=0;
$specBodyShoulderWidth		=0;
$specBodySeat			=0;
$specBodyLengthtoSeat		=0;
$specBodyShirtLength		=0;
$specBodyArmLength		= 0;
$specBodyShortSleeveLength	=0;
$specBodyWrist			= 0;
$specBodyBiceps			= 0;
$specBodyArmpit			= 0;

$costBaseFabric		= 69.9;
$costCollarOuterFabric	= 0.00;
$costCollarInnerFabric	= 0.00;
$costCuffOuterFabric	= 0.00;
$costCuffInnerFabric	= 0.00;
$costButton		= 0.00;
$costPlacketOuterFabric	= 0.00;
$costPlacketInnerFabric	= 0.00;
$costPlacketFlipSideFabric	= 0.00;
$costBackYoke		= 0.00;
$costThread		= 0.00;
$costTieFix		= 0.00;
$costHandkerchief		= 0.00;
$costTotal		= 69.9;



// End of Subroutine : InitialiseVariables()

$note ='';

?>