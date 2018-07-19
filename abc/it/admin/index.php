<?php 
session_start();
?>
<link rel="stylesheet" href="style.css" type="text/css" />


<?php

error_reporting(0);
//print_r($_SESSION);
include "pagination.php";
include "function.php";
include"header.php";
$mod='login';
$do='login';
if(isset($_SESSION['ses']))   
{
if(isset($_GET['mod']))
{
	$do=$_GET['do'];
	$mod=$_GET['mod'];
}
}
include("module/$mod/$do.php");
include"footer.php";
?>