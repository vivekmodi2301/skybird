<div class="header"><div class="headertext">Commoty Services & Solutions

	<div  class="headerusername">
				Welcome Administrator
	</div>

</div> 


<div id="profile_menu">
	<ul>
	<?php 
	if(isset($_SESSION['login_dtl']) && $_SESSION['login_dtl']!="")
	{?>
<!--		<li><a href="index.php?mod=courses&do=list" title="Courses"><span >Courses</span> </a></li>
-->		<li><a href="index.php?mod=static_detail&do=list" title="Control of Header tips and contact detail"><span >Static Details</span> </a></li>
<li><a href="index.php?mod=sw&do=list" title="Upload Softwere"><span >Upload Softwere</span> </a></li>

<!--		<li><a href="index.php?mod=static_menu&do=list" title="static menu"><span >Static Menu</span> </a></li>
-->		<li><a href="index.php?mod=registration&do=list" title="User Details filled by Registration Form"><span >Registrations</span> </a></li>
	<li><a href="index.php?mod=photo_gallery&do=list" title="Header Images"><span >Header Images </span> </a></li>

		<li><a href="index.php?mod=login&do=logout" title="Logout"><span >Logout</span> </a></li>
	<?php }else{?>	
	<li><a href="index.php" title="Log In"><span >Log In</span> </a></li>
	<?php } ?>
	</ul>
</div>
 
</div>
 <?php
	//print_r($_SESSION);
	//echo $_SESSION['username'];?>

