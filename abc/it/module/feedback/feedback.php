<?php 
if(isset($_POST['send']))
{	
	
	unset($_POST['send']);
	
	addedit('feedback',$_POST);
	}
?>


<div class="title"><span style="font-size:24px">FeedBack</span></div>
        
          <form id="contacts-form"  method="post">
            <fieldset>
              <div class="field">
                <label>Your Name:</label>
                <input type="text" value="" name="name"  required />
              </div>
              <div class="field">
                <label>Your E-mail:</label>
                <input type="text" value="" name="mail"  required />
              </div>
              
              <div class="field">
                <label>Your Message:</label>
                <textarea cols="1" rows="1" name="query"   required ></textarea>
              </div>
              <div class="wrapper"><input type="submit" name="send" value="send"</div>
            </fieldset>
          </form>
        </div>
