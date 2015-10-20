<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.ico" rel="shortcut icon" />
	<title>Nisum Technologies | Company</title>
	<link rel="stylesheet" type="text/css" href="css/base/bootstrap/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/features/main.css" />
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
    <?php include_once "lang.es.php" ?>
</head>
<body>
    <?php include "header.php" ?>

    <div class="content-wrapper">
            <div class="banner-wrapper">
                <div class="breadcrumb"><?php echo $lang['elemIdcompany.php0']; ?></div>
                <h1><span><?php echo $lang['elemIdcompany.php1']; ?></span></h1>
            </div>
         
            <div class="col-md-12 content">
            <span class="curve"></span>
            <!-- <div class="banner"><img src="images/banners/services.png" alt="banner" /></div> -->
            <div class="row">
                
                <div class="col-md-9">
                    <section>
                        <h1><?php echo $lang['elemIdcompany.php2']; ?></h1>
                        <p><?php echo $lang['elemIdcompany.php3']; ?></p>
						<p><?php echo $lang['elemIdcompany.php4']; ?></p>
						<p><?php echo $lang['elemIdcompany.php18']; ?></p>
                        <p><?php echo $lang['elemIdcompany.php5']; ?></p>
                        <p><?php echo $lang['elemIdcompany.php6']; ?></p>
                    </section>
                </div>
                <div class="col-md-3">
                    <div class="left-nav">
                        <h3 class=""><?php echo $lang['elemIdcompany.php0']; ?></h3>
                        <ul>
                            <li><a href="about-us.php"><?php echo $lang['elemIdcompany.php7']; ?></a></li>
                            <li><a href="team.php"><?php echo $lang['elemIdcompany.php8']; ?></a></li>
                            <li><a href="culture.php"><?php echo $lang['elemIdcompany.php9']; ?></a></li>
                            <li><a href="partners.php"><?php echo $lang['elemIdcompany.php10']; ?></a></li>
                            <li><a href="contact-us.php"><?php echo $lang['elemIdcompany.php11']; ?></a></li>
                        </ul>
                    </div>
                </div>
               </div>
               <div class="row">
               <div class="row cat-list">
                    <div class="category-list row">
                        <ul>
                            <li class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="category-bg">
                                <h5><?php echo $lang['elemIdcompany.php12']; ?></h5>
                                <h3><?php echo $lang['elemIdcompany.php13']; ?></h3>
                                <input type="button" value="Aprenda más" class="btn-sm learn-more learn-more-small left" onclick="window.open('solutions.php','_self');">
                                <span class="strips-bg"></span>
                                </div>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="category-bg">
                                <h5><?php echo $lang['elemIdcompany.php14']; ?></h5>
                                <h3><?php echo $lang['elemIdcompany.php15']; ?></h3>
                                <input type="button" value="Aprenda más" class="btn-sm learn-more learn-more-small left" onclick="window.open('services.php','_self');">
                                <span class="strips-bg"></span>
                                </div>
                            </li>
                            <li class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="category-bg">
                                <h5><?php echo $lang['elemIdcompany.php16']; ?></h5>
                                <h3><?php echo $lang['elemIdcompany.php17']; ?></h3>
                                <input type="button" value="Aprenda más" class="btn-sm learn-more learn-more-small left" onclick="window.open('activity.php','_self');">
                                <span class="strips-bg"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
    
    
    <?php include "footer.php" ?>


</body>
</html>