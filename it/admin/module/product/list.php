 <script>
	function changeOrder(name)
	{
		order.value=name;
		if(asc_desc.value=="asc")
		{
			asc_desc.value="desc";
			imgs.value="logo/arrow-down.gif";
		}
		else
		{			
			asc_desc.value="asc";
			imgs.value="logo/arrow-up.gif";
		}
		frm.submit();
	}
	
	</script>


<?php
$order="id";
$by="desc";
$atoz="";
$wh=" where 1=1 ";
if(isset($_POST['order']) && $_POST['order'])
	$order=$_POST['order'];

if(isset($_POST['asc_desc']) && $_POST['asc_desc'])
	$by=$_POST['asc_desc'];


if(isset($_POST['name']) && $_POST['name'])
{
	$name=$_POST['name'];
	$wh.="  and (product_name like '%$name%' ) ";
}

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$product_record=mysql_query("select id, product_title, product_name, main_category_id, category_id, product_short_des,product_image,product_full_des,price, price_in_usd,shipping,payment,keyword,add_heading,add_description,comment from product where id=$id");
	$product_data=mysql_fetch_array($product_record);
	unlink('product_photo/'.$product_data['product_image']);
	del('product',$id);
?>
<script>
location.href="index.php?mod=product&do=list";
</script>
<?php 
}
?>

<table width="900px" align="center" style="border:1px solid #000; border-collapse:collapse ; margin-top:30px;" border="1px">
	<tr>
  <form id="frm" method="post">
              <td colspan="5" align="right" height="30px">  <input type="text" name="name" id="nm" value="<?php echo $_POST['name']?>" placeholder="Search">
                <input type="hidden" id="AtoZ" name="AtoZ" value="<?php echo $_POST['AtoZ']?>">
                <input type="hidden" name="order" id="order" value="<?php echo $_POST['order']?>"/>
                <input type="hidden" name="imgs" id="imgs" value="<?php echo $_POST['imgs']?>"/>
                <input type="hidden" name="asc_desc" id="asc_desc" value="<?php echo $_POST['asc_desc']?>"/>
                <input type="submit" value="Search"></td>
            </form>
</tr>

    <tr>
		<td align="right" colspan="8">
        	<a href="index.php?mod=product&do=add_edit">Add Product</a>
        </td>
	</tr>
    <tr>
        <td>Product Image</td>
 <th onClick="changeOrder('product_name')"> Name 
        <?php 
		if($_POST['order']=="product_name" && $_POST['imgs'])
		{?>
            <img src="<?php echo $_POST['imgs']?>" id="up" width="15px" height="15px">
		<?php }?>
        </th>        <td>Product Rate</td>
        <td>Product Short Description</td>
        <td colspan="3" align="center" ><img src="fulltext.png"  /></td>
    </tr>
 <?php 
 
	$frmdataget=$_REQUEST;
	PaginationWork();
	$product_count=mysql_query('SELECT COUNT(1) AS tot FROM PRODUCT LIMIT 1') ;
	$totRslt=mysql_fetch_array($product_count);
	//echo count($totRslt);
		$product_record=mysql_query("SELECT `id`,`product_name`,`main_category_id`,`product_short_des`,`product_image`,`product_full_des`,`price`,`price_in_usd`FROM PRODUCT  $wh order by $order $by LIMIT ".$frmdata['from'].", ".$frmdata['to']);
		
while($product_data=mysql_fetch_array($product_record))
{
	?>
	<tr>
        <td><img src="product_photo/<?php echo $product_data['product_image']?>" width="50px" height="50px" /></td>
        <td><?php echo $product_data['product_name']?></td>
        <td><?php echo $product_data['price']?></td>
        <td><?php echo $product_data['product_short_des']?></td>
        <td style=" border:none;" align="center"> <a href="index.php?mod=product&do=add_edit&id=<?php echo $product_data['id']?>"><img src="edit.png"  /></a></td>
       		<td style=" border:none;" align="center"> <a href="#" onClick="del(<?php echo $product_data['id']?>)"><img src="drop.png"  /></a> </td>
        <td style=" border:none;" align="center"><input type="checkbox"  /></td>
	</tr>        
	
<?php }
?>    
<tr>
		<td colspan="7" width="400px" align="center" style="text-align:center">
	 		<?php PaginationDisplay($totRslt['tot'],'index.php?mod=product&do=list&pageNumber=','');?>
     	</td>
    </tr>
	
</table>
<script>
function del(id)
{
	if(confirm("Do you want to delete record"))
		location.href="index.php?mod=product&do=list&id="+id;
}
</script>