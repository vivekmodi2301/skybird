<?php 
if(isset($_GET['id']))
{
$id=$_GET['id'];
}
$rs=mysql_query("select * from product where  main_category_id=$id");
?>
      <div class="col-2">
        
        <div class="box">
          <div class="border-top">
            <div class="border-right">
              <div class="border-bot">
                <div class="border-left">
                  <div class="inner">
                    <div class="title"><span style="font-size:24px">Product list</span></div>
                    <ul class="list1">
						<?php while($data=mysql_fetch_array($rs))
                        {
                        ?>
                         <li><img src="admin/product_photo/<?php echo $data['product_image'];?>"  width="80px" height="80px"/>
                        <h3>Product Nmae:<?php echo $data['product_name'];?></h3>
                        <p><?php echo $data['product_short_des'];?></p>
                        <li>Price : <?php echo $data['price'];?></li>
                        <div style=" margin-left:490px; text-decoration:none;"><a href="index.php?mod=subproduct&do=list&id=<?php echo $data['id']; ?>"  style="text-decoration:none">Order Now</a></div>
                      <?php }
                      ?>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>