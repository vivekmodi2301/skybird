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
								<th align="left">&nbsp; Registration List </th>
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
    <th>Name</th>
    <th>Email</th>
    <th>Contact No.</th>
    <th>City</th>
    <th>Service</th>
    
  </tr>
  <?php
  
$i=0;
$list=mysql_query("select * from registration",$con);
while($result=mysql_fetch_array($list))
{$i++;
?>
  <tr>
    <td ><?php echo $i;?> </td>
    <td ><?php echo ucfirst(stripslashes($result["name"]))."&nbsp;";?> </td>
    <td ><?php echo ucfirst(stripslashes($result["email"]))."&nbsp;";?> </td>
    <td ><?php echo ucfirst(stripslashes($result["contact"]))."&nbsp;";?> </td>
    <td ><?php echo ucfirst(stripslashes($result["city"]))."&nbsp;";?> </td>
    <td ><?php echo ucfirst(stripslashes($result["service"]))."&nbsp;";?> </td>
      </tr>
  <?php 
}
?></table>
</div>
    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b> </div>
  </td>
  
  </tr>
  
</table>
