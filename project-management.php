<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.ico" rel="shortcut icon" />
	<title>Nisum Technologies | Services | Project Management</title>
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
                <div class="breadcrumb"><a href="services.php"><?php echo $lang['elemIdproject-management.php1']; ?></a><?php echo $lang['elemIdproject-management.php0']; ?></div>
                <h1><span><?php echo $lang['elemIdproject-management.php2']; ?></span></h1>
            </div>
         
            <div class="col-md-12 content">
            <span class="curve"></span>
           <!--  <div class="banner"><img src="images/banners/services.png" alt="banner" /></div> -->
            <div class="row">
                
                <div class="col-md-9">
                    <section>
                        <h1><?php echo $lang['elemIdproject-management.php3']; ?></h1>
                        <p><?php echo $lang['elemIdproject-management.php4']; ?></p>
                        <p><?php echo $lang['elemIdproject-management.php5']; ?><abbr title="Project Management Office"><?php echo $lang['elemIdproject-management.php7']; ?></abbr><?php echo $lang['elemIdproject-management.php6']; ?></p>
                        <p><?php echo $lang['elemIdproject-management.php8']; ?></p>
                    </section>
                </div>
                <div class="col-md-3">
                    <div class="left-nav">
                        <h3 class=""><?php echo $lang['elemIdproject-management.php1']; ?></h3>
                        <ul>
                            <li><a href="strategic-it-planning.php"><?php echo $lang['elemIdproject-management.php9']; ?></a></li>
                            <li><a href="project-management.html" class="active"><?php echo $lang['elemIdproject-management.php10']; ?></a></li>
                            <li><a href="process-improvement.php"><?php echo $lang['elemIdproject-management.php11']; ?></a></li>
                            <li><a href="cots-customization.php"><?php echo $lang['elemIdproject-management.php12']; ?></a></li>
                            <li><a href="application-development-maintenance.php"><?php echo $lang['elemIdproject-management.php13']; ?></a></li>
                            <li><a href="testing.php"><?php echo $lang['elemIdproject-management.php14']; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
    </div>
    
    <?php include "footer.php" ?>


</body>
</html>