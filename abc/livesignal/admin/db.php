<?php
$con=mysql_connect(SARVER_NAME,USER_NAME,PASSWORD);
mysql_select_db(DB,$con);
function addedit($table,$data,$id="")
{
	$con=mysql_connect(SARVER_NAME,USER_NAME,PASSWORD);
	mysql_select_db(DB,$con);
	$qry="insert into $table set ";
	$where="";
	if($id)
	{
		$qry="update $table set ";
		$where=" where id=$id";
	}
	foreach($data as $column=>$value)
	{
		$qry .= $column."='".$value."', ";
	}
	 $qry=substr($qry,0,-2).$where;
	
	mysql_query($qry);
	

	if(!$id)
	{
	 $id=mysql_insert_id();
	}
	return $id;

}
	
function crtdropdown($table,$clname,$selname,$selectids)
{
	$con=mysql_connect(SARVER_NAME,USER_NAME,PASSWORD);
	mysql_select_db(DB,$con);
	$rs=mysql_query("select id,$clname from $table order by $clname;");?>
	<select name="<?php echo $selname;?>" id="<?php echo $selname;?>">
	<option value="">Select One</option>
	<?php while($data=mysql_fetch_array($rs))
	{?>
	<option value="<?php echo $data['id']?>;"><?php echo $data[$clname]?></option>
	<?php } ?>
	</select>
<?php
}

function selectInd($selname,$selectids="")
{
	$con=mysql_connect(SARVER_NAME,USER_NAME,PASSWORD);
	mysql_select_db(DB,$con);
	$rs=mysql_query("select id,name from industry order by name;");
	$selid=array();
	if($selectids)
		$selid=explode(",",$selectids);
	?>
	<select name="<?php echo $selname;?>[]" multiple="multiple" id="<?php echo $selname;?>">
	
	<?php while($data=mysql_fetch_array($rs))
	{
		if( in_array($data['id'],$selid))
		{
	?>
	<option value="<?php echo $data['id'];?>" selected="selected"><?php echo $data['name']?></option>
	<?php }else{ ?>
		<option value="<?php echo $data['id'];?>"><?php echo $data['name']?></option>
	<?php }
	}?>
	</select>
<?php
}

function getuser($colname,$tablename,$pid="")
{
	$con=mysql_connect(SARVER_NAME,USER_NAME,PASSWORD);
	mysql_select_db(DB,$con);
	$rs=mysql_query("select $colname from $tablename where id=$pid");
	$data=mysql_fetch_array($rs);
	return $data[$colname];
}

function delete($table,$id)	{
	$con=mysql_connect(SARVER_NAME,USER_NAME,PASSWORD);
	mysql_select_db(DB,$con);
	 
		
		$str="delete from $table where id in($id)";
		mysql_query($str);
		}
?>
