<?
include('system/config.php');

session_start();

function get_client_ip()
{
	$v='';
	$v= (!empty($_SERVER['REMOTE_ADDR']))?$_SERVER['REMOTE_ADDR'] :((!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) ? $_SERVER['HTTP_X_FORWARDED_FOR']: @getenv('REMOTE_ADDR'));
	if(isset($_SERVER['HTTP_CLIENT_IP']))
	$v=$_SERVER['HTTP_CLIENT_IP'];
	return htmlspecialchars($v,ENT_QUOTES);
}
	
function calculate_ip_num()
{
	$ip = get_client_ip();

	
	$n = sprintf("%u",ip2long($ip));
	
	return $n;
}


$num = calculate_ip_num();

$sql = "SELECT country_code,country_name FROM ip2c WHERE ". $num." BETWEEN begin_ip_num AND end_ip_num";
$d = $db->getRow($sql);

if($d['country_name'] == "Singapore")
{
	
	$currency = "S$";
} else {
	$currency = " US$";
	
}

$price = "100.00";

print $currency.$price;