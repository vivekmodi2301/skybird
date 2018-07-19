<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Commodity Expert</title>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
<?php
include_once("admin/confiq.php") ;
include_once("admin/db.php") ;
$list=mysql_fetch_array(mysql_query("select id,header_tip,upload_sw,contact_detail from static_detail"));
?>

<div id="wrapper-main">
	<div id="wrapper-content-main">
    	<div class="wrapper-header">
        	<div class="logo"><a href="index.html"><img src="images/logo.png" border="0"/></a> </div>
            <div class="header-txt">
             Our Expert News<br/>
         <strong style="font-size:24px"><?php if($list['header_tip']){ echo ucwords($list['header_tip']);}else{echo "Have a Nice Day";}?></strong></div>
        </div>
        	<div id="nav-menu">
        <ul>
        	<li class="current"><a href="index.php"><b>Home</b></a></li>
            <li><a href="aboutus.php"><b>About Us</b></a></li>
            <li><a href="#"><b>Payment Option</b></a></li>
            <li><a href="announcement.php"><b> Disclaimer </b></a></li>
            <li ><a href="contactus.php"><b>Contact Me</b></a></li>
			
        </ul>
    </div>
	<div id="wrapper-slider"><div class="slider-wrapper theme-default">
        	<div id="slider" class="nivoSlider" >
            <?php
            $rs=mysql_query("select id,photo from photo_gallery order by rand() desc ");
while($result=mysql_fetch_array($rs))
{?>
                <img src="admin/gallery_img/<?php echo $result['photo']?>" data-thumb="admin/gallery_img/<?php echo $result['photo']?>" alt="" />
            <?php } ?>
            </div></div></div>
            <div id="wrapper-content" class="content-padding">