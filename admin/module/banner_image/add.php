<?php 
if(!isset($_SESSION['login_sky']))
{?>
<script>
location.href="index.php?mod=login&do=login";
</script>
<?php }?>

<?php
	if (isset($_POST['submit']))
	{
		$success=1;
		if ($_FILES['photo']['name']) 
		{
		  //  print_r($_FILES);exit;
			
			if ($_FILES['photo']['type']=='image/jpeg' || $_FILES['photo']['type']=='image/png')
			{
			    
        		move_uploaded_file($_FILES['photo']['tmp_name'],"banner_img/banner.jpg");
				
			}
			else
			{
			 //   echo "hi";
				$success=0;
				$_SESSION['efile']="Upload only jpeg or png file";
			}
		}
		else
		{
			if (!isset($_POST['photo'])) 
			{
				$success=0;
				$_SESSION['efile']="Upload a photo";
			}
		}
		print_r($_SESSION);exit;
		if($success==1)
		{
?>
		    <script>
		        location.href="index.php?mod=banner_image&do=list";
		    </script>
<?php
		}
	}
?>


<form method="post" enctype="multipart/form-data">
  <table align="center" class="basictable" style="width:530px;*width:500; padding:2px;">
  <tr>
    <td><div id="hsnazzy"> <b class="htop"><b class="hb1"></b><b class="hb2"></b><b class="hb3"></b><b class="hb4"></b></b>
        <div class="hboxcontent">
          <table width="100%">
            <tr>
              <th align="left">&nbsp;Banner Photo </th>
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
              <td colspan="2"><span class="formheading">Add Photo </span></td>
            </tr>
            
            <tr>
            
                <tr>
    				<td><img src="banner_img/banner.jpg" height="100px" width="100px">
    				</td>
    			</tr>
            <tr>
              <td><label>Photo</label></td>
              <td><input type="file" name="photo">
                <span><?php if(isset($_SESSION['efile'])){echo $_SESSION['efile'];}unset($_SESSION['efile']);?></span>
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
