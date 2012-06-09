<?
session_start();
include('../../system/config.php');

$key = $_GET['key'];

if($_GET['value'] != "undefined" && $_GET['value'] != "")
{
	$value = $_GET['value'];

	$_SESSION[$key] = strtolower($value);
}

if($key == 'step5')
{
$ButtonLyr03[4] = strtolower($value);
$PlacketLyr04[4] = strtolower($value);
$PlacketContrastLyr06[4] = strtolower($value);
$TieFixLyr05[4] = strtolower($value);
$CollarLyr07[4] = strtolower($value);
$CollarLyr09[4] = strtolower($value);
$CuffLyr05[4] = strtolower($value);
$ShirtLyr07[4] = strtolower($value);
$ShirtLyr11[4] = strtolower($value);
$ShirtLyr15[4] = strtolower($value);


}

if($key == 'step2')
{
	//Commented by ketul on 9-June-2012 as it reset all when fabric selected
	/*$_SESSION['step11'] = strtolower($value);
	$_SESSION['step12'] = strtolower($value);
	$_SESSION['step13'] = strtolower($value);
	$_SESSION['step14'] = strtolower($value);
	$_SESSION['step15'] = strtolower($value);
	$_SESSION['step16'] = strtolower($value);
	$_SESSION['step17'] = strtolower($value);
	//$_SESSION['step18'] = strtolower($value);
	//$_SESSION['step5'] = strtolower($value);*/
	
	$query = "SELECT * FROM fabricsnew WHERE Filename like '%".$_SESSION['step2']."%'";
	$d = $db->getAll($query);
	$ButtonMatch  = $d[0]['MatchingButtonIconNum'];
	$threadmatch = $d[0]['MatchingThreadIconNum'];
		
	if(!isset($_SESSION['step5']))
	{
		$query1 = "SELECT * FROM Buttonsnew WHERE `Icon Number` like '%".$ButtonMatch."%'";
		$d1 = $db->getAll($query1);
		$_SESSION['step5'] = $ButtonMatch;
		$_SESSION['step5_html'] = $d1[0]['Label'].' <br> $'.$d1[0]['Cost'];
	}

	if(!isset($_SESSION['step18']))
	{
		$query1 = "SELECT * FROM threads WHERE `Icon Number` like '%".$threadmatch."%'";
		$d1 = $db->getAll($query1);
		$_SESSION['step18'] = $threadmatch;
		$_SESSION['step18_html'] = $d1[0]['label'].' <br> $'.$d1[0]['Cost'];
	}

}
if($key == 'measure2')
{
	foreach($_REQUEST as $k=>$v)
	{
		if($k != 'key')
		$_SESSION[$k] = $v;		
	}
}

if($key == 'measure3')
{
	foreach($_REQUEST as $k=>$v)
	{
		if($k != 'key')
		$_SESSION[$k] = $v;		
	}
}

?>