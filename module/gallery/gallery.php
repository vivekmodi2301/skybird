<script src="css/jquery.lazyload.js"></script>
        <script src="css/image_gallery/least.min.js?06062013"></script>
        <script src="css/image_gallery/prism.js"></script>

        <script>
        $(document).ready(function(){
            $('#gallery').least();
        });
        </script> 
        <?php
$list=mysql_query("select id,photo from photo_gallery order by id desc");
?>
<div id="section">
						<div class="article">
 <section>
            <ul id="gallery" >
                        <li id="fullPreview"></li>  
                          <?php 
			while($data=mysql_fetch_array($list))
				{
			?>

                <li>
                    <a href="admin/gallery_img/<?php echo $data["photo"];?>">
                    <img src="admin/gallery_img/<?php echo $data["photo"];?>" border="2px" height="150" width="150" /></a>
                                        
                </li>
                <?php
                	}
				?>
                     <div class="overLayer"></div>
             </ul>
        </section>	
                </div></div>
