<?
session_start();
include('../../system/config.php');

$key = $_GET['key'];

if($_GET['value'] != "undefined" && $_GET['value'] != "")
{
	$value = $_GET['value'];

	$_SESSION[$key] = strtolower($value);
}

if($key == 'step2')
{
	$_SESSION['step11'] = strtolower($value);
	$_SESSION['step12'] = strtolower($value);
	$_SESSION['step13'] = strtolower($value);
	$_SESSION['step14'] = strtolower($value);
	$_SESSION['step15'] = strtolower($value);
	$_SESSION['step16'] = strtolower($value);
	$_SESSION['step17'] = strtolower($value);
	$_SESSION['step18'] = strtolower($value);
	//$_SESSION['step5'] = strtolower($value);
	
	//SET Default value for thread and button if not selected
	
	$query = "SELECT * FROM fabricsnew WHERE Filename like '%".$_SESSION['step2']."%'";
	print($query);
	error_log($query);
	$d = $db->getAll($query);
	if(!isset($_SESSION['step5']))
	{
		$DefaultButton = $d[0]['MatchingButtonIconNum']; 
		$_SESSION['step5'] = $d[0]['MatchingButtonIconNum'];
		$query1 = "SELECT * FROM Buttonsnew WHERE `Icon Number` like '%".$_SESSION['step5']."%'";
		$d1 = $db->getAll($query1);
		$_SESSION['step5_html'] = $d1[0]['Label'].' <br> $'.$d1[0]['Cost'];
	}
	
	if(!isset($_SESSION['step18']))
	{
		$DefaultFabric = $d[0]['MatchingThreadIconNum'];
		
		$_SESSION['step18'] = $d[0]['MatchingThreadIconNum'];
		$query2 = "SELECT * FROM threads WHERE `Icon Number` like '%".$_SESSION['step18']."%'";
		$d2 = $db->getAll($query2);
		$_SESSION['step18_html'] = $d2[0]['label'].' <br> $'.$d2[0]['Cost'];
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

?>