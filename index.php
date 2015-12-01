<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Nisum Technologies es una consultora global de tecnología para grandes y pequeñas empresas. Su sede principal se encuentra en California, fue fundada en el año 2000 bajo el lema “construyendo el éxito juntos”, gracias al cual ha crecido y adquirido más de 700 consultores y ocho oficinas entre Estados Unidos, India y Chile. ">
<meta name="author" content="">
<link href="images/favicon.ico" rel="shortcut icon" />
<title>Nisum Technologies - Building Success Together</title>
<link rel="stylesheet" type="text/css" href="css/base/bootstrap/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/features/main.css" />
<link rel="stylesheet" type="text/css" href="css/features/ncarousel.css" />

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/html5shiv.js"></script>
<!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap/carousel.js"></script>
<script type="text/javascript" src="js/customScripts.js"></script>
<script type="text/javascript" src="js/nCarousel.js"></script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-68520735-1', 'auto');
		ga('send', 'pageview');
   </script>
<?php include_once "lang.es.php" ?>
</head>
<body id="mobile-ref">
<?php include "header.php" ?>
<div class="captions">
  <h1><span><?php echo $lang['elemIdindex.php0']; ?></span></h1>
  <h1><span><?php echo $lang['elemIdindex.php1']; ?></span></h1>
  <h1><span><?php echo $lang['elemIdindex.php2']; ?></span></h1>
</div>
<div id="what-wedo-wrapper" style="display: none;">
  <div class="we-do">
    <h1><?php echo $lang['elemIdindex.php3']; ?></h1>
    <a href="#" class="close"><?php echo $lang['elemIdindex.php4']; ?></a>
    <p><?php echo $lang['elemIdindex.php5']; ?></p>
    <p><?php echo $lang['elemIdindex.php6']; ?></p>
    <a href="about-us.php">
    <input type="button" value="<?php echo $lang['elemIdindex.php7']; ?>" class="btn-sm learn-more left">
    </a> <span class="strips-bg"></span> </div>
</div>
<div class="what-we-do"><span class="arrow"><?php echo $lang['elemIdindex.php8']; ?></span></div>

<div id="myCarousel" class="carousel slide"> 
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
  </ol>
  
  <div class="carousel-inner">
    <div class="item">
      <div class="fill"> <img src="images/banners/Nisum-Campaign-Auto.jpg" width="100%" height="100%" class="big-slide"> <img src="images/banners/Nisum-Campaign-Auto-1024.jpg" width="100%" height="100%" class="medium-slide"> <img src="images/mobile/slider1.jpg" width="100%" height="100%" class="small-slide"> </div>
      <div class="carousel-caption">
        <div class="slider-titles">
          <h1><span><?php echo $lang['elemIdindex.php9']; ?></span></h1>
          <h1><span><?php echo $lang['elemIdindex.php10']; ?><strong><?php echo $lang['elemIdindex.php12']; ?></strong><?php echo $lang['elemIdindex.php11']; ?></span></h1>
          <!-- <h1><span>advantage.</span></h1> --> 
        </div>
        <div class="services first"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php13']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php14']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php15']; ?>" class="btn-sm learn-more left" onclick="window.open('analytics-bigdata.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services first_2"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php16']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php17']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php18']; ?>" class="btn-sm learn-more left" onclick="window.open('crm.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services first_3"> <span class="icon activeTile"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php19']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php20']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php21']; ?>" class="btn-sm learn-more left" onclick="window.open('functional-test-automation.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services first_4"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php22']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php23']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php24']; ?>" class="btn-sm learn-more left" onclick="window.open('application-development-maintenance.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="fill"> <img src="images/banners/Nisum-Campaign-Retail.jpg" width="100%" height="100%" class="big-slide"> <img src="images/banners/Nisum-Campaign-Retail-1024.jpg" width="100%" height="100%" class="medium-slide"> <img src="images/mobile/slider2.jpg" width="100%" height="100%" class="small-slide"> </div>
      <div class="carousel-caption">
        <div class="slider-titles2">
          <h1><span><?php echo $lang['elemIdindex.php25']; ?></span></h1>
          <h1><span><?php echo $lang['elemIdindex.php26']; ?><strong><?php echo $lang['elemIdindex.php28']; ?></strong><?php echo $lang['elemIdindex.php27']; ?></span></h1>
        </div>
        <div class="services second"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php29']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php30']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php31']; ?>" class="btn-sm learn-more left" onclick="window.open('oms.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services second_2"> <span class="icon activeTile"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php32']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php33']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php34']; ?>" class="btn-sm learn-more left" onclick="window.open('omni-channel.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services second_3"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2 style="font-size:20px;"><?php echo $lang['elemIdindex.php35']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php36']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php37']; ?>" class="btn-sm learn-more left" onclick="window.open('agile-enablement.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services second_4"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php38']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php39']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php40']; ?>" class="btn-sm learn-more left" onclick="window.open('international-eCommerce.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="fill"> <img src="images/banners/Nisum-Campaign-Media.jpg" width="100%" height="100%" class="big-slide"> <img src="images/banners/Nisum-Campaign-Media-1024.jpg" width="100%" height="100%" class="medium-slide"> <img src="images/mobile/slider3.jpg" width="100%" height="100%" class="small-slide"> </div>
      <div class="carousel-caption">
        <div class="slider-titles2">
          <h1><span><?php echo $lang['elemIdindex.php41']; ?></span></h1>
          <h1><span><?php echo $lang['elemIdindex.php42']; ?><strong><?php echo $lang['elemIdindex.php44']; ?></strong><?php echo $lang['elemIdindex.php43']; ?></span></h1>
        </div>
        <div class="services three"> <span class="icon activeTile"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php45']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php46']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php47']; ?>" class="btn-sm learn-more left" onclick="window.open('mobile.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services three_2"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php48']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php49']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php50']; ?>" class="btn-sm learn-more left" onclick="window.open('agile-enablement.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services three_3"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php51']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php52']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php53']; ?>" class="btn-sm learn-more left" onclick="window.open('analytics-bigdata.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services three_4"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php54']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php55']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php56']; ?>" class="btn-sm learn-more left" onclick="window.open('omni-channel.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item active">
      <div class="fill"> <img src="images/banners/Nisum-Campaign-Medical.jpg" width="100%" height="100%" class="big-slide"> <img src="images/banners/Nisum-Campaign-Medical-1024.jpg" width="100%" height="100%" class="medium-slide"> <img src="images/mobile/slider4.jpg" width="100%" height="100%" class="small-slide"></div>
      <div class="carousel-caption">
        <div class="slider-titles">
          <h1><span><?php echo $lang['elemIdindex.php57']; ?></span></h1>
          <h1><span><?php echo $lang['elemIdindex.php58']; ?><strong><?php echo $lang['elemIdindex.php60']; ?></strong><?php echo $lang['elemIdindex.php59']; ?></span></h1>
        </div>
        <div class="services four"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php61']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php62']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php63']; ?>" class="btn-sm learn-more left" onclick="window.open('mobile.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services four_2"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php64']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php65']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php66']; ?>" class="btn-sm learn-more left" onclick="window.open('test-automation.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services four_3"> <span class="icon"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php67']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php68']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php69']; ?>" class="btn-sm learn-more left" onclick="window.open('crm.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
        <div class="services four_4"> <span class="icon activeTile"></span>
          <div class="services-wrapper">
            <h2><?php echo $lang['elemIdindex.php70']; ?></h2>
            <span class="closeIcon"></span>
            <div class="info">
              <p><?php echo $lang['elemIdindex.php71']; ?></p>
              <input type="button" value="<?php echo $lang['elemIdindex.php72']; ?>" class="btn-sm learn-more left" onclick="window.open('application-development-maintenance.html','_self');">
              <span class="strips-bg"></span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="partners-logo"> 
    <span><?php echo $lang['elemIdindex.php73']; ?></span>   
    <a href="partners.php"><img src="images/partners-logos.png" alt="partners"></a>
  </div>  
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span> </a> 
  <div id="docDown" class="scroll-down"><?php echo $lang['elemIdindex.php74']; ?></div>   
  </div>
<div class="mobile-wrapper">
  <div class="data-wrapper">
    <h1><?php echo $lang['elemIdindex.php75']; ?></h1>
    <p><?php echo $lang['elemIdindex.php76']; ?></p>
    <p><?php echo $lang['elemIdindex.php77']; ?></p>
  </div>
    <div class="partners">
      <h5><?php echo $lang['elemIdindex.php78']; ?></h5>
      <div class="partners-list">
          <a href="partners.php"><img class="img-responsive" alt="partners" src="images/partnersImg.png"></a>
      </div>
  </div>
  <div class="services-mob">
    <div class="list">
      <ul>
    <li>
      <h5><?php echo $lang['elemIdindex.php226']; ?></h5>
      <h2><?php echo $lang['elemIdindex.php227']; ?></h2>
      <img src="images/ShamiVideo.png" alt="Shami" width="340" height="90">
      <p class="team-description"><?php echo $lang['elemIdindex.php228']; ?></p>
      <a href="shami-ahuja.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php229']; ?></a> <span class="strips-bg" ></span></div>
    </li>
    <li>
      <h5><?php echo $lang['elemIdindex.php222']; ?></h5>
      <h2><?php echo $lang['elemIdindex.php223']; ?></h2>
      <img src="images/VideoJCG.png" alt="Jose" width="340" height="90">
      <p class="team-description"><?php echo $lang['elemIdindex.php224']; ?></p>
      <a href="josecasal.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php225']; ?></a> <span class="strips-bg" ></span></div>
    </li>
		<li>
			<h5><?php echo $lang['elemIdindex.php218']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php219']; ?></h2>
			<img src="images/portadaJanel.jpg" alt="Nisum Search" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php220']; ?></p>
			<a href="janelwellborn.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php221']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php214']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php215']; ?></h2>
			<img src="images/portadaCode.jpeg" alt="Nisum Search" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php216']; ?></p>
			<a href="codeRetreat.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php217']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php210']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php211']; ?></h2>
			<img src="images/star-tech.jpg" alt="Nisum Search" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php2012']; ?></p>
			<a href="startechconf.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php213']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php206']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php207']; ?></h2>
			<img src="images/mary.jpg" alt="Nisum Search" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php208']; ?></p>
			<a href="poppendieck.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php209']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php202']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php203']; ?></h2>
			<img src="images/agile-lean-portada.jpg" alt="Nisum Search" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php204']; ?></p>
			<a href="agile-lean-2015.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php205']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php198']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php199']; ?></h2>
			<img src="images/ProgramaSeminarioP.jpg" alt="Nisum Search" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php200']; ?></p>
			<a href="agile-lean.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php201']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php194']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php195']; ?></h2>
			<img src="images/nisumSearch.jpg" alt="Nisum Search" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php196']; ?></p>
			<a href="nisum-search.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php197']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php186']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php187']; ?></h2>
			<img src="images/shop-org.png" alt="Shop.org" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php188']; ?></p>
			<a href="shop-org.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php165']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php182']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php183']; ?></h2>
			<img src="images/releaseHourOfCode.jpg" alt="Hour of Code" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php184']; ?></p>
			<a href="release-hour-of-code.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php165']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php178']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php179']; ?></h2>
			<img src="images/hora-del-codigo.png" alt="Hora del Codigo" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php180']; ?></p>
			<a href="hour-of-the-code.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php165']; ?></a> <span class="strips-bg"></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php174']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php175']; ?></h2>
			<img src="images/janel.jpg" alt="Janel" width="340" height="90" style="padding-left: 90px;padding-right:90px">
			<p class="team-description"><?php echo $lang['elemIdindex.php176']; ?></p>
			<a href="janel-visit-chile.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php165']; ?></a> <span class="strips-bg" ></span>
		</li>
		<li>
			<h5><?php echo $lang['elemIdindex.php170']; ?></h5>
			<h2><?php echo $lang['elemIdindex.php171']; ?></h2>
			<img src="images/latam-project.jpg" alt="WeAre100" width="340" height="90">
			<p class="team-description"><?php echo $lang['elemIdindex.php172']; ?></p>
			<a href="first-latam-project.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php165']; ?></a> <span class="strips-bg"></span>
		</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Mobile Data  -->


 <div id="bottomCarouselWrapper" class="carousel-wrapper">
        <div class="left-scroll">
            <img src="images/arrowL.png">
        </div>
        <div class="carousel_inner">
            <ul class="carousel-ul" style="left: -570.5px;">   
              <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php125']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php126']; ?></h2>
                <img src="images/galleryImg5.jpg" alt="Jobs" width="340" height="90">
                <p><?php echo $lang['elemIdindex.php127']; ?></p>
                <a href="chile-openings.php" value="Learn More" class="btn-sm learn-more left" target="_blank"><?php echo $lang['elemIdindex.php128']; ?></a> <span class="strips-bg"></span> </div>                
              </li>
			  <li style="opacity: 1;">
				<div class="sliderInfo">
				<h5><?php echo $lang['elemIdindex.php113']; ?></h5>
				<h2><?php echo $lang['elemIdindex.php114']; ?></h2>
				<img src="images/galleryImg4.jpg" alt="Team" width="340" height="90">
				<p class="team-description"><?php echo $lang['elemIdindex.php115']; ?></p>
				<a href="team.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php116']; ?></a> <span class="strips-bg"></span> </div>
			   </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php170']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php171']; ?></h2>
                <img src="images/latam-project.jpg" alt="Latam" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php172']; ?></p>
                <a href="first-latam-project.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php173']; ?></a> <span class="strips-bg" ></span></div>
              </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php186']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php187']; ?></h2>
                <img src="images/shop-org.png" alt="Shop.org" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php188']; ?></p>
                <a href="shop-org.php" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php189']; ?></a> <span class="strips-bg" ></span></div>
              </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php190']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php191']; ?></h2>
                <img src="images/ymca.png" alt="YMCA" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php192']; ?></p>
                <a href="http://www.ymcasf.org/kidstocampgolf/about_the_tournament" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php193']; ?></a> <span class="strips-bg" ></span></div>
              </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php194']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php195']; ?></h2>
                <img src="images/nisumSearch.jpg" alt="Nisum Busca" width="340" height="90" style="padding-left:50px;padding-right:50px">
                <p class="team-description"><?php echo $lang['elemIdindex.php196']; ?></p>
                <a href="nisum-search.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php197']; ?></a> <span class="strips-bg" ></span></div>
              </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php198']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php199']; ?></h2>
                <img src="images/ProgramaSeminarioP.jpg" alt="Seminario" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php200']; ?></p>
                <a href="agile-lean.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php201']; ?></a> <span class="strips-bg" ></span></div>
              </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php202']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php203']; ?></h2>
                <img src="images/agile-lean-portada.jpg" alt="Seminario" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php204']; ?></p>
                <a href="agile-lean-2015.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php205']; ?></a> <span class="strips-bg" ></span></div>
              </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php206']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php207']; ?></h2>
                <img src="images/mary.jpg" alt="Seminario" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php208']; ?></p>
                <a href="poppendieck.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php209']; ?></a> <span class="strips-bg" ></span></div>
              </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php210']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php211']; ?></h2>
                <img src="images/star-tech.jpg" alt="Seminario" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php212']; ?></p>
                <a href="startechconf.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php213']; ?></a> <span class="strips-bg" ></span></div>
              </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php214']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php215']; ?></h2>
                <img src="images/portadaCode.jpeg" alt="Code" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php216']; ?></p>
                <a href="codeRetreat.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php217']; ?></a> <span class="strips-bg" ></span></div>
              </li>
			  <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php218']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php219']; ?></h2>
                <img src="images/portadaJanel.jpg" alt="Janel" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php220']; ?></p>
                <a href="janelwellborn.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php221']; ?></a> <span class="strips-bg" ></span></div>
              </li>
        <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php222']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php223']; ?></h2>
                <img src="images/VideoJCG.png" alt="Jose" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php224']; ?></p>
                <a href="josecasal.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php225']; ?></a> <span class="strips-bg" ></span></div>
              </li>
        <li style="opacity: 1;">
                <div class="sliderInfo">
                <h5><?php echo $lang['elemIdindex.php226']; ?></h5>
                <h2><?php echo $lang['elemIdindex.php227']; ?></h2>
                <img src="images/ShamiVideo.png" alt="Shami" width="340" height="90">
                <p class="team-description"><?php echo $lang['elemIdindex.php228']; ?></p>
                <a href="shami-ahuja.php" target="_blank" value="Learn More" class="btn-sm learn-more left"><?php echo $lang['elemIdindex.php229']; ?></a> <span class="strips-bg" ></span></div>
        </li>
          </ul>
        </div>
        <div class="right-scroll">
            <img src="images/arrowR.png">
        </div>
    </div>


<?php include "footer.php" ?>
<script type="text/javascript">
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });

    //Initiate bottom Carousel
    $("#bottomCarouselWrapper").runCarousel({
       autoSlide:true,
      hoverPause: true
    });
</script>
</body>
</html>