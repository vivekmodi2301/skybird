<?php

$id=$_GET['id'];


$product_record=mysql_query("SELECT * from   customer where id=$id");
$product_data=mysql_fetch_array($product_record);

if(isset($_POST['save']))
{
	unset($_POST['save']);

	addedit('customer',$_POST,$id);
?>
<script>
location.href="index.php?mod=custmor&do=list";
</script>
<?php 
}?>

<form id="signup" method="post" enctype="multipart/form-data">
   <input  type="text" name="name" value="<?php echo $product_data['name']; ?>" placeholder="Custmor Name"  />
   <input  type="text" name="srnumber" value="<?php echo $product_data['srnumber']; ?>" placeholder="S.No."  />
   <input  type="text" name="mobile" value="<?php echo $product_data['mobile']; ?>" placeholder="Mobile Number."  />
   <input  type="text" name="particulars" value="<?php echo $product_data['particulars']; ?>" placeholder="Particulars"  />
   <input  type="text" name="pronumber" value="<?php echo $product_data['pronumber']; ?>" placeholder="Product S. No"  />
   <input  type="text" name="qty" value="<?php echo $product_data['qty']; ?>" placeholder="Qty."  />
   <input  type="text" name="rate" value="<?php echo $product_data['rate']; ?>" placeholder="Rate"  />
   <input  type="text" name="amount" value="<?php echo $product_data['amount']; ?>" placeholder="Amount"  />

   <input type="submit" name="save" value="Save">
</form>    
