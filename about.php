<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>About US</title>
    
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

    <!--  About section Start -->
    <section class="py-5 bg-primary">
        <div class="container">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-6">
                    <div class="py-lg-2 text-white text-center text-lg-start">
                        <h2 class="fs-1 fw-bold spacing-x text-uppercase">About Innovare Constructions</h2>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-6">
                    <div class="py-lg-2 text-white text-center text-lg-start"> 
                        <p class="top__title text-white fw-semibold lead-lg">Crafting Spaces, Building Dreams</p>
                        <p class=" mt-3">
                            Welcome to Innovare Constructions, where our essence lies in transforming mere spaces into places where life unfolds and memories are created. As a cherished family-owned entity, we infuse every project with the warmth of our family values, ensuring that our dedication to fostering personal connections shines through in our work. Our foundation is built on the belief that every construction project, be it residential or commercial, is a canvas for our clients' visions, and it's our privilege to bring these visions into reality.
                        </p>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->

            <div class="row g-4 gx-xxl-5 mt-4">
                <div class="col-lg-5 order-lg-2 align-items-center d-flex">
                    <img 
                        src="assets/images/about/modern.webp" 
                        alt="colorful flower"
                        class="img-fluid w-100 object-fit-cover" width="512" height="522" 
                    >
                </div><!--//.col-->
                <div class="col-lg-7 order-lg-1 d-flex align-items-center">
                    <div class="py-lg-2 text-white text-center text-lg-start">
                        <h2 class="fs-1 fw-bold spacing-x text-uppercase mb-3">Our Commitment to Excellence</h2>
                        <p class="m-0">
                            At Innovare Constructions, excellence is not just a goal; it's our way of life. We pride ourselves on our unwavering commitment to quality craftsmanship, meticulous attention to detail, and the pursuit of innovative solutions. Our passion for what we do is evident in every brick laid and every space designed, ensuring that we not only meet but exceed your expectations. From the moment of our initial consultation to the joyous occasion of handing over your new keys, our team is dedicated to providing a seamless and stress-free experience, treating your project with the utmost professionalism and care.
                        </p>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!--  About section End --> 

    <!-- Our Vision section Start -->
    <section class=" pt-3 pb-5 scroller">
        <div class="container">
            <h2 class="fs-1 fw-semibold text-center text-white spacing-x text-uppercase pb-4">Our Vision and Mission</h2>
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="service__card bg-primary w-100 text-white p-3 p-md-4" style="border: 1px solid #FAFAFA4E;">
                        <h3 class="fs-4 title fw-bold text-white"> 
                            VISION
                        </h3>
                        <p class="scroll mt-3 overflow-auto"> Innovare Constructions aspires to be the beacon of the construction industry, recognized for our unparalleled quality and innovation. We aim to support our staff and uplift the communities we serve, striving to be the contractor of choice in our market.</p> 
                    </div>
                </div><!--//.col-->
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="service__card bg-primary w-100 text-white p-3 p-md-4" style="border: 1px solid #FAFAFA4E;">
                        <h3 class="fs-4 title fw-bold text-white"> 
                            MISSION
                        </h3>
                        <p class="scroll mt-3 overflow-auto"> Our mission is to deeply understand and fulfill our clients' needs, delivering high-quality buildings that are completed on time and within budget. Innovation and collaboration are the cornerstones of our approach, as we focus on developing our team, nurturing long-term relationships with our clients and supply chain, and making meaningful contributions to our community.</p> 
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Our Vision section End -->

    <!-- Testminal section --> 
    <?php $folder='root'; include_once('includes/testminal.inc.php'); ?> 
    <!-- Testminal section --> 

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
 