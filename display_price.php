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



//print "<pre>";print_r($_SESSION);
foreach($_SESSION as $s=>$v)
{
	$v = str_replace("<br>"," ",$v);
	$v = preg_replace('/\s+/', ' ', $v);
		
	$_SESSION[$s] = $v;
}

//TODO : CALCULATE PRICE
if($_SESSION['step2_value'] != ""){
	$costBaseFabricArr = explode(" ",trim($_SESSION['step2_value']));
	$costBaseFabric    = ($costBaseFabricArr[count($costBaseFabricArr)-1]); 
	$costBaseFabric    = trim($costBaseFabric,"$");
}
if($_SESSION['step11_value'] != ""){
	$costCollarOuterFabric = explode(" ",trim($_SESSION['step11_value']));
	$costCollarOuterFabric    = ($costCollarOuterFabric[count($costCollarOuterFabric)-1]);
	$costCollarOuterFabric    = trim($costCollarOuterFabric,"$");
}
if($_SESSION['step12_value'] != ""){
	$costCollarInnerFabric = explode(" ",trim($_SESSION['step12_value']));
	$costCollarInnerFabric    = ($costCollarInnerFabric[count($costCollarInnerFabric)-1]);
	$costCollarInnerFabric    = trim($costCollarInnerFabric,"$");
}
if($_SESSION['step13_value'] != ""){
	$costCuffOuterFabric = explode(" ",trim($_SESSION['step13_value']));
	$costCuffOuterFabric    = ($costCuffOuterFabric[count($costCuffOuterFabric)-1]);
	$costCuffOuterFabric    = trim($costCuffOuterFabric,"$");
}
if($_SESSION['step14_value'] != ""){
	$costCuffInnerFabric = explode(" ",trim($_SESSION['step14_value']));
	$costCuffInnerFabric    = ($costCuffInnerFabric[count($costCuffInnerFabric)-1]);
	$costCuffInnerFabric    = trim($costCuffInnerFabric,"$");
}
if($_SESSION['step5_html'] != ""){
	$costButton = explode(" ",trim($_SESSION['step5_html']));
	$costButton    = ($costButton[count($costButton)-1]);
	$costButton    = trim($costButton,"$");
}
if($_SESSION['step15_html'] != ""){
	$costPlacketOuterFabric = explode(" ",trim($_SESSION['step15_html']));
	$costPlacketOuterFabric    = ($costPlacketOuterFabric[count($costPlacketOuterFabric)-1]);
	$costPlacketOuterFabric    = trim($costPlacketOuterFabric,"$");
}
if($_SESSION['step16_html'] != ""){
	$costPlacketInnerFabric = explode(" ",trim($_SESSION['step16_html']));
	$costPlacketInnerFabric    = ($costPlacketInnerFabric[count($costPlacketInnerFabric)-1]);
	$costPlacketInnerFabric    = trim($costPlacketInnerFabric,"$");
}
if($_SESSION['step17_html'] != ""){
	$costPlacketFlipSideFabric = explode(" ",trim($_SESSION['step17_html']));
	$costPlacketFlipSideFabric    = ($costPlacketFlipSideFabric[count($costPlacketFlipSideFabric)-1]);
	$costPlacketFlipSideFabric    = trim($costPlacketFlipSideFabric,"$");
}
if($_SESSION['step10'] != ""){
	$costBackYoke = explode(" ",trim($_SESSION['step10']));
	$costBackYoke    = ($costBackYoke[count($costBackYoke)-1]);
	$costBackYoke    = trim($costBackYoke,"$");
}
// 
if($_SESSION['step18_html'] != ""){
	$costThread = explode(" ",trim($_SESSION['step18_html']));
	$costThread    = ($costThread[count($costThread)-1]);
	$costThread    = trim($costThread,"$");
}

if($_SESSION['tie_fix_html'] != ""){
	$costTieFix = explode(" ",trim($_SESSION['tie_fix_html']));
	$costTieFix    = ($costTieFix[count($costTieFix)-1]);
	$costTieFix    = trim($costTieFix,"$");
}
if($_SESSION['handkerchief_html'] != ""){
	$costHandkerchief = explode(" ",trim($_SESSION['handkerchief_html']));
	$costHandkerchief    = ($costHandkerchief[count($costHandkerchief)-1]);
	$costHandkerchief    = trim($costHandkerchief,"$");
}


$costTotal =  $costBaseFabric + $costCollarOuterFabric + $costCollarInnerFabric + $costCuffOuterFabric + 
				$costCuffInnerFabric + $costButton + $costPlacketOuterFabric + $costPlacketInnerFabric + 
				$costPlacketFlipSideFabric + $costBackYoke + $costThread + $costTieFix + $costHandkerchief;
				
$_SESSION['costTotal'] = $costTotal;

$price = $_SESSION['costTotal'];

print $currency.$price;