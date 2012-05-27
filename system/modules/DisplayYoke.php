<?

include('../global_variables.php');
include('../current_setting.php');


$yoke = $_SESSION['step10'];

switch ($yoke) {
    case 'classic':			
		$BackYoke[2] = "ClassicYoke.";
        break;
    case 'cowboy':	
		$BackYoke[2] = "CowboyYoke.";
        break;
}


include('../refresh_filename.php');

$d = array();
$list = array();

if($BackYoke[5]=="Show")	
{
	$lay1 = $BackYoke[0];
	
	$list['layer'] = 0;
	$list['path'] = 'img/Back Yoke/'.$lay1;
	$d[] = $list;
	
	unset($list);
} else{
	$list['layer'] = 0;
	$list['path'] = 'img/Back Yoke/';
	$d[] = $list;
	
	unset($list);
}

 
// End of Subroutine : RefreshFilenames()


$output = json_encode($d);

print $output;
?>