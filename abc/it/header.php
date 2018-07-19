<div class="tail-top-right"></div>
<div id="main">
  <!-- header -->
  <div id="header">
    <ul class="site-nav">
      <li><a href="index.php?mod=home&do=home" class="act">Home</a></li>
      <li><a href="about-us.html">About-us</a></li>
      <li><a href="articles.html">Articles</a></li>
      <li><a href="index.php?mod=contect&do=contect">Contact-us</a></li>
      <li class="last"><a href="index.php?mod=feedback&do=feedback">Feedback</a></li>
    </ul>
    <div class="logo"><a href="home.html"><img src="images/logo.gif" alt="" /></a></div>
  </div>
  <!-- content -->
  <div id="content">
    <div class="wrapper">
      <div class="col-1">
        <div class="box">
          <div class="border-top">
            <div class="border-right">
              <div class="border-bot">
                <div class="border-left">
                  <div class="inner">
                    <div class="title"><img src="images/extra-title.gif" alt="" /></div>
                    <ul class="list">
                    <?php $rs=mysql_query("SELECT * FROM `main_category");
					while($data=mysql_fetch_array($rs)){
					 ?>
                      <li><span><a href="index.php?mod=product&do=list&id=<?php echo $data['id']; ?>"><?php echo $data['main_category_name']?></a></span></li>
                      <?php }?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="banner"><a href="#"><img src="images/banner.gif" alt="" /></a></div>
      </div>
      <div class="col-2">
      
		<div class="indent">