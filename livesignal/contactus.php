<?php include_once("header.php");?>
            	<div id="middle-nav"><a href="#">Home</a> &raquo; <Span class="active">Contact me</Span></div>
                <div class="head1">Contact me</div>
                <div class="about-banner"><img src="images/contact_banner.png"/></div>
              <div class="contact_address"><?php echo $list['contact_detail'];?>
              </div>
              <div class="contact-form"><form action="#" method="post" name="Enquiry">
            <div class="form-head-txt">
              <div id="Enquiry_form_input">Enquiry Form</div>            
            </div>
      <div id="Enquiry_form_feild">
				<div id="Enquiry_form_txt"> Full Name:</div>
                <div id="Enquiry_form_input">
	              <input type="text" name="textarea" id="textarea" class="input_field" />
          </div>            
            </div>
        <div id="Enquiry_form_feild">
				<div id="Enquiry_form_txt">Contact Number :</div>
                <div id="Enquiry_form_input">
	              <input type="text" name="textfield" id="textfield" class="input_field" />
          </div>            
            </div>
        <div id="Enquiry_form_feild">
				<div id="Enquiry_form_txt">Email:<br />
	  </div>
                <div id="Enquiry_form_input">
	              <input type="text" name="textfield" id="textfield" class="input_field" />
          </div>            
            </div>
        <div id="Enquiry_form_feild">
          <div id="Enquiry_form_txt">Enquiry:<br />
	  </div>
                <div id="Enquiry_form_input">
                  <textarea name="textfield" class="input_field_last" id="textfield"></textarea>
                </div>            
        </div>
        <div id="submit_button"><a href="#"><img src="images/submit.png" width="76" height="21" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/celar.png" width="54" height="21" border="0" /></a></div>
              </form></div>
            <?php include_once("footer.php");?>