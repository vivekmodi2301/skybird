<?php
    $data=mysql_fetch_array(mysql_query("select description from resort where id=1"));
    if(isset($_POST['submit']))
	{
		unset($_POST['submit']);
		$_POST['description']=addslashes($_POST['description']);
			addedit('resort',$_POST,1);
		?>
		<script>location.href="index.php?mod=resort&do=add";</script>
		<?php
	}
?>
<form method="post" >
  <table align="center" class="basictable" style="width:530px;*width:500; padding:2px;">
  <tr>
    <td><div id="hsnazzy"> <b class="htop"><b class="hb1"></b><b class="hb2"></b><b class="hb3"></b><b class="hb4"></b></b>
        <div class="hboxcontent">
          <table width="100%">
            <tr>
              <th align="left">&nbsp;Resort </th>
            </tr>
          </table>
        </div>
        <b class="hbottom"><b class="hb4"></b><b class="hb3"></b><b class="hb2"></b><b class="hb1"></b></b> </div></td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td><div id="xsnazzy"> <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
        <div class="xboxcontent">
          <table width="100%" cellspacing="0" cellpadding="7px">
            
            
            <tr>
              <td><label>Description</label></td>
              <td><textarea name="description" style="width:100%; height:300px"> <?php echo $data['description'];?></textarea>

              </td>
            </tr>
            <tr>
            
            
        
            <tr>
            
              <th colspan="2"><input type="submit" name="submit" value="Save" class="button"/></th>
            </tr>
            <tr>
              <td height="10">&nbsp;</td>
            </tr>
          </table>
        </div>
        <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b> </div>
</td>
</tr>
</table>
</form>
