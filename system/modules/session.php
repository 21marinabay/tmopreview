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
	$_SESSION['step11'] = strtolower($value);
	$_SESSION['step12'] = strtolower($value);
	$_SESSION['step13'] = strtolower($value);
	$_SESSION['step14'] = strtolower($value);
	$_SESSION['step15'] = strtolower($value);
	$_SESSION['step16'] = strtolower($value);
	$_SESSION['step17'] = strtolower($value);
	//$_SESSION['step18'] = strtolower($value);
	//$_SESSION['step5'] = strtolower($value);
	
	print("SET Default value for thread and button if not selected");
	
	$query = "SELECT * FROM fabricsnew WHERE Filename like '%".$_SESSION['step2']."%'";
	
	$d = $db->getAll($query);
	
	$buttonvalue = $_SESSION['step5'];
	
	if($pocket == '')
	{
	
		$ButtonMatch = $d[0]['MatchingButtonIconNum']; 
		$_SESSION['step5'] = $d[0]['MatchingButtonIconNum'];

		$query1 = "SELECT * FROM Buttonsnew WHERE `Icon Number` like '%".$ButtonMatch."%'";
		$d1 = $db->getAll($query1);
		$_SESSION['step5_html'] = $d1[0]['Label'].' <br> $'.$d1[0]['Cost'];
		
		$ButtonLyr03[4]		= $ButtonMatch ;
		$PlacketLyr04[4]		= $ButtonMatch ;
		$PlacketContrastLyr06[4]	= $ButtonMatch ;
		$TieFixLyr05[4] 		= $ButtonMatch ;
		$CollarLyr07[4] 		= $ButtonMatch ;
		$CollarLyr09[4] 		= $ButtonMatch ;
		$CuffLyr05[4] 		= $ButtonMatch ;
		$ShirtLyr07[4] 		= $ButtonMatch ;
		$ShirtLyr11[4] 		= $ButtonMatch ;
		$ShirtLyr15[4] 		= $ButtonMatch ;
		
	}	
		
		$threadmatch = $d[0]['MatchingThreadIconNum'];
		$_SESSION['step18'] = $d[0]['MatchingThreadIconNum'];
		
		$query2 = "SELECT * FROM threads WHERE `Icon Number` like '%".$threadmatch."%'";
		$d2 = $db->getAll($query2);
		$_SESSION['step18_html'] = $d2[0]['label'].' <br> $'.$d2[0]['Cost'];

		
		
		
		$ButtonLyr02[4]		= $threadmatch ;
		$PlacketLyr03[4]		= $threadmatch ;
		$PlacketContrastLyr05[4] = $threadmatch ;
		$TieFixLyr04[4] 		= $threadmatch ;
		$CollarLyr06[4] 		= $threadmatch ;
		$CollarLyr08[4] 		= $threadmatch ;
		$CuffLyr04[4] 		= $threadmatch ;
		$ShirtLyr06[4] 		= $threadmatch ;
		$ShirtLyr10[4] 		= $threadmatch ;
		$ShirtLyr14[4] 		= $threadmatch ;
		
		
		
		
		
		
		
		
		
		
	
	
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