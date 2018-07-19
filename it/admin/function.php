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
	//echo $str;
	//print_r($data);
	//exit;
}
function del($table,$id='')
{
	$str="delete from $table where id=$id";
	mysql_query($str);
}
function getSite($id)
{
	
	$str="select site from site_name where id=$id";
	$data=mysql_fetch_array(mysql_query($str));
	return $data['site'];
}
function getCategory($id)
{
//	echo "$id";
	$str="select catname from category where id=$id";
	$data=mysql_fetch_array(mysql_query($str));
	return $data['catname'];
}
function getMember($id)
{
	
	$str="select  member_name from member where id=$id";
	$data=mysql_fetch_array(mysql_query($str));
	return $data['member_name'];
}

?>
