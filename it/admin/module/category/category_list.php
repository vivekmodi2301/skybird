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
	$wh.="  and (main_category_name like '%$name%' ) ";
}


if(isset($_GET['id']))
{
	$id=$_GET['id'];
	del('main_category',$id);
?>
	<script>
        location.href="index.php?mod=category&do=category_list";
    </script>

<?php
}
//$category_record=mysql_query("select * from ypctgr");
?>
<table border="1px" style="border:1px #000 solid; border-collapse:collapse; margin-top:50px;" align="center" width="600px">
	<tr>
    	<td colspan="4" style="text-align:center; font-size:20px;" height="30px">Main Category List</td>
    </tr>
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
		<td align="right" colspan="4">
        	<a href="index.php?mod=category&do=add_edit">Add  Catagory</a>
        </td>
	</tr>
    <tr>
    	<td>Id</td>
        
 <th onClick="changeOrder('main_category_name')"> Catagory 
        <?php 
		if($_POST['order']=="main_category_name" && $_POST['imgs'])
		{?>
            <img src="<?php echo $_POST['imgs']?>" id="up" width="15px" height="15px">
		<?php }?>
        </th>        <td>Edit</td>
        <td>Delete</td>
	</tr>
	<?php   
	$i=0;
	$frmdataget=$_REQUEST;
	PaginationWork();
	$product_count=mysql_query('SELECT COUNT(1) AS tot FROM main_category LIMIT 1') ;
	$totRslt=mysql_fetch_array($product_count);
	$product_record=mysql_query("SELECT  * FROM main_category  $wh order by $order $by LIMIT ".$frmdata['from'].", ".$frmdata['to']);
	while($product_data=mysql_fetch_array($product_record))
	{$i++; ?>
    <tr>
        <td><?php echo $product_data['id'];?></td>
        <td><?php echo $product_data['main_category_name'] ?></td>
        <td><a href="index.php?mod=category&do=add_edit&id=<?php echo $product_data['id']; ?>" >Edit</a></td>
        <td ><a  href="#" onClick="del(<?php echo $product_data['id'];?>)">Delete</a></td>
    </tr>
    <?php 
    } 
	?>
   <tr>
		<td colspan="4" width="400px" align="center" style="text-align:center">
	 		<?php PaginationDisplay($totRslt['tot'],'index.php?mod=category&do=category_list&pageNumber=','');?>
     	</td>
    </tr>
</table>    
<script>
function del(id)
{
	if(confirm("Do you want to delete record"))
		location.href="index.php?mod=category&do=category_list&id="+id;
}
</script>