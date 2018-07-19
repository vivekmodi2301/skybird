<?php
$con=mysql_connect('localhost','skybird','rajesh@123');
mysql_select_db('skybird_computer',$con);
function addedit($table,$data,$id='')
{	
	$str="insert into $table set ";
	$wh='';
	if($id)
	{
		$str="update $table set ";
		$wh="where id=$id";
	}
	foreach($data as $cn=>$cv)
	{
		$str.="$cn='".addslashes($cv)."',";
	}
	$str=substr($str,0,-1);
	$str.=$wh;
	
	mysql_query($str);

}
function del($table,$id='')
{
	$str="delete from $table where id=$id";
	mysql_query($str);
}
?>