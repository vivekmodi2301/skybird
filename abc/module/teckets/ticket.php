<?php

$list=mysql_query("select id,title,description,rate from tickets ");
 ?>
<div id="content">
<br />

					<h1>Rate of tickets  at our sky bird water park and resort.</h1>
					<ul class="tickets">
                    	<?php while($result= mysql_fetch_array($list))
						{
						?>
						<li>
							<h3><?php echo ucfirst(stripslashes($result["title"]))."&nbsp;";?> </h3>
							<p>
								<?php echo ucfirst(stripslashes($result["description"]))."&nbsp;";?> 
							</p>
							<ul>
								<li>
									<span>Rate</span><span>Rs : <?php echo ucfirst(stripslashes($result["rate"]))."&nbsp;";?></span>
								</li>
								
							</ul>
						</li>
                         <?php 
						 }?>
									
								
					</ul>
				</div>
			</div>