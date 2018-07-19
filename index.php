<?php include_once('header.php');

$mod = "home";
$do = "home";
//if(isset($_SESSION['login_det']))
{
if(isset($_GET['mod'])) {
	
	$mod = $_GET['mod'];
	$do = $_GET['do'];
}
}
include("module/$mod/$do.php");?>

<?php include_once('footer.php');?>