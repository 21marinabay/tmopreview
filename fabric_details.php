<?
session_start();
include('system/config.php');

$code = ($_SESSION['step2'])?$_SESSION['step2']:'0001';
$sql = "SELECT * from fabricsnew where Filename like '%".$code."%'";
$d = $db->getRow($sql);
?> 	
<style>
.{
	text-transform:capitalize;
}
</style>
<div class="fabricTitle">
    <div style="float:right"><strong>$<?=$d['Base Cost']?></strong><br />
        <span style="font-size:11pt;">per shirt</span>
    </div>
    <span id="faTitle"><?=$d['Label']?></span> 
</div>
<div id="zoomImage" style="height:210px;"> 
    <img class="layz0" id="layz0" style="height:210px;position:absolute;" src="img/Fabric/<?php echo $d['CloseupFilename'];?>" />
</div>

<div>
<div id="popup_content">
    <table>
        <tr>
            <td><strong>Cosmoplitan</strong> <br />
            <?=$d['Composition']?> </td>
            <td><strong>Treatment</strong> <br />
            <?=$d['Treatment']?></td>
        </tr>
        <tr>
            <td><strong>Yarn</strong> <br />
            <?=$d['Yarn']?></td>
            <td><strong>Weaving Information</strong> <br />
            <?=$d['Weaving']?> </td>
        </tr>
        <tr>
            <td><strong>Color Information</strong> <br />
            	<?=$d['Colour-1']?>  <?=$d['Colour-2']?> <?=$d['Colour-3']?> 
            </td>
            <td></td>
        </tr>
    </table>
</div>
</div>
            
