<?php 
if(!isset($_SESSION['login_dtl']))
{?>
<script>
location.href="index.php?mod=login&do=login";
</script>
<?php }?>
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
								<th align="left">&nbsp; Pages Details </th>
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
<table align='center' class="listtbl"  style='width:100%' cellspacing="2" cellpadding="2">
  <tr class="">
    <th> S.R </th>
    <th>Header Tip</th>
    <th>Cotact Us</th>
    <th>Uploaded Softwere</th>
    <th>Action</th>
  </tr>
  <?php
  
$i=0;
$list=mysql_query("select id,header_tip,contact_detail,upload_sw from static_detail",$con);
while($result=mysql_fetch_array($list))
{$i++;
?>
  <tr>
    <td ><?php echo $i;?> </td>
    <td ><?php echo ucfirst(stripslashes($result["header_tip"]))."&nbsp;";?> </td>
    <td ><?php echo ucfirst(stripslashes($result["contact_detail"]))."&nbsp;";?> </td>
    <td><a href="sw/<?php echo $result["upload_sw"];?>">Download</a> </td>

    <td><a href="index.php?mod=static_detail&do=add&id=<?php echo $result['id'];?>"><img src="public/images/pencil_small.png" alt="Edit" /></a> </td>
  </tr>
  <?php 
}
?></table>
</div>
    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b> </div>
  </td>
  
  </tr>
  
</table>
