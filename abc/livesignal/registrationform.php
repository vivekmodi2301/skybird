<?php include_once("header.php");?>
<style>
.basictbl
{
	padding:5px;
	border:1px solid#000; border-radius:20px; margin-left:200px;
	background-image:url(images/bg.png);
	}
	.basictbl td{ background-color:#fff;
	padding:10px;
	}
	.basictbl th h3{color:#fff;}
	</style>
<form id="form1" name="form1" method="post"  action="registration.php">
  <table class="basictbl" align="center" width="560">
    <tbody>
    
    <tr>
    	<th colspan="2" height="30px" >
        	<h3 >Registation</h3>
        </th>
    </tr>
    <tr>
      <td width="94">Name</td>
      <td width="187"><label>
        <input class="input_field"  name="name" id="name" required="" type="text">
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input class="input_field"  name="email" id="email" required="" type="email"></td>
    </tr>
    <tr>
      <td>Contact no</td>
      <td><input class="input_field"  name="contact" id="contact" required="" type="text"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input class="input_field"  name="city" id="city" required="" type="text"></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input name="service" id="service" value="MCX COMMODITY" required="" type="radio">
      MCX COMMODITY</label>&nbsp;&nbsp;
      <label>
          &nbsp;&nbsp;&nbsp;<input name="service" id="service" value="STOCK EQ" required="" type="radio">
      STOCK EQ</label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input name="service" id="service" value="NIFTY FUT" required="" type="radio">
      NIFTY FUT</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <label>
        <input name="service" id="service" value="STOCK FUT" required="" type="radio">
      STOCK FUT</label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input name="service" id="service" value="CALL-PUT" required="" type="radio">
      CALL-PUT</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label>
        <input name="service" id="service" value="CURRENCY " required="" type="radio">
      CURRENCY</label>
</td>
    </tr>
    <tr>
      <td colspan="2" height="45"><label><div align="center">
          <input value="Submit" type="image" src="images/submit.png">
        </div>
      </label></td>
    </tr>
  </tbody></table>
</form>
<?php include_once("footer.php");?>
