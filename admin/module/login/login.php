<?php
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	if(trim($username) && trim($pwd))
	{
	    $pwd=md5($_POST['pwd']);
		$data=mysql_query("select id,username,password from login where username='$username' and password='$pwd'",$con);
// 		echo "select id,username,password from login where username='$username' and password='$pwd'";exit;
		
		
		if(mysql_num_rows($data)==0){
		  //  echo "hi";
			$_SESSION['messages']="Please enter correct user name or password.";
		}
		else
		{
			
			$_SESSION['login_sky']=mysql_fetch_array($data);
			//echo $_SESSION['username'];exit;
			?>
			 <script>location.href="index.php?mod=tickets&do=list";</script>
			<?php
// 			exit;
		}
	}else{
		$_SESSION['messages']="Please enter user name or password.";
	}
}
?>
<table class="basictable" align="center" style="width:530px;*width:500;">
	<tr>
		<td>
			<div id="hsnazzy">
				<b class="htop"><b class="hb1"></b><b class="hb2"></b><b class="hb3"></b><b class="hb4"></b></b>
					<div class="hboxcontent">
						<table width="100%">
							<tr>
								<th align="left">&nbsp;Login </th>
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
	<form method='post' >

  <div id="xsnazzy"> <b class="xtop"><b class="xb1"></b><b class="xb2"></b><b class="xb3"></b><b class="xb4"></b></b>
    <div class="xboxcontent">
        <table width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="2"><span class="formheading"> Welcome to Skybird Admin.</span> </td>
          </tr>
		    <tr>
		  	<td height="10">&nbsp;</td>
		 </tr>
          <tr>
            <td colspan="2" valign="top"><div class="message">
                <?php if(key_exists('messages',$_SESSION) && $_SESSION['messages']): ?>
                <span><?php echo $_SESSION['messages']; ?></span>
                <?php unset($_SESSION['messages']); endif;?>
              </div></td>
          </tr>
		  <tr>
		  	<td height="10">&nbsp;</td>
		 </tr>
          <tr>
            <td width="26%"  align="right"><label>
              <label>User Name:</label>
              </label>
            </td>
            <td  ><input type="text" name="username" required="required" placeholder="Enter user name" value="<?php echo $_POST['username']?>">
            </td>
          </tr>
		  <tr>
		  	<td height="10">&nbsp;</td>
		 </tr>	
           <tr>
            <td width="26%"  align="right"><label>
              <label>Password:</label>
              </label>
            </td>
            <td  ><input type="password" name="pwd"  required="required" placeholder="Enter password" value="<?php echo $_POST['pwd']?>">
            </td>
          </tr>		  <tr>
		  	<td height="30">&nbsp;</td>
		 </tr>	
          <tr>
            <td align="center" colspan="2">
              <input type="submit" name="submit" value="Login" >
              
          </td>
          
          </tr>
            <tr>
		  	<td height="10">&nbsp;</td>
		 </tr>
        </table>
      
    </div>
    <b class="xbottom"><b class="xb4"></b><b class="xb3"></b><b class="xb2"></b><b class="xb1"></b></b> </div>
	</form>
  </td>
  
  </tr>
  
</table>
