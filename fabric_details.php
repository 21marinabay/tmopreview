<?
include('system/config.php');

$code = $_GET['code'];
$sql = 'select * from fabrics where code = "'.$code.'"';
$d = $db->getRow($sql);

?> 	

<table>
	<tr>
        <td><strong>Cosmoplitan</strong> <br />
           <?=$d['cosmopolitan']?> </td>
        <td><strong>Treatment</strong> <br />
                    <?=$d['treatment']?></td>
         </tr>
                <tr>
      <td><strong>Yarn</strong> <br />
                    <?=$d['yarn']?></td>
                      <td><strong>Weaving Information</strong> <br />
                    <?=$d['weaving_information']?> </td>
                    </tr>
                <tr>
                      <td><strong>Color Information</strong> <br />
                    <?=$d['color_information']?> </td>
                      <td></td>
                    </tr>
              </table>