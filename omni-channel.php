<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.ico" rel="shortcut icon" />
	<title>Nisum Technologies | Solutions | Omni channel</title>
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
                <div class="breadcrumb"><a href="solutions.php"><?php echo $lang['elemIdomni-channel.php1']; ?></a><?php echo $lang['elemIdomni-channel.php0']; ?></div>
                <h1><span><?php echo $lang['elemIdomni-channel.php2']; ?></span></h1>
            </div>
         
            <div class="col-md-12 content">
            <span class="curve"></span>
            <div class="banner"><img src="images/banners/banner-omni-channel.jpg" alt="banner"></div>
            <div class="row">
                
                <div class="col-md-9">
                    <section>
                        <p><span class="block"><?php echo $lang['elemIdomni-channel.php4']; ?></span><?php echo $lang['elemIdomni-channel.php3']; ?></p>
                     <p><?php echo $lang['elemIdomni-channel.php5']; ?></p>
                     
                    <p><span class="block"><?php echo $lang['elemIdomni-channel.php7']; ?></span><?php echo $lang['elemIdomni-channel.php6']; ?></p>

                    <p><span class="block"><?php echo $lang['elemIdomni-channel.php9']; ?></span><?php echo $lang['elemIdomni-channel.php8']; ?></p>
                    </section>
                </div>
                <div class="col-md-3">
                    <div class="left-nav">
                        <h3 class=""><?php echo $lang['elemIdomni-channel.php10']; ?></h3>
                        <ul>
                            <li><a href="eCommerce.php"><?php echo $lang['elemIdomni-channel.php11']; ?></a></li>
                            <li><a href="fulfillment.php"><?php echo $lang['elemIdomni-channel.php12']; ?></a></li>
                            <li><a href="inventory-management.php"><?php echo $lang['elemIdomni-channel.php13']; ?></a></li>
                             <li><a href="pos-systems.php"><?php echo $lang['elemIdomni-channel.php14']; ?></a></li>
                            <li><a href="crm.php"><?php echo $lang['elemIdomni-channel.php15']; ?></a></li>
                            <li><a href="social-media.php"><?php echo $lang['elemIdomni-channel.php16']; ?></a></li>
                            <li><a href="mobile.php"><?php echo $lang['elemIdomni-channel.php17']; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
                 
            </div>
    </div>
    
    <?php include "footer.php" ?>


</body>
</html>