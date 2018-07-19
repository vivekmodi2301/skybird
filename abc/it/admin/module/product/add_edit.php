



<?php

$id=$_GET['id'];
$product_record=mysql_query("SELECT `id`,`product_name`,`main_category_id`,`product_short_des`,`product_image`,`product_full_des`,`price`,`price_in_usd` from product where id=$id");
$product_data=mysql_fetch_array($product_record);
if(isset($_POST['save']))
{
	unset($_POST['save']);
//	print_r($_POST);
//	print_r($_FILES);
//	exit;
	if($_FILES['product_image']['name'])
	{
		unlink('product_photo/'.$product_data['product_image']);
		$_POST['product_image']=time().$_FILES['product_image']['name'];
		move_uploaded_file($_FILES['product_image']['tmp_name'],'product_photo/'.$_POST['product_image']);
	}
	print($_POST['product_title']);
//	exit;
	addedit('product',$_POST,$id);
?>
<script>
location.href="index.php?mod=product&do=list";
</script>
<?php 
}
?>
<form id="signup" method="post" enctype="multipart/form-data">
    <h1>Product Form</h1>
    <input type="text" name="product_name" placeholder="Product Name" value="<?php echo $product_data['product_name']?>" />
    <select name="main_category_id" onChange="load_category(this.value)" id="main_category_id">
    	<option value="">>> Select Main Category <<</option>
        <?php
		$main_category_record=mysql_query("select id, main_category_name from main_category");
		while($main_category_data=mysql_fetch_array($main_category_record))
		{
			if($main_category_data['id']==$product_data['main_category_id'])
			{
			?>
            <option selected value="<?php echo $main_category_data['id']?>"><?php echo $main_category_data['main_category_name']?></option>
            <?php
			}
			else
			{
				?>
        		<option value="<?php echo $main_category_data['id']?>"><?php echo $main_category_data['main_category_name']?></option>
             <?php 
			 }

		}?>
    </select>
   
    <input type="text" name="product_short_des" placeholder="Product Short Description" value="<?php echo $product_data['product_short_des']?>" />
    <input type="file" name="product_image" /> 
    <textarea class="ckeditor" name="product_full_des"><?php echo $product_data['product_full_des']?></textarea>
    <input type="text" name="price" placeholder="Product Price" value="<?php echo $product_data['price']?>"/>
    <input type="submit" name="save" value="Save">
</form>    
