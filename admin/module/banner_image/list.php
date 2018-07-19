<?php 
if(!isset($_SESSION['login_sky']))
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
								<th align="left">&nbsp; Banner Image </th>
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
    <th>Photo</th>
    <th>Edit</th>
  </tr>
  <tr>
    
    <td><img src="../admin/banner_img/banner.jpg"  border="2px" height="50" width="80" /></td>
    <td><a href="index.php?mod=banner_image&do=add"><img src="public/images/pencil_small.png"  /></a>
     </td>
  </tr>
</table>
</div>
    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b> </div>
  </td>
  
  </tr>
  
</table>
