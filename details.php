<?
session_start();

$_SESSION['details']['gender'] = 'Male';
$_SESSION['details']['Fit'] = 'Regular';
$_SESSION['details']['Sleeve'] = 'Long';
$_SESSION['details']['Base Fabric'] = 'Prive';
$_SESSION['details']['Collar'] = 'Business';
$_SESSION['details']['Collar Stay'] = 'Removable';
$_SESSION['details']['Collar Stiffness'] = 'Standard';
$_SESSION['details']['Collar Height'] = 'Normal';
$_SESSION['details']['Collar-Outer Fabric'] = 'Prive';
$_SESSION['details']['Collar-Inner Fabric'] = 'Prive';
$_SESSION['details']['Cuff'] = 'Single button';
$_SESSION['details']['Cuff Stiffness'] = 'Standard';
$_SESSION['details']['Cuff Placket Buttons'] = 'Yes';
$_SESSION['details']['Cuff Style'] = 'Straight';
$_SESSION['details']['Cuff-Outer Fabric'] = 'Prive';
$_SESSION['details']['Cuff-Inner Fabric'] = 'Prive';
$_SESSION['details']['Button'] = 'White';
$_SESSION['details']['Fastening'] = 'Normal placket';
$_SESSION['details']['Placket-Outer Fabric'] = 'Prive';
$_SESSION['details']['Placket-Inner Fabirc'] = 'Prive';
$_SESSION['details']['Placket-Flip Side Fabric'] = 'Prive';
$_SESSION['details']['Pocket'] = 'Left pocket';
$_SESSION['details']['Bottom Cut'] = 'Classic';
$_SESSION['details']['Back Details'] = 'No back details';
$_SESSION['details']['Back Yoke'] = 'Classic';
$_SESSION['details']['Button Thread'] = 'White';
$_SESSION['details']['Tie Fix'] = 'No';
$_SESSION['details']['Handkerchief'] = 'No';
?>
<style>
table.de tr td {
	padding:2px;	
}
</style>
<div align="center"><br />

<table cellpadding="2" cellspacing="2" class="de" style="width:280px;text-align:center">
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
