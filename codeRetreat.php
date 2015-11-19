<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.ico" rel="shortcut icon">
    <title>Nisum Technologies | Code Retreat</title>
    <link rel="stylesheet" type="text/css" href="css/base/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/features/main.css">
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/customScripts.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-68520735-1', 'auto');
		ga('send', 'pageview');
   </script>
	<style type="text/css"></style>
	<?php include_once "lang.es.php" ?>
    <link href="gallery/jflow.style.codeRetreat.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="gallery/jflow.plus.min.js" type="text/javascript"></script>
	<script src="gallery/codeRetreat.js" type="text/javascript"></script>
</head>
<body>
    <?php include "header.php" ?>

    <div class="content-wrapper">
            <div class="banner-wrapper">
                <div class="breadcrumb"><?php echo $lang['elemIWeAre100.php4']; ?></div>
            </div>
            <div class="col-md-12 content">
				<section>
					<h1><?php echo $lang['codeRetreat.php1']; ?></h1> 
					<p><?php echo $lang['codeRetreat.php2']; ?></p>
					<p><?php echo $lang['codeRetreat.php3']; ?></p>
					<p><?php echo $lang['codeRetreat.php4']; ?></p>
					<p><?php echo $lang['codeRetreat.php5']; ?></p>
					<p><?php echo $lang['codeRetreat.php6']; ?></p>
					<p><?php echo $lang['codeRetreat.php7']; ?><a href="http://bit.ly/1Odwi2Q">http://bit.ly/1Odwi2Q</a></p>
				</section>
				<div>
					Compartir en
				</div>
				<div style="float:left">
								<script>
									document.write('<a target="_blank" href="http://twitter.com/home?status=' + encodeURIComponent("Leyendo http://www.nisumlatam.com/codeRetreat.php en Nisum Latam") + '"><img src="images/twitterIcon.png" alt="Comparte esto en Twitter" /></a>');
								</script>
								<a href="http://www.linkedin.com/shareArticle?url=http://www.nisumlatam.com/codeRetreat.php" target="_blank"><img src="images/linkedInIcon.png" alt="Comparte esto en LinkedIn" /></a>

				</div></br>
				<span class="curve"></span>
				<!-- <div class="banner"><img src="images/banners/services.png" alt="banner" /></div> -->
						<div id="sliderContainer">
							<div id="mySlides">
								<div id="slide1" class="slide"><img src="images/codeRetreat/1.jpg" alt="Slide 1 jFlow Plus"/></div>
								<div id="slide2" class="slide"><img src="images/codeRetreat/2.jpg" alt="Slide 2 jFlow Plus"/></div>
							</div>
							<div id="myController">
								<span class="jFlowControl"></span> <span class="jFlowControl"></span>
							</div>
							<div class="jFlowPrev"></div>
							<div class="jFlowNext"></div>
						</div>
						<!--end: jFlow DOM -->
			</div>
    </div>    
    <?php include "footer.php" ?>
</body></html>