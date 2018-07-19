<?php
$id=$_GET['id'];
$category_record=mysql_query("select * from menu  where id=$id");
$category_data=mysql_fetch_array($category_record);
if(isset($_POST['save']))
{	
	
	unset($_POST['save']);
	
	addedit('menu',$_POST,$id);
?>
<script>
location.href="index.php?mod=menu&do=list";
</script>
<?php

}

?>
<table border="1px" style="border:1px #000 solid; border-collapse:collapse;  text-align:center; margin-top:50px;"   align="center" width="600px">
<tr>
	<td>
<form id="signup" method="post">
    <h1>Our Services Form</h1>
    <input type="name" name="name" placeholder="Our Services" value="<?php echo $category_data['name'] ?>" required>
    <input type="submit" name="save" value="Save">	
</form>
</td></tr></table>