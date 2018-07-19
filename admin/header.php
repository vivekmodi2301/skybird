<div class="header"><div class="headertext">Skybird Water Park,Bikaner

	<div  class="headerusername">
				Welcome Administrator
	</div>

</div> 


<div id="profile_menu">
	<ul>
	<?php 
	if(isset($_SESSION['login_sky']) && $_SESSION['login_sky']!="")
	{?>
<!--		<li><a href="index.php?mod=courses&do=list" title="Courses"><span >Courses</span> </a></li>
-->		<li><a href="index.php?mod=tickets&do=list" title="tickets"><span >Tickets</span> </a></li>
<li><a href="index.php?mod=resort_image&do=list" title="resort_image"><span >Resort Image</span> </a></li>

<li><a href="index.php?mod=resort&do=add" title="resort_image"><span >Resort</span> </a></li>
<li><a href="index.php?mod=organization&do=add" title="resort_image"><span >Organization</span> </a></li>

<!--		<li><a href="index.php?mod=static_menu&do=list" title="static menu"><span >Static Menu</span> </a></li>
-->		<li><a href="index.php?mod=photo_gallery&do=list" title="Photo Gallery"><span >Photo Gallery</span> </a></li>
<li><a href="index.php?mod=banner_image&do=list" title="Banner Image"><span >Banner Image</span> </a></li>
<li><a href="index.php?mod=contact&do=contact" title="Banner Image"><span >Contact</span> </a></li>

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

