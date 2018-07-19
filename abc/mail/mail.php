<?php
print_r($_POST);
$header="From: rmcats@gmail.com"."\r\n";

$txt=$_POST['message'];
$msg='<b><span style="color:#090;">'.$txt.'</span></b>';
mail($_POST['to'],$_POST['subject'],$msg,$header);

?>