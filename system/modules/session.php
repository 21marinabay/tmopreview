<?
session_start();

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
	$_SESSION['step5'] = strtolower($value);
}
?>