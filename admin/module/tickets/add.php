<?php 
if(!isset($_SESSION['login_sky']))
{?>
<script>
location.href="index.php?mod=login&do=login";
</script>
<?php }?>
<?php 
if($_GET['id'])
{
	$id=$_GET['id'];
	$data=mysql_fetch_array(mysql_query("select id,title,description,rate from tickets where id=$id  "));
}
	if(isset($_POST['submit']))
	{
		unset($_POST['submit']);
		addedit('tickets',$_POST,$id);
		?>
		<script>location.href="index.php?mod=tickets&do=list";</script>
		<?php
	}

?>
<form method="post">
  <table align="center" class="basictable" style="width:530px;*width:500; padding:2px;">
  <tr>
    <td><div id="hsnazzy"> <b class="htop"><b class="hb1"></b><b class="hb2"></b><b class="hb3"></b><b class="hb4"></b></b>
        <div class="hboxcontent">
          <table width="100%">
            <tr>
              <th align="left">&nbsp;Add Tickets Details </th>
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
              <td colspan="2"><span class="formheading">Add tickets </span></td>
            </tr>
            <tr>
              <td><label>Title</label></td>
              <td><input type="text" name="title" required="required" placeholder="title" value="<?php echo $data['title']?>"/></td>
            </tr>
            <tr>
            
            <tr>
              <td><label>Description</label></td>
              <td><textarea name="description" required="required" placeholder="description" ><?php echo $data['description']?></textarea></td>
            </tr>
            <tr>
            
            
            <tr>
              <td><label>Ticket rate</label></td>
              <td><input type="text" name="rate" required="required" placeholder="rate" value="<?php echo $data['rate']?>"/></td>
            </tr>
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
