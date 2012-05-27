<?
include('system/config.php');?>
<? $count = 1; 
              $all = "select * from fabricsnew where Pattern='Checkered'";
$query = $db->getAll($all); 
$query1 = mysql_query($all);
while($row=mysql_fetch_array($query1))
{	
?>	
                <?
					$id = $row['Filename'];
					$newId = substr($id,0,6);
                                        $restofId = substr($id,22,6);
                                        $newWord = $newId.$restofId.'jpg';
				?>
                <? if($count % 12 == 1): ?>
                      <div class ="slide">
                <? endif; ?>
                <div class="imageBox"><img  style="" src="design/fabrics/<? print $newWord;?>" class="img1"  title="<? print $row['Label'];?>" onClick="showfabric('<? print $newWord; ?>');" />
                          <div id="imageTitle2" style="margin-top:15px;"><? print $row['Label'];?><br />
                          $<? print $row['Base Cost']; ?>
                          </div>
                          </div>
                          
                      <? $count ++; ?>
                <? if($count % 12 == 1): ?>
                      </div>
                <? endif; ?>
                <?} ?>