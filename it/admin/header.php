<style>
	.menu
		{
		list-style:none;
		height:40px;
		width:100%;
		margin-top:-11px;
		background-color:#2493FF;
		
		}
		.menu ul 
		{
				display:inline;
				list-style:none;

		}
		.menu ul li
		{
		float:left;
		margin-left:35px;
		margin-top:15px;
		
		}
		.menu ul li a
		{
		
		color:#fff;
		text-decoration:none;
		}
</style>

<div style=" max-height:900px;">
<div style="background-color:#A1D1FF;width:100%; height:100px;   margin-bottom:10px; ">
<div style=" color:#FFFFFF;  font-size: 32px;  font-weight: bold; padding-left: 50px; padding-top: 35px;  ">COMPUTER</div>
</div>
                <div class="menu">
                <ul >
                    
                     <?php if(!isset($_SESSION['ses']))   
					 {?>
                    			 <a href="index.php?mod=login&do=login"></a>
        <?php } 
			 else{ ?>
                     <li ><a href="index.php?mod=category&do=category_list"> Category List</a></li>
                     <li><a href="index.php?mod=product&do=list">Product</a></li>
                     <li><a href="index.php?mod=feedback&do=list">Feedback</a></li>
                     <li > <a href="index.php?mod=custmor&do=list">Custmor Form</a></li>
                     <li > <a href="index.php?mod=menu&do=list">Services Form</a></li>
                     <li > <a href="index.php?mod=login&do=logout">Logout</a></li>

                    <?php }?>
                     </ul>
                     </div>
