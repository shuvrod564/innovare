<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>Contact US</title>
    
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body class="pt-0"> 
    
    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    
    <!-- header section start -->
    <header class="">
        <div class="container"> 
            <img 
                src="assets/images/about/about__hero.webp" 
                width="19129603" height="197"
                alt="<?php echo $site_name;?>"
                class="img-fluid w-100 object-fit-cover"
            >
        </div>
    </header>
    <!-- header section end -->

    <!--map section --> 
    <?php $folder='root'; include_once('includes/map.inc.php'); ?> 
    <!--map section --> 

    <!--lets-discuss section --> 
    <?php $folder='root'; include_once('includes/lets-discuss.inc.php'); ?> 
    <!--lets-discuss section --> 

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
    <!-- Number Counter Script -->
    <?php $folder='root'; include_once('includes/counter-script.inc.php'); ?> 
 
</body>
</html>
 