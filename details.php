<?php
session_start();


$_SESSION['details']['gender'] = 'Male';
$_SESSION['details']['Fit'] 		= ($_SESSION['step1a'])?$_SESSION['step1a']:'Regular';
$_SESSION['details']['Sleeve'] 		= ($_SESSION['step1b'])?$_SESSION['step1b']:'Long';
$_SESSION['details']['Base Fabric'] = ($_SESSION['step2_value'])?$_SESSION['step2_value']:'Prive';
$_SESSION['details']['Collar'] 		= ($_SESSION['step3'])?$_SESSION['step3']:'Business';
$_SESSION['details']['Collar Stay'] = ($_SESSION["step3_stayval"])?$_SESSION["step3_stayval"]:'Removable';
$_SESSION['details']['Collar Stiffness'] 	= ($_SESSION["step3_stiffnessval"])?$_SESSION["step3_stiffnessval"]:'Standard';
$_SESSION['details']['Collar Height'] 		= ($_SESSION["step3_height"])?$_SESSION["step3_height"]:'Normal';
$_SESSION['details']['Collar-Outer Fabric'] = ($_SESSION['step11_value'])?$_SESSION['step11_value']:'Prive';
$_SESSION['details']['Collar-Inner Fabric'] = ($_SESSION['step12_value'])?$_SESSION['step12_value']:'Prive';
$_SESSION['details']['Cuff'] 				= ($_SESSION["step4"])?$_SESSION["step4"]:'Single button';
$_SESSION['details']['Cuff Stiffness'] 		= ($_SESSION["step4_stiffness"])?$_SESSION["step4_stiffness"]:'Standard';
$_SESSION['details']['Cuff Placket Buttons']= 'Yes';
$_SESSION['details']['Cuff Style'] 			= ($_SESSION["step4_style"])?$_SESSION["step4_style"]:'Straight';
$_SESSION['details']['Cuff-Outer Fabric'] 	= ($_SESSION['step13_value'])?$_SESSION['step13_value']:'Prive';
$_SESSION['details']['Cuff-Inner Fabric'] 	= ($_SESSION['step14_value'])?$_SESSION['step14_value']:'Prive';
$_SESSION['details']['Button'] 				= ($_SESSION['step5_html'])?$_SESSION['step5_html']:'White';
$_SESSION['details']['Fastening'] 			= ($_SESSION['step6'])?$_SESSION['step6']:'Normal placket';
$_SESSION['details']['Placket-Outer Fabric'] 	= ($_SESSION['step15_html'])?$_SESSION['step15_html']:'Prive';
$_SESSION['details']['Placket-Inner Fabirc'] 	= ($_SESSION['step16_html'])?$_SESSION['step16_html']:'Prive';
$_SESSION['details']['Placket-Flip Side Fabric']= ($_SESSION['step17_html'])?$_SESSION['step17_html']:'Prive';
$_SESSION['details']['Pocket'] 				= ($_SESSION['step7'])?$_SESSION['step7']:'Left pocket';
$_SESSION['details']['Bottom Cut'] 			= ($_SESSION['step8'])?$_SESSION['step8']:'Classic';
$_SESSION['details']['Back Details'] 		= ($_SESSION['step9'])?$_SESSION['step9']:'No back details';
$_SESSION['details']['Back Yoke'] 			= ($_SESSION['step10'])?$_SESSION['step10']:'Classic';
$_SESSION['details']['Button Thread'] 		= ($_SESSION['step18_html'])?$_SESSION['step18_html']:'White';
$_SESSION['details']['Tie Fix'] 			= ($_SESSION['tie_fix_html'])?$_SESSION['tie_fix_html']:'No';
$_SESSION['details']['Handkerchief'] 		= ($_SESSION['handkerchief_html'])?$_SESSION['handkerchief_html']:'No';

	
?>
<style>
table.de tr td {
	padding:2px;
	text-transform:capitalize;	
}
</style>
<div align="center">
<br />
<table cellpadding="2" cellspacing="2" class="de" style="width:360px;text-align:center">
  <tr>
    <td><strong>Gender</strong></td><td>
      <?=$_SESSION['details']['gender']?></td>
  </tr>
  <tr>
    <td><strong>Fit </strong></td><td>
      <?=$_SESSION['details']['Fit']?></td>
  </tr>
  <tr>
    <td><strong>Sleeve </strong></td><td>
      <?=$_SESSION['details']['Sleeve']?></td>
  </tr>
  <tr>
    <td><strong>Base Fabric </strong></td><td>
      <?=$_SESSION['details']['Base Fabric']?></td>
  </tr>
  <tr>
    <td><strong>Collar </strong></td><td>
      <?=$_SESSION['details']['Collar']?></td>
  </tr>
  <tr>
    <td><strong>Collar Stay </strong></td><td>
      <?=$_SESSION['details']['Collar Stay']?></td>
  </tr>
  <tr>
    <td><strong>Collar Stiffness </strong></td><td>
      <?=$_SESSION['details']['Collar Stiffness']?></td>
  </tr>
  <tr>
    <td><strong>Collar Height </strong></td><td>
      <?=$_SESSION['details']['Collar Height']?></td>
  </tr>
  <tr>
    <td><strong>Collar-Outer Fabric </strong></td><td>
      <?=$_SESSION['details']['Collar-Outer Fabric']?></td>
  </tr>
  <tr>
    <td><strong>Collar-Inner Fabric </strong></td><td>
      <?=$_SESSION['details']['Collar-Inner Fabric']?></td>
  </tr>
  <tr>
    <td><strong>Cuff </strong></td><td>
      <?=$_SESSION['details']['Cuff']?></td>
  </tr>
  <tr>
    <td><strong>Cuff Stiffness </strong></td><td>
      <?=$_SESSION['details']['Cuff Stiffness']?></td>
  </tr>
  <tr>
    <td><strong>Cuff Placket Buttons </strong></td><td>
      <?=$_SESSION['details']['Cuff Placket Buttons']?></td>
  </tr>
  <tr>
    <td><strong>Cuff Style </strong></td><td>
      <?=$_SESSION['details']['Cuff Style']?></td>
  </tr>
  <tr>
    <td><strong>Cuff-Outer Fabric </strong></td><td>
      <?=$_SESSION['details']['Cuff-Outer Fabric']?></td>
  </tr>
  <tr>
    <td><strong>Cuff-Inner Fabric </strong></td><td>
      <?=$_SESSION['details']['Cuff-Inner Fabric']?></td>
  </tr>
  <tr>
    <td><strong>Button </strong></td><td>
      <?=$_SESSION['details']['Button']?></td>
  </tr>
  <tr>
    <td><strong>Fastening </strong></td><td>
      <?=$_SESSION['details']['Fastening']?></td>
  </tr>
  <tr>
    <td><strong>Gender</strong></td><td>
      <?=$_SESSION['details']['gender']?></td>
  </tr>
  <tr>
    <td><strong>Placket-Outer Fabric </strong></td><td>
      <?=$_SESSION['details']['Placket-Outer Fabric']?></td>
  </tr>
    </tr>
  
  
    <td><strong>Placket-Inner Fabirc </strong></td><td>
      <?=$_SESSION['details']['Placket-Inner Fabirc']?></td>
  </tr>
    </tr>
  
  
    <td><strong>Placket-Flip Side Fabric </strong></td><td>
      <?=$_SESSION['details']['Placket-Flip Side Fabric']?></td>
  </tr>
    </tr>
  
  
    <td><strong>Pocket </strong></td><td>
      <?=$_SESSION['details']['Pocket']?></td>
  </tr>
    </tr>
  
  
    <td><strong>Bottom Cut </strong></td><td>
      <?=$_SESSION['details']['Bottom Cut']?></td>
  </tr>
    </tr>
  
  
    <td><strong>Back Details </strong></td><td>
      <?=$_SESSION['details']['Back Details']?></td>
  </tr>
    </tr>
  
  
    <td><strong>Back Yoke </strong></td><td>
      <?=$_SESSION['details']['Back Yoke']?></td>
  </tr>
    </tr>
  
  
    <td><strong>Button Thread </strong></td><td>
      <?=$_SESSION['details']['Button Thread']?></td>
  </tr>
    </tr>
  
  
    <td><strong>Tie Fix </strong></td><td>
      <?=$_SESSION['details']['Tie Fix']?></td>
  </tr>
    </tr>
  
  
    <td><strong>Handkerchief </strong></td><td>
      <?=$_SESSION['details']['Handkerchief']?></td>
  </tr>
</table>
</div>
