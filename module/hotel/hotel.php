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
							<h3 style="color:#AD2705; font-size:medium;">Marriage Resort</h3>
							<div>
								<a href="#" class="figure1"><img src="images/hotel.jpg" width="268" height="158" alt="" style="float:right;"></a>
								
                            <p align="justify">
                            Skybird is the ideal choice for marriage destination. With huge gardens, greenery all around, all the facilities of an amusement and water park; the marriages in Skybird turn out to be a luxurious and gala event filled with lot of fun, super hospitality and comfort.<br/>

Our gardens are capable of handling events of various sizes and gatherings. The place offers a lot of opportunity  to experiment with decoration and aura of your event as per different themes. This is because of the sheer size and already available greenery.<br/>

For the comfortable stay of your guests we have more than 70 premium rooms with attached personal bathrooms. Our rooms will offer very comfortable stay with all modern facilities like Air Conditioner, Plum Beddings, Wardrobe and Dressing etc.<br/>

In addition to the gardens we have 2 indoor air conditioned halls and a open get-together space for the various functions of the marriage. Both the halls can easily accommodate 250 persons each. These are going to be just the perfect places for your pre wedding and post wedding functions. Since our property also has water and amusement rides you get the opportunity to organize pool side party and events. Your guests will have entire park and its facilities like rides, camel rides, safari etc exclusively for them.<br/>

The entire concept and infrastructure has been developed in a way that either the whole resort can be used for the stay and functions of both Bride's and Groom's Side or for just one side.<br/>

We invite you to visit us and explore the opportunities.
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