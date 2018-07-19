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
	$data=mysql_fetch_array(mysql_query("select id,photo from photo_gallery where id=$id  "));
}
	if(isset($_POST['submit']))
	{
		unset($_POST['submit']);
		if(isset($_FILES['photo']['name']) && $_FILES['photo']['name']){
		    if($_FILES['photo']['type']=='image/jpeg' || $_FILES['photo']['type']=='image/png'){
		unlink("gallery_img/".$_POST['photo']);
		$fn=time()."_".$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"gallery_img/".$fn);
		
		$_POST['photo']=$fn;
		    }else{
		        echo "Please upload only jpgeg or png file";
		    }
		}
		
		addedit('photo_gallery',$_POST,$id);
		?>
		<script>location.href="index.php?mod=photo_gallery&do=list";</script>
		<?php
	}

?>
<form method="post" enctype="multipart/form-data">
  <table align="center" class="basictable" style="width:530px;*width:500; padding:2px;">
  <tr>
    <td><div id="hsnazzy"> <b class="htop"><b class="hb1"></b><b class="hb2"></b><b class="hb3"></b><b class="hb4"></b></b>
        <div class="hboxcontent">
          <table width="100%">
            <tr>
              <th align="left">&nbsp;Photo Gallery </th>
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
              <td colspan="2"><span class="formheading">Add Photos </span></td>
            </tr>
            
            <tr>
            
            <tr>
              <td><label>Photo</label></td>
              <td><input type="file" name="photo" required="required" value="<?php echo $data['photo']?>"/>
                  <input type="hidden" name="photo" value="<?php echo $data['photo']?>"/>

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
