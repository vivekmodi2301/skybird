<?php 
if(!isset($_SESSION['login_sky']))
{?>
<script>
location.href="index.php?mod=login&do=login";
</script>
<?php }?>
<script>
function ab(dataid)
{
if(confirm("you want to delete these recorde...?"))
	{
		location.href="index.php?mod=tickets&do=list&delid="+dataid;
	}
}
						
</script>
<?php
if(isset($_GET['delid']) && trim($_GET['delid']))
{
	delete('tickets',$_GET['delid']);
	?>
	<script>
location.href="index.php?mod=tickets&do=list";
</script>
	<?php
} 
?>
<table class="basictable" align="center" style="width:85%">
	<tr>
		<td height="5"></td>
	</tr>	
	<tr>
		<td>
			<div id="hsnazzy">
				<b class="htop"><b class="hb1"></b><b class="hb2"></b><b class="hb3"></b><b class="hb4"></b></b>
					<div class="hboxcontent">
						<table width="100%">
							<tr>
								<th align="left">&nbsp; tickets List </th>
							</tr>
						</table>
					</div>
				<b class="hbottom"><b class="hb4"></b><b class="hb3"></b><b class="hb2"></b><b class="hb1"></b></b>
			</div>
		</td>
	</tr>	
	<tr>
		<td height="5"></td>
	</tr>	
  <tr>
  
  <td>
  <div id="xsnazzy"> <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
    <div class="xboxcontent">
    <table align='center' style='width:100%' cellspacing="2" cellpadding="2">
<tr>
<td align="right" valign="top" colspan="7"><a href="index.php?mod=tickets&do=add"> <img src="public/images/new.gif"  width="60px" height="15px"/></a> </td>
</tr>
</table>
<table align='center' class="listtbl"  style='width:100%' cellspacing="2" cellpadding="2">
  <tr class="">
    <th> S.R </th>
    <th>Title</th>
    <th>Title Discription</th>
    <th>Rate</th>
    <th>Action</th>
  </tr>
  <?php
 	 	$frmdataget=$_REQUEST;
		PaginationWork();
		$rs=mysql_query('SELECT COUNT(1) AS tot FROM tickets LIMIT 1') ;
		$totRslt=mysql_fetch_array($rs);
  
$i=0;
$list=mysql_query("select id,title,description,rate from tickets order by id desc LIMIT ".$frmdata['from'].", ".$frmdata['to'],$con);
while($result=mysql_fetch_array($list))
{$i++;
?>
  <tr>
    <td ><?php echo $i;?> </td>
    <td ><?php echo ucfirst(stripslashes($result["title"]))."&nbsp;";?> </td>
    <td ><?php echo ucfirst(stripslashes($result["description"]))."&nbsp;";?> </td>
    <td ><?php echo ucfirst(stripslashes($result["rate"]))."&nbsp;";?> </td>
    <td><a href="index.php?mod=tickets&do=add&id=<?php echo $result['id'];?>"><img src="public/images/pencil_small.png" /> &nbsp; <a href="#" onClick="ab('<?php echo $result['id'];?>')"><img src="public/images/delete_icon.png" /></a></a> </td>
  </tr>
  <?php 
}
?>
				<tr>
					<td height="10" colspan="6" align="right">
						<?php PaginationDisplay($totRslt['tot'],$baseurl.'/index.php?mod=tickets&do=list&pageNumber=','');?>
					</td>
				</tr>
</table>
</div>
    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b> </div>
  </td>
  
  </tr>
  
</table>
