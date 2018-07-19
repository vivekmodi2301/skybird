<?php 

if(isset($_POST['send']))
{	
	
	unset($_POST['send']);
	
	addedit('customer',$_POST);
}


if(isset($_GET['id']))
{
$id=$_GET['id'];
}
$rs=mysql_query("select * from product where  id=$id");
?>
      <div class="col-2">
        
        <div class="box">
          <div class="border-top">
            <div class="border-right">
              <div class="border-bot">
                <div class="border-left">
                  <div class="inner">
                    <div class="title"><span style="font-size:24px">Product </span></div>
                    <ul class="list1">
						<?php while($data=mysql_fetch_array($rs))
                        {
                        ?>
                         <li><img src="admin/product_photo/<?php echo $data['product_image'];?>"  width="80px" height="80px"/>
                        <h3>Product Nmae:<?php echo $data['product_name'];?></h3>
                        <p><?php echo $data['product_short_des'];?></p>
                        <li>Price : <?php echo $data['price'];?></li>
                   
                      <?php }
                      ?>
                      
   
      <div class="title"></div>
  <?php 
  $rs=mysql_query("select * from product where  id=$id");
  $data=mysql_fetch_array($rs);  ?>      
          <form id="contacts-form" action="" method="post">
          <input type="hidden"  name="pro_id" value="<?php echo $data['id'] ;?>" />
            <fieldset>
            	<div class="field"> <label>Your Name:</label> 
                <input  type="text" name="name" value="" placeholder="Custmor Name"  /></div>
 <div class="field" ><label>Mobile:</label>  
 <input  type="text" name="mobile" value="<?php // echo $product_data['mobile']; ?>" placeholder="Mobile Number."  /></div>
<div class="field"> <label>Address:</label>  
 <input  type="text" name="address" value="<?php // echo $product_data['particulars']; ?>" placeholder="Address"  /></div>
 <div class="field"> <label>State:</label> 
  <input  type="text" name="state" value="<?php //echo $product_data['pronumber']; ?>" placeholder="State"  /></div>
 <div class="field"> <label>City:</label> 
  <input  type="text" name="city" value="<?php //echo $product_data['qty']; ?>" placeholder="City."  /></div>
 <div class="field"> <label>Pin No:</label>  <input  type="text" name="Pin" value="<?php //echo $product_data['rate']; ?>" placeholder="Pin No"  /></div>
 <div class="field">   <input type="submit" name="send" value="Send"></div>

            </fieldset>
          </form>
        </div>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      