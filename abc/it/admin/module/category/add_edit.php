<?php
$id=$_GET['id'];
$category_record=mysql_query("select * from main_category where id=$id");
$category_data=mysql_fetch_array($category_record);
if(isset($_POST['save']))
{	
	
	unset($_POST['save']);
	
	addedit('main_category',$_POST,$id);
?>
<script>
location.href="index.php?mod=category&do=category_list";
</script>
<?php

}

?>
<table border="1px" style="border:1px #000 solid; border-collapse:collapse;  text-align:center; margin-top:50px;"   align="center" width="600px">
<tr>
	<td>
<form id="signup" method="post">
    <h1>Main Category Form</h1>
    <input type="name" name="main_category_name" placeholder="Main Category Name" value="<?php echo $category_data['main_category_name'] ?>" required>
    <input type="submit" name="save" value="Save">	
</form>
</td></tr></table>