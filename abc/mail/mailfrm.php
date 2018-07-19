<?php
?>
<form name="frm" action="mail.php" method="post">
<table border="5px solid" height="400px" width="300px" align="center">
<tr>
<td>To</td>
<td><input type="text" name="to"></td>
	
</tr>
<tr>
<td>Subject</td>
<td><input type="text" name="subject"></td>

</tr>
<tr>
<td>Messagge</td>
<td><textarea name="message"></textarea>
</td>
</tr>
<tr>

<td align="center" colspan="2"><input type="submit" name="submit" value="send"></td>

</tr>

</table>
</form>