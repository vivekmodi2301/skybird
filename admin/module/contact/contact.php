<?php 
	$data=mysql_fetch_array(mysql_query("select id,address,email,contact from contact where id=1"));
	if(isset($_POST['address'])){
	    
		addedit('contact',$_POST,1);
		?>
		<script>
			location.href="index.php?mod=contact&do=contact";
		</script>
		<?php
	}
?>
<form method="post">
	<table>
		<tr>
			<td colspan="2">Contact Form</td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name="address" class="form-control"><?php echo $data['address']; ?></textarea></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input value="<?php echo $data['email']; ?>" type="text" name="email"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input value="<?php echo $data['contact']; ?>" type="text" name="contact"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>