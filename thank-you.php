<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Thank You</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

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

    <!-- Content Wrapper Start -->
    <div class="py-5">
        <div class="container">
            
            <h1 class="display-3 lg text-capitalize text-white text-center text-md-start text-lg-center fw-light">
            Thank You
            </h1> 
            <h2 class="fs-3 fw-light text-center">Your message has been received. <br> We will contact you shortly.</h2> 
        </div><!--.//container-->
    </div>
    <!-- Content Wrapper End -->

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>