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
    <div class="container"> 
        <img 
            srcset="
                assets/images/about/hero-bg-sm.webp 575w,
                assets/images/about/hero-bg-md.webp 991w,
                assets/images/about/hero-bg.webp 1200w
            " 
            src="assets/images/about/hero-bg.webp" 
            width="1296" height="197"
            alt="<?php echo $site_name;?>"
            class="img-fluid w-100 object-fit-cover rounded-3"
        >
    </div> 
    <!-- header section end -->

    <!--map section --> 
    <?php $folder='root'; include_once('includes/map.inc.php'); ?> 
    <!--map section --> 

    <!--lets-discuss section --> 
    <?php 
        $title="Join Us on Your Next Project";
        $description="Whether you're dreaming of a cozy home for your family or envisioning a commercial space that stands out, Innovare Constructions is here to turn your dreams into reality. Contact us today to embark on a journey toward creating spaces that not only meet your needs but also inspire and delight. Let's build something extraordinary together.";
        include_once('includes/contact-section.inc.php'); 
    ?> 
    <!--lets-discuss section --> 

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
    <!-- Number Counter Script -->
    <?php $folder='root'; include_once('includes/counter-script.inc.php'); ?> 
 
</body>
</html>
 