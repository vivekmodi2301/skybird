<link rel="stylesheet" type="text/css" href="resort_gallery/css/grid-accordion.css" media="screen">
<link rel="stylesheet" type="text/css" href="resort_gallery/css/grid-accordion-example1.css" media="screen">
<link rel="stylesheet" type="text/css" href="resort_gallery/css/style.css" media="screen">
<script type="text/javascript" src="resort_gallery/js/jquery.min.js"></script>
<script type="text/javascript" src="resort_gallery/js/jquery.gridAccordion.min.js"></script>
<style>

          
			    .reference{
                clear:both;
                width:800px;
                margin:10px  auto;
            }
            .reference p a
			{
                text-transform:uppercase;
                color:#FADF83;
                text-decoration:none;
                font-size:10px;
            }
            .reference p a:hover{
                color:#FADF83;
            }

.style1 {color: #FADF83}
</style>
<script type="text/javascript">
	
jQuery(document).ready(function($) {
    $('.accordion').gridAccordion({
        width: 760,
        height: 660,
        columns: 4,
        distance: 2,
        closedPanelWidth: 10,
        closedPanelHeight: 10,
        alignType: 'centerCenter',
        slideshow: true,
        panelProperties: {
            0 : {
                captionWidth: 200,
                captionHeight: 35,
                captionTop: 30,
                captionLeft: 30
            },
            4 : {
                captionWidth: 150,
                captionHeight: 100,
                captionTop: 30,
                captionLeft: 650
            },
            7 : {
                captionWidth: 310,
                captionHeight: 35,
                captionTop: 350,
                captionLeft: 40
            },
            8 : {
                captionWidth: 300,
                captionHeight: 40,
                captionTop: 150,
                captionLeft: 35
            },
            11 : {
                captionWidth: 150,
                captionHeight: 120,
                captionTop: 300,
                captionLeft: 30
            },
            14 : {
                captionWidth: 300,
                captionHeight: 40,
                captionTop: 30,
                captionLeft: 50
            },
            16 : {
                captionWidth: 150,
                captionHeight: 120,
                captionTop: 150,
                captionLeft: 10
            },
            18 : {
                captionWidth: 300,
                captionHeight: 40,
                captionTop: 130,
                captionLeft: 50
            }
        }
    });
});
	
</script>
<div id="blog" >
					<ul id="article" style="width:95%;">
						<li><br />
							<h3 style="color:#AD2705; font-size:medium;">Our Resort and Restaurant facility</h3>
							<div>
								<a href="#" class="figure1"><img src="images/hotel.jpg" width="268" height="158" alt="" style="float:right;"></a>
								
                            <p align="justify">
                            Planning a group getaway? Take advantage of our group discounts for your next event... school trips, scout outings, family reunions, team building, religious retreats and private parties all become a tropical breeze to organize at Skybird Resort.<br />
								Weddings are considered to be life's one of the most important event which leads way to an altogether new journey of happiness & joy unfound so far.<br />
Every couple has the desire of celebrating their marriage in a manner which remains forever in their cherished memory.<br />

The charm of tying the nuptial knot in Bikaner is hard to resist. The lavish affair of marriage gets an ultimate high on your destination wedding in Skybird  Resort. From the day of the engagement to the joyous day and all the important milestones in between, Skybird  has different locations for all the functions.<br />

Its very difficult to find a more beautiful venue than Skybird Resort situated on the outskirts of Bikaner on Bikaner-Jaisalmer Highway amidst the lush green lawns. 
<br />
If you are planning to celebrate your kid's birthday party consider doing it outside under the sky? Welcome to the Skybird Resort. It is one of Bikaner's most happening Resorts and a popular party venue serving as a perfect destination for all your celebrations needs. We are extremely popular with the children and with the grown - ups too. We have something to keep everyone happy. Our Indoor Birthday Party halls can accommodate up to 500 people.
 <br /></p>
                                
							</div>
						</li>  
						
						
						
<li>
<ul class="accordion">
<?php
$list=mysql_query("select id,photo from resort_image order by id desc");
?>
<?php 
			while($data=mysql_fetch_array($list))
				{
			?>

                <li>
                    <a href="admin/resort_img/<?php echo $data["photo"];?>">
                    <img src="admin/resort_img/<?php echo $data["photo"];?>" /></a>
                                        
                </li>
                <?php
                	}
				?>
  
</ul>
</li>
</ul>            
			</div>