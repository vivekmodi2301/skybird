<!--email connection code start-->

<?php
error_reporting(false);
	if($_POST['names'])
	{
		 $name = $_REQUEST['names'];
		 $email = $_REQUEST['email'];
		 $mob = $_REQUEST['mob'];
		 $msg = $_REQUEST['msg'];
		
		$to = "skybird.bkn@gmail.com"; 
		$from =  $email;
		
		$subject = "You Got Enquiry via website";
		$description  ='<table width="70%" border="0" cellpadding="5" cellspacing="5" align="center">
		<tr><td align="left">Name :: '.ucfirst($name).'</td></tr>
		<tr><td align="left">Email :: '.$email.'</td></tr>
		<tr><td align="left">Contact no :: '.$mob.'</td></tr>
		<tr><td align="left">'.ucfirst($msg).'</td></tr>
		<tr>
		<td align="left">Thanks,<br />
		Regards '.ucfirst($name).'
		</td>
		</tr>
		
		</table>';
		$headers = "From:".$from;
		$semi_rand = md5(time());
		$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
		// Add the headers for a file attachment
		$headers .= "\nMIME-Version: 1.0\n" .
		"Content-Type: multipart/mixed;\n" .
		" boundary=\"{$mime_boundary}\"";
		// Add a multipart boundary above the plain message
		$message = "This is a multi-part message in MIME format.\n\n" .
		"--{$mime_boundary}\n" .
		"Content-Type: text/html; charset='iso-8859-1'\"\n" .
		"Content-Transfer-Encoding: 7bit\n\n  " .
		$description. "\n\n";			
		
		$ok = @mail($to, $subject,$message,$headers);
	}
	$data=mysql_fetch_array(mysql_query("select * from contact"));
?>
<!--email connection code end-->
<script type="text/javascript">
function validate(form)
{
	if(form.names.value =='')
	{
		alert('Please Enter Your Name !!');
		form.names.focus();
		return false;
	}  
	
    if(form.email.value =='' || form.email.value.length < 1)
	{
		alert('Please Enter Your Email');
		form.email.focus();
		return false;	
	}	
	if ((form.email.value.indexOf('@') < 0) || ((form.email.value.charAt(form.email.value.length-4) != '.') && (form.email.value.charAt(form.email.value.length-3) != '.'))) 
	{
		alert("You have entered an invalid email address. Please try again.");
		form.email.select();
		return false;
	}
    if(form.mob.value =='' || form.mob.value.length < 1)
	{
		alert('Please Write Your Mobile Number');
		form.mob.focus();
		return false;
	}  
	
 	 if(form.msg.value =='' || form.msg.value.length < 1)
	{
		alert('Please Write Message');
		form.msg.focus();
		return false;
	}  
	alert('Thanks your kind responce and suggation.');
 
 }
</script>
<div id="contact">
					<h1>get in touch with us.</h1>
					<div>
						<div class="figure">
                        	<p style="font-weight:bolder; color:#FCE9A7; font-size:25px;" >Locate US </p>
								<iframe width="298px" height="214px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=d&amp;source=s_d&amp;saddr=junagarh+fort+bikaner&amp;daddr=skybird+nal&amp;hl=en&amp;geocode=FRGXqwEd3MReBCFgdKEipD9W6Q%3BFdjeqwEdngRdBCH9hbWD-a6fKg&amp;mra=ls&amp;sll=50.792047,8.701172&amp;sspn=15.714534,39.506836&amp;ie=UTF8&amp;num=10&amp;ll=28.031735,73.262375&amp;spn=0.01831,0.11499&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.uk/maps?f=d&amp;source=embed&amp;saddr=junagarh+fort+bikaner&amp;daddr=skybird+nal&amp;hl=en&amp;geocode=FRGXqwEd3MReBCFgdKEipD9W6Q%3BFdjeqwEdngRdBCH9hbWD-a6fKg&amp;mra=ls&amp;sll=50.792047,8.701172&amp;sspn=15.714534,39.506836&amp;ie=UTF8&amp;num=10&amp;ll=28.031735,73.262375&amp;spn=0.01831,0.11499" style="color:#0000FF;text-align:left" target="_blank">View Larger Map</a></small>
                                
							<p>Directions from Junagarh Fort to Skybird</p>
						</div>
						<div class="section">
							<p>In order to get in touch with us simply fill this form and send us your message and we will get back to you as soon as possible.<br /><br />you can also write to us at <b>skybird.bkn@gmail.com</b>

							</p>
							<ul>
								<li>
									<span>Address</span>
                                        <?php
                                            echo $data['address'];
                                        ?>  
                                    
								</li>
								<li>
									<span>Email</span> <a href="<?php echo $data['email'];?>"><?php
                                            echo $data['email'];
                                        ?>  </a>
								</li>
								<li>
									<span>call</span><b> +91 - 151 - <?php
                                            echo $data['contact'];
                                        ?>  </b>

								</li>
								<li>
									<span>park hours</span> Timing of our Amusement Park and Resort is :9:30 AM to 8:00PM .
								</li>
							</ul>
						</div>
					</div>
					<form name="contact_us" method="post" onsubmit="return validate(this)">
						<span>send a message</span>
						<div class="information">
							<label for="name">your name:</label>
							<input type="text" name="names" id="names">
							<label for="email">email address:</label>
							<input type="email" name="email" id="email">
							<label for="subject">subject:</label>
							<input type="text" name="mob" id="mob">
						</div>
						<div>
							<label for="message">message:</label>
							<textarea name="msg" id="message"></textarea>
							<input type="submit" name="submit" id="send" value="">
						</div>
					</form>
				</div>
			</div>