<?php 
if(!isset($_SESSION['login_dtl']))
{?>
<script>
location.href="index.php?mod=login&do=login";
</script>
<?php }?>
<?php 
$id=1;
if($_GET['id'])
{
	$id=$_GET['id'];
}
	$data=mysql_fetch_array(mysql_query("select id,header_tip,contact_detail from static_detail  where id=$id  "));

	if(isset($_POST['submit']))
	{
		unset($_POST['submit']);
		if(isset($_FILES['upload_sw']['name']) && $_FILES['upload_sw']['name']){
		unlink("sw/".$_POST['upload_sw']);
		$fn=time()."_".$_FILES['upload_sw']['name'];
		move_uploaded_file($_FILES['upload_sw']['tmp_name'],"sw/".$fn);
		
		$_POST['upload_sw']=$fn;
		}
		addedit('static_detail',$_POST,$id);
		?>
		<script>location.href="index.php?mod=static_detail&do=list";</script>
		<?php
	}

?>
<form method="post" enctype="multipart/form-data">
  <table align="center" class="basictable" style="width:830px;*width:800px; padding:2px;">
  <tr>
    <td><div id="hsnazzy"> <b class="htop"><b class="hb1"></b><b class="hb2"></b><b class="hb3"></b><b class="hb4"></b></b>
        <div class="hboxcontent">
          <table width="100%">
            <tr>
              <th align="left">&nbsp;Update Static Detail </th>
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
              <td><label>Header Tip</label></td>
              <td><input type="text" name="header_tip" required="required" placeholder="Header Tip" value="<?php echo $data['header_tip']?>"/></td>
            </tr>
            <tr>
            
            <tr>
              <td><label>Contact Detail</label></td>
              <td><textarea name="contact_detail" class="ckeditor" required="required" placeholder="Contact Detail" ><?php echo $data['contact_detail']?></textarea></td>
            </tr>
            <tr>
            <tr>
              <td><label>Upload Softwere(Upload into zip formate)</label></td>
              <td><input type="file" name="upload_sw" required="required" value="<?php echo $data['upload_sw']?>"/>
                  <input type="hidden" name="upload_sw" value="<?php echo $data['upload_sw']?>"/>

              </td>
            </tr>
            <?php if($data['upload_sw']){?>
            <tr>
              <td><label>Uploaded Softwere</label></td>
              <td><a href="sw/<?php echo $result["upload_sw"];?>">Download</a>
              </td>
            </tr>
            <?php } ?>
            
            <tr>
            
              <th colspan="2"><input type="submit" name="submit" value="Update" class="button"/></th>
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
