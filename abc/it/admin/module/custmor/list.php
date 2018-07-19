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
	$wh.="  and (name like '%$name%' ) ";
}

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$product_record=mysql_query("select *  from customer where id=$id");
	$product_data=mysql_fetch_array($product_record);
	del('customer',$id);
?>
<script>
location.href="index.php?mod=custmor&do=list";
</script>
<?php 
}
?>

<table width="900px" align="center" style="border:1px solid #000; border-collapse:collapse ; margin-top:30px;" border="1px">
<tr>
    	<td colspan="11" style="text-align:center; font-size:20px;" height="30px">Custmor List</td>
    </tr>	<tr>
  <form id="frm" method="post">
              <td colspan="11" align="right" height="30px">  <input type="text" name="name" id="nm" value="<?php echo $_POST['name']?>" placeholder="Search">
                <input type="hidden" id="AtoZ" name="AtoZ" value="<?php echo $_POST['AtoZ']?>">
                <input type="hidden" name="order" id="order" value="<?php echo $_POST['order']?>"/>
                <input type="hidden" name="imgs" id="imgs" value="<?php echo $_POST['imgs']?>"/>
                <input type="hidden" name="asc_desc" id="asc_desc" value="<?php echo $_POST['asc_desc']?>"/>
                <input type="submit" value="Search"></td>
            </form>
</tr>

    <tr>
		<td align="right" colspan="11">
        	<a href="index.php?mod=custmor&do=add_edit">Add Product</a>
        </td>
	</tr>	 	 	 	 	 	 	 	 
    <tr>
 <th onClick="changeOrder('name')"> Name 
        <?php 
		if($_POST['order']=="name" && $_POST['imgs'])
		{?>
            <img src="<?php echo $_POST['imgs']?>" id="up" width="15px" height="15px">
		<?php }?>
        </th>        
        <th>srnumber </th>
        <th>mobile</th>
        <th>particulars</th>
        <th>pronumber</th>
        <th>qty</th>
        <th>rate</th>
        <th>amount</th>
        <th colspan="3" align="center" ><img src="fulltext.png"  /></th>
    </tr>
 <?php 
 
	$frmdataget=$_REQUEST;
	PaginationWork();
	$product_count=mysql_query('SELECT COUNT(1) AS tot FROM customer LIMIT 1') ;
	$totRslt=mysql_fetch_array($product_count);
	//echo count($totRslt);
		$product_record=mysql_query("SELECT * FROM customer  $wh order by $order $by LIMIT ".$frmdata['from'].", ".$frmdata['to']);
		
while($product_data=mysql_fetch_array($product_record))
{
	?>
    	
	<tr>
        <td><?php echo $product_data['name']?></td>
        <td><?php echo $product_data['srnumber']?></td>
        <td><?php echo $product_data['mobile']?></td>
        <td><?php echo $product_data['particulars']?></td>
        <td><?php echo $product_data['pronumber']?></td>
        <td><?php echo $product_data['qty']?></td>
        <td><?php echo $product_data['rate']?></td>
        <td><?php echo $product_data['amount']?></td>

        <td style=" border:none;" align="center"> <a href="index.php?mod=custmor&do=add_edit&id=<?php echo $product_data['id']?>"><img src="edit.png"  /></a></td>
       		<td style=" border:none;" align="center"> <a href="#" onClick="del(<?php echo $product_data['id']?>)"><img src="drop.png"  /></a> </td>
        <td style=" border:none;" align="center"><input type="checkbox"  /></td>
	</tr>        
	
<?php }
?>    
<tr>
		<td colspan="7" width="400px" align="center" style="text-align:center">
	 		<?php PaginationDisplay($totRslt['tot'],'index.php?mod=customer&do=list&pageNumber=','');?>
     	</td>
    </tr>
	
</table>
<script>
function del(id)
{
	if(confirm("Do you want to delete record"))
		location.href="index.php?mod=custmor&do=list&id="+id;
}
</script>