<?
error_reporting(0);
ini_set('display_errors',0);
define('DSN', 'mysql://sgwebho_tmo1:zhiwei123@sg-webhosting.com/sgwebho_tmo_preview');


session_start();
require_once('DB.php');
// Prepare database class
$db =& DB::connect(DSN);
$db->setFetchMode(DB_FETCHMODE_ASSOC);
if (DB::isError($db)) {
    die($db->getMessage());
}

$ip_num = $_SERVER['REMOTE_ADDR'];

$sql = "SELECT country_name FROM ip2c WHERE '$ip_num' BETWEEN begin_ip AND end_ip";
$country_name = $db->getOne($sql);

?>