<?php

if(isset($_POST['submit']))
{

$user=$_POST['user'];
$password=$_POST['password'];


$res=mysql_num_rows(mysql_query("select id from login where user= '$user' and   password ='$password'    "));
			if($res>0)
			{
			$_SESSION['ses']=true; 
		?> 
					<script>
									location.href="index.php?mod=product&do=list";
					</script>
<?php }
else
				{
				?><font color="#FF0000"><?php
				 echo "Please enter correct user name or password."; ?></font><?php 
				}
			}
				
?>
 


<div style="height:300px; background-color:#A1D1FF; color:#FFFFFF;  margin:40px; width:400px; margin-left:500px; " align="center">
<form method="post"  >
	
        <div style="background:#2493FF; text-align:center; font-weight:bold; height:30px; font-size:24px;">  Login </div>
          
          
        <div style="padding:30px; text-align:center;">
           <span> User Name</span> <input type="text" name="user"  id="user" style="height:30px; width:200px; margin:20px;"><br/>
           <span> Password	</span><input type="password" name="password"  style="height:30px; width:200px; margin:20px;"><br/>
                      <input type="submit"  value="login" name="submit" />
          </div> 
</form>

</div>
</div>