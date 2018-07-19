<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home - Home Page | Computers - Free Website Template from Templates.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
</head>
<body id="page1">
<?php
include"function.php";
include"header.php";
$mod='home';
$do='home';
if(isset($_GET['mod']))
{
	$do=$_GET['do'];
	$mod=$_GET['mod'];
}
include("module/$mod/$do.php");
include"footer.php";
?>
     
</body>
</html>
