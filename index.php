<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>Innovare Construction</title>
    
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body class="pt-0"> 
    
    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    
    <!-- header section start -->
    <header class="header__wrapper">
        <div class="container"> 
            <div class="thumbnail position-relative"> 
                <img 
                    src="assets/images/home/hero-banner.webp" 
                    width="1903" height="600"
                    alt="<?php echo $site_name;?>"
                    class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover thumbnail"
                >
                <div class="position-absolute text-center text-lg-start extra__box p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                    <h1 class="fs-3 text-white fw-semibold mb-0 ff-heading">Welcome To Innovare Constructions</h1>
                    <p class="lead fw-normal text-white ff-heading">At Innovare Constructions, we’re not just building spaces;</p>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->

    <!--  Welcome section Start -->
    <section class="py-5 bg-primary">
        <div class="container py-xl-5">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-5">
                    <img 
                        src="assets/images/home/welcome-home.webp" 
                        width="624" height="636" 
                        alt="INNOVARE CONSTRUCTIONS"
                        class="img-fluid w-100 object-fit-cover" 
                    >
                </div><!--//.col-->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="py-lg-2 text-white  text-center text-lg-start"> 
                        <p class="top__title text-white fw-semibold lead-lg">WELCOME TO</p>
                        <h2 class="fs-1 fw-bold spacing-x">INNOVARE CONSTRUCTIONS</h2>
                        <p class=" mt-3">
                            At Innovare Constructions, we’re not just building spaces; we’re crafting your future. Our dedication is to not only meet but exceed your expectations, ensuring every project is handled with the utmost professionalism and care. This ethos is embedded in every layer of our operations, from the initial consultation to the final handover of your project. We understand that embarking on a construction project, be it commercial, residential, or anything in between, is a significant step towards realizing a dream for many of our clients. That’s why we approach every task with a blend of precision, creativity, and a deep understanding of our clients’ visions.
                        </p>
                        <div class="text-center text-lg-start mt-4">
                            <a href="#" class="btn btn-outline-white height fw-semibold" aria-label="READ MORE">READ MORE</a> 
                        </div>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!--  Welcome section End -->

    <!-- Services Start --> 
    <section class="py-5 scroller">
        <div class="container">
            <h2 class="fs-3 text-center spacing-x text-white pb-5">EXPLORE OUR SERVICES</h2>
            <div class="owl-carousel serviceSlider">
                <div class="service__card position-relative active p-3 p-lg-4"> 
                    <div class="z-index">
                        <p class="mb-2 fs-3 fw-bold text-white opacity-50">01</p>
                        <h3 class="fs-5 title fw-bold"> 
                            <a class="text-white" href="#">COMMERCIAL CONSTRUCTION</a> 
                        </h3>
                        <p class=" mt-4 text-white">Our team specializes in bringing commercial visions to life. From office buildings to retail spaces, we ensure every project is completed on time, within budget, and beyond expectations.</p> 
                        <a href="#" class="icon" aria-label="Arrow" title="Know More"> 
                            <img src="assets/images/icons/right-arrow.svg" width="27" height="15" alt="Arrow">
                        </a>
                    </div> 
                    <div class="overlay__wrap bgi w-100 h-100 position-absolute top-0 start-0" style="background-image: url('assets/images/home/about__bg.webp');box-shadow: inset 0 0 0 800px rgba(0, 0, 0, 0.66);">
                    </div>
                </div><!--//.service__card-->
                <div class="service__card position-relative active p-3 p-lg-4"> 
                    <div class="z-index">
                        <p class="mb-2 fs-3 fw-bold text-white opacity-50">02</p>
                        <h3 class="fs-5 title fw-bold"> 
                            <a class="text-white" href="#">RESIDENTIAL CONSTRUCTION</a> 
                        </h3>
                        <p class=" mt-4 text-white">Your home should be a reflection of your individuality. At Innovare, we understand this, which is why we take great care in constructing residential spaces that feel as unique as you are.</p> 
                        <a href="#" class="icon" aria-label="Arrow" title="Know More"> 
                            <img src="assets/images/icons/right-arrow.svg" width="27" height="15" alt="Arrow">
                        </a>
                    </div> 
                    <div class="overlay__wrap bgi w-100 h-100 position-absolute top-0 start-0" style="background-image: url('assets/images/home/about__bg.webp');box-shadow: inset 0 0 0 800px rgba(0, 0, 0, 0.66);">
                    </div>
                </div><!--//.service__card-->
                <div class="service__card position-relative active p-3 p-lg-4"> 
                    <div class="z-index">
                        <p class="mb-2 fs-3 fw-bold text-white opacity-50">03</p>
                        <h3 class="fs-5 title fw-bold"> 
                            <a class="text-white" href="#">PWD WORKS</a> 
                        </h3>
                        <p class=" mt-4 text-white">We are committed to creating accessible spaces for all. Our expertise in PWD works ensures inclusivity and functionality in every design.</p> 
                        <a href="#" class="icon" aria-label="Arrow" title="Know More"> 
                            <img src="assets/images/icons/right-arrow.svg" width="27" height="15" alt="Arrow">
                        </a>
                    </div> 
                    <div class="overlay__wrap bgi w-100 h-100 position-absolute top-0 start-0" style="background-image: url('assets/images/home/about__bg.webp');box-shadow: inset 0 0 0 800px rgba(0, 0, 0, 0.66);">
                    </div>
                </div><!--//.service__card-->
                <div class="service__card position-relative active p-3 p-lg-4"> 
                    <div class="z-index">
                        <p class="mb-2 fs-3 fw-bold text-white opacity-50">04</p>
                        <h3 class="fs-5 title fw-bold"> 
                            <a class="text-white" href="#">Interior Design</a> 
                        </h3>
                        <p class=" mt-4 text-white">
                            Transform your space into a reflection of your taste and lifestyle with our interior design services. From contemporary to classic, we create interiors that inspire.
                        </p> 
                        <a href="#" class="icon" aria-label="Arrow" title="Know More"> 
                            <img src="assets/images/icons/right-arrow.svg" width="27" height="15" alt="Arrow">
                        </a>
                    </div> 
                    <div class="overlay__wrap bgi w-100 h-100 position-absolute top-0 start-0" style="background-image: url('assets/images/home/about__bg.webp');box-shadow: inset 0 0 0 800px rgba(0, 0, 0, 0.66);">
                    </div>
                </div><!--//.service__card-->
                <div class="service__card position-relative active p-3 p-lg-4"> 
                    <div class="z-index">
                        <p class="mb-2 fs-3 fw-bold text-white opacity-50">05</p>
                        <h3 class="fs-5 title fw-bold"> 
                            <a class="text-white" href="#">Landscaping</a> 
                        </h3>
                        <p class=" mt-4 text-white">
                            Our landscaping services are designed to enhance your outdoor spaces, creating beautiful, sustainable environments that uplift and inspire. 
                        </p> 
                        <a href="#" class="icon" aria-label="Arrow" title="Know More"> 
                            <img src="assets/images/icons/right-arrow.svg" width="27" height="15" alt="Arrow">
                        </a>
                    </div> 
                    <div class="overlay__wrap bgi w-100 h-100 position-absolute top-0 start-0" style="background-image: url('assets/images/home/about__bg.webp');box-shadow: inset 0 0 0 800px rgba(0, 0, 0, 0.66);">
                    </div>
                </div><!--//.service__card-->
                
            </div><!--//.owl-carousel-->
        </div><!--//.container-->
    </section>
    <!-- Services End --> 

    <!-- About section Start -->
    <section class="py-5 position-relative">
        <span class="fixed__title position-absolute top-50 -translate-y-middle">about us</span>
        <div class="container py-xl-5">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-5 order-lg-2">
                    <img 
                        src="assets/images/home/best-home.webp" 
                        alt="INNOVARE CONSTRUCTIONS"
                        class="img-fluid w-100 object-fit-cover" width="512" height="665" 
                    >
                </div><!--//.col-->
                <div class="col-lg-7 order-lg-1 d-flex align-items-center">
                    <div class="py-lg-2 text-white text-center text-lg-start"> 
                        <h2 class="fs-1 fw-bold spacing-x text-uppercase">About Us</h2>
                        <p class=" mt-3">
                            At Innovare Constructions, our philosophy is deeply rooted in the power of connections. As a cherished family-owned enterprise, we place immense value on family principles, mirroring these ideals in every facet of our client interactions and business operations. Our commitment extends beyond mere transactions; we endeavor to forge lasting relationships, understanding that every project we undertake is a personal journey for our clients. This belief in strong, personal connections is what sets us apart, guiding us to tailor our services to reflect the unique visions and aspirations of those we serve.
                        </p>
                        <p class=" mt-3">
                            Our journey paints a story of humble beginnings, fueled by an unwavering passion and dedication. It’s a narrative of transformation, from a modest startup to a beacon of excellence within the construction industry. This journey has been shaped by a continuous pursuit of growth, not just in scale but in the mastery of our craft. Our evolution is marked by an enduring commitment to innovation, quality, and the cultivation of a skilled team that shares our vision and values. As we look back on our path to becoming an industry leader, it’s clear that our foundation of family values, combined with our passion for construction, has been instrumental in our success. It’s this unique blend that enables us to create not just buildings, but legacies.
                        </p>
                        <div class="text-center text-lg-start mt-4">
                            <a href="#" class="btn btn-outline-white height fw-semibold" aria-label="KNOW MORE">KNOW MORE</a> 
                        </div>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- About section End -->

    <!-- Why Partner Services Start --> 
    <section class="py-5 bg-primary scroller">
        <div class="container"> 
            <h2 class="fs-3 text-center text-white spacing-x pb-5">WHY PARTNER WITH INNOVARE?</h2>
            <div class="carousel__wrapper">
                <div class="owl-carousel serviceSlider">
                    <div class="services__card bg-primary text-white">
                        <p class="mb-2 fs-3 fw-bold text-white opacity-50">01</p>
                        <h3 class="fs-5 title fw-bold text-uppercase"> 
                            CLIENT-CENTRIC APPROACH
                        </h3>
                        <p class="card__text mt-3 overflow-auto">At Innovare Constructions, your satisfaction is not just a goal; it's our driving force. We believe in a client-centric approach, placing your needs and preferences at the core of every decision and strategy. This personalized touch ensures that each project we undertake is aligned with your vision, guaranteeing a final product that exceeds expectations. Our commitment to understanding and adapting to your unique requirements is what makes our partnership truly collaborative and fulfilling.</p>  
                    </div> 
                    <div class="services__card bg-primary text-white">
                        <p class="mb-2 fs-3 fw-bold text-white opacity-50">02</p>
                        <h3 class="fs-5 title fw-bold text-uppercase">  
                            QUALITY AND CRAFTSMANSHIP
                        </h3>
                        <p class="card__text mt-3 overflow-auto">Quality and craftsmanship are the hallmarks of Innovare Constructions. Our dedication to excellence is evident in every cut, join, and finish. We take immense pride in our meticulous attention to detail and our unwavering commitment to delivering superior quality in all aspects of our work. By choosing Innovare, you are assured of a project that not only meets the highest standards of construction but also stands as a testament to the skill and dedication of our team.</p> 
                    </div>
                    <div class="services__card bg-primary text-white">
                        <p class="mb-2 fs-3 fw-bold text-white opacity-50">03</p>
                        <h3 class="fs-5 title fw-bold text-uppercase"> 
                            INNOVATION AT EVERY STEP
                        </h3>
                        <p class="card__text mt-3 overflow-auto">Innovation lies at the core of our operations. At Innovare Constructions, we continuously strive to push the boundaries of traditional construction methods and materials. Our pursuit of innovation is a commitment to not just keeping pace with industry advancements but leading the charge. From leveraging the latest in sustainable building practices to employing cutting-edge technologies, we ensure that innovation permeates every step of our construction process. This forward-thinking approach is what enables us to deliver projects that are not only aesthetically pleasing and functional but also future-ready.</p> 
                    </div>
                    
                </div><!--//.owl-carousel-->
            </div><!--//.carousel__weraper-->
        </div><!--//.container-fluid-->
    </section>
    <!-- Why Partner Services end -->
    
    <!-- Client View Services Start -->
    <div class="py-5 bg-primary">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="text-white d-flex align-items-center gap-3">
                        <div class="display-4 fw-bold d-inline-flex counter__box"><span class="counter d-inline-block" data-count="820">0</span> +</div>
                        <div class="fs-6 fw-bold col">CLIENT SATISFACTION GUARANTEED</div>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-4 col-md-6">
                    <div class="text-white d-flex align-items-center gap-3">
                        <div class="display-4 fw-bold d-inline-flex counter__box"><span class="counter d-inline-block" data-count="650">0</span> +</div>  
                        <div class="fs-6 fw-bold col">EMPLOYEE ON WORLDWIDE</div>
                    </div>
                </div><!--//.col-->
                <div class="col-lg-4 col-md-6">
                    <div class="text-white d-flex align-items-center gap-3">
                        <div class="display-4 fw-bold d-inline-flex counter__box"><span class="counter d-inline-block" data-count="987">0</span> +</div> 
                        <div class="fs-6 fw-bold col">PROJECTS COMPLETED ON 60 COUNTRIES</div>
                    </div>
                </div><!--//.col-->
            </div><!--//row-->
        </div><!--//.container-->
        <div class="container-fluid mt-5 px-0">
            <div class="position-relative">
                <img src="assets/images/home/3d-rendering.webp" class="img-fluid" width="6441662" heig554ht="587" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="background-color: #00000052;">
                    <button 
                        class="btn p-0 border border-white play__btn rounded-circle d-flex justify-content-center align-items-center"
                        data-bs-toggle="modal" data-bs-target="#modalVideo"
                        type="button"
                    >
                        <svg class="transition" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                    </button>
                </div>
            </div>
        </div><!--//.container-fluid--> 
    </div>
   
    
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div
        class="modal fade"
        id="modalVideo"
        tabindex="-1"  
        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true"
    >
        <div
            class="modal-dialog modal-dialog-centered"
            role="document"
            style="max-width: 1000px;"
        >
            <div class="modal-content position-relative">
                <button
                    type="button"
                    class="btn-close position-absolute rounded-circle bg-white p-3 opacity-100"
                    data-bs-dismiss="modal" style="z-index: 99;top: -1rem;right: -1rem;"
                    aria-label="Close"
                ></button>
                <iframe class="ratio ratio-16x9" id="videoIframe" width="994" height="559" title="Simple &amp; Elegent 3bhk Home Tour @ Dighi | Best Interior Designer in Pune | Kams Designer Zone" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
     
    <script>
        const videoModalScript = document.getElementById('modalVideo')
        if (videoModalScript) {
            videoModalScript.addEventListener('show.bs.modal', event => {
                let iframe = document.getElementById("videoIframe");
                iframe.setAttribute('src', 'https://www.youtube.com/embed/OzUkvzyBttA?autoplay=1');
            }) 
        }
        if (videoModalScript) {
            videoModalScript.addEventListener('hidden.bs.modal', event => {
                let iframe = document.getElementById("videoIframe");
                iframe.setAttribute('src', '');
            })
        }
    </script>
    
    <!-- Client View Services End -->

    <!-- Why Choose Us section Start -->
    <section class="py-4 bg-primary">
        <div class="container py-xl-5">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-5">
                    <img class="img-fluid w-100 object-fit-cover" width="512" height="301" src="assets/images/home/about.webp" alt="WHY CHOOSE US">
                </div><!--//.col-->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="py-lg-2 text-white  text-center text-lg-start"> 
                        <h2 class="fs-1 fw-bold spacing-x">WHY CHOOSE US</h2>
                        <p class="mt-3">
                            Choosing Innovare Constructions is a decision to embrace unparalleled quality, cutting-edge innovation, and a deeply personalized construction experience. Our ethos is centered around not just meeting, but exceeding your expectations, transforming your vision into reality with minimal stress. Our approach is tailored, recognizing the unique aspirations of each client and meticulously crafting spaces that resonate with their vision.
                        </p>
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Why Choose Us section End -->

    <!-- Our Vision section Start -->
    <section class=" pt-3 pb-5 scroller">
        <div class="container">
            <div class="row g-4 g-xxl-5">
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="service__card bg-primary w-100 text-white p-3 p-md-4" style="border: 1px solid #FAFAFA4E;">
                        <h3 class="fs-4 title fw-bold text-white"> 
                            OUR VISION
                        </h3>
                        <p class="scroll mt-3 overflow-auto">Our vision is to ascend as the premier construction brand, distinguished by our unwavering commitment to quality, innovation, and the well-being of our community and staff. We strive to set new standards in the construction industry, driving forward with the ambition to innovate and excel in every project undertaken.</p> 
                    </div>
                </div><!--//.col-->
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="service__card bg-primary w-100 text-white p-3 p-md-4" style="border: 1px solid #FAFAFA4E;">
                        <h3 class="fs-4 title fw-bold text-white"> 
                            OUR MISSION
                        </h3>
                        <p class="scroll mt-3 overflow-auto">Our mission is grounded in a profound understanding of our clients’ needs, ensuring the delivery of high-caliber buildings within the agreed timeframe and budget. We aim to cultivate enduring relationships, built on trust and the consistent delivery of exceptional results. This commitment to understanding, quality, and long-term partnership is what fuels our mission, guiding us toward our vision of being the contractor of choice, renowned for our innovative solutions and dedication to excellence.</p> 
                    </div>
                </div><!--//.col-->
            </div><!--//.row-->
        </div><!--//.container-->
    </section>
    <!-- Our Vision section End -->

    <!-- Successful Projects Start -->
    <section class="py-5 bg-primary">
        <div class="container">  
            <h2 class="h2 text-uppercase text-white text-center">OUR SUCCESSFUL PROJECTS</h2>
            <nav class="mt-4 mt-xl-5 text-white">
                <div class="nav nav-tabs mx-auto border-0 justify-content-center" id="nav-tab" role="tablist">
                    <button class="nav-link border-0 m-0 lead fw-bold active" id="nav-tab1-tab" data-bs-toggle="tab" data-bs-target="#nav-tab1" type="button" role="tab" aria-controls="nav-tab1" aria-selected="true">Commercial Highlights</button>
                    <button class="nav-link border-0 m-0 lead fw-bold" id="nav-tab2-tab" data-bs-toggle="tab" data-bs-target="#nav-tab2" type="button" role="tab" aria-controls="nav-tab2" aria-selected="false">Residential Highlights</button>
                    <button class="nav-link border-0 m-0 lead fw-bold" id="nav-tab3-tab" data-bs-toggle="tab" data-bs-target="#nav-tab3" type="button" role="tab" aria-controls="nav-tab3" aria-selected="false">Unique Interior Designs</button>
                    <button class="nav-link border-0 m-0 lead fw-bold" id="nav-tab4-tab" data-bs-toggle="tab" data-bs-target="#nav-tab4" type="button" role="tab" aria-controls="nav-tab4" aria-selected="false">Transformative Landscaping</button>
                </div>
            </nav>
            <div class="tab-content pt-4" id="nav-tabContent">
                <div class="tab-pane show active" id="nav-tab1" role="tabpanel" aria-labelledby="nav-tab1-tab">
                    <p class="text-white text-center mb-4">
                        Our portfolio includes a wide range of successful commercial projects, each showcasing our commitment to quality and innovation.
                    </p> 
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-01.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-02.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-03.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-04.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                          
                    </div><!--.//row-->
                </div><!--.//tab_pane_1-->

                <div class="tab-pane fade fade" id="nav-tab2" role="tabpanel" aria-labelledby="nav-tab2-tab">
                    <p class="text-white text-center mb-4">
                        From modern apartments to luxury homes, our residential projects reflect our dedication to creating spaces that are as unique as our clients.
                    </p> 
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-01.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-02.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-03.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-04.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                          
                    </div><!--.//row-->
                </div><!--.//tab_pane_2-->

                <div class="tab-pane fade" id="nav-tab3" role="tabpanel" aria-labelledby="nav-tab3-tab">
                    <p class="text-white text-center mb-4">
                        Our interior design projects showcase our ability to transform any space into a bespoke masterpiece that reflects the individuality of its occupants.
                    </p> 
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-01.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-02.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-03.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-04.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                          
                    </div><!--.//row-->
                </div><!--.//tab_pane_3-->

                <div class="tab-pane fade" id="nav-tab4" role="tabpanel" aria-labelledby="nav-tab4-tab">
                    <p class="text-white text-center mb-4">
                        Our landscaping projects are designed to enhance the natural beauty of each space, creating serene and sustainable outdoor environments.
                    </p> 
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-01.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-02.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-03.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="position-relative project__card overflow-hidden">
                                <img src="assets/images/projects/gallery-04.webp" class="img-fluid" width="644" height="554" alt="Dileep & Nitha" loading="lazy">
                                <div class="caption transition bg-primary position-absolute p-2 p-sm-3 p-lg-4 bottom-0 end-0">
                                    <p class="lead-lg text-white fw-semibold mb-0 ff-heading">Dileep & Nitha</p>
                                    <p class="d-block fs-12 text-white">Kalarkode, Alappuzha</p>
                                    <p class="fs-13 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <div class="">
                                        <a href="#" class="text-white fs-15 ff-heading fw-medium" aria-label="KNOW MORE">KNOW MORE</a> 
                                    </div>
                                </div>
                            </div>
                        </div><!--.//col-->
                          
                    </div><!--.//row-->
                </div><!--.//tab_pane_4-->
            </div><!--.//tab__content-->
              
        </div><!--.//container--> 
    </section>
    <!-- Successful Projects End -->

    <!-- Testminal Section Start -->
    <section class="py-5 bg-primary">
        <div class="container">
            <h2 class="fs-2 text-center text-white spacing-x mb-4">WHAT OUR HAPPY CLIENTS SAYS</h2> 
            <div class="px-2"> 
                <div class="owl-carousel testimonialSlider">
                    <div class="testi__card bordered bg-primary text-white d-flex align-items-center">
                        <div class="col px-3 px-md-4 py-4 py-md-5">
                            <p class="lead text-grey mb-0 fw-semibold spacing-x">GREAT INTERIOR WORK</p>
                            <p class="mt-3 mb-0">
                                There are many variations passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                            </p>
                        </div>
                        <div class=" py-4 py-md-5 col-4 position-relative">
                            <img 
                                class="img-fluid position-absolute top-0 start-0" 
                                width="" height="" 
                                src="assets/images/testimonials/separator.svg" class="img-fluid"
                                alt="separator"
                            >
                            <img 
                                class="img-fluid rounded-circle img__wrap mx-auto" 
                                width="88" height="88" 
                                src="assets/images/testimonials/mila-peters.webp" class="img-fluid"
                                alt="Student"
                            >
                            <p class=" text-grey mb-0 fw-semibold spacing-x text-center">MILA PETERS</p>
                        </div>
                    </div><!--//.testi__card-->
                   
                </div><!--.//carousel-->
            </div>
        </div><!--//.container-->
    </section>
    <!-- Testminal Section End -->
        
    <!-- Blogs Services Start --> 
    <section class="py-5">
        <div class="container"> 
            <h2 class="fs-2 text-center text-white spacing-x pb-5">LATEST BLOGS</h2>
            <div class="blog__wrapper text-white">
                <div class="owl-carousel serviceSlider">
                    <div class="bordered p-3 p-md-4 py-md-5 bg-primary">
                        <p class="fw-bold text-white">NOVEMBER 14, 2023</p>
                        <h3 class="fs-3 title fw-semibold"> 
                            Transforming spaces for maximum utility 
                        </h3>
                        <p class="mt-4">Ever felt like your living or working space could be more functional and efficient? In this blog series, we explore the art of transforming spaces for maximum utility. From clever storage solutions to innovative…</p>
                        
                        <div class="icon mt-4 d-flex align-items-center gap-2">
                            <a href="#" class="text-white fw-bold" aria-label="Read More">Read More</a> 
                            <img src="assets/images/icons/right-arrow.svg" class="img-fluid" width="28" height="16" alt="arrow">
                        </div>
                    </div>
                    <div class="bordered p-3 p-md-4 py-md-5 bg-primary">
                        <p class="fw-bold text-white">NOVEMBER 14, 2023</p>
                        <h3 class="fs-3 title fw-semibold"> 
                            Transforming spaces for maximum utility 
                        </h3>
                        <p class="mt-4">Ever felt like your living or working space could be more functional and efficient? In this blog series, we explore the art of transforming spaces for maximum utility. From clever storage solutions to innovative…</p>
                        
                        <div class="icon mt-4 d-flex align-items-center gap-2">
                            <a href="#" class="text-white fw-bold" aria-label="Read More">Read More</a>
                            <img src="assets/images/icons/right-arrow.svg" class="img-fluid" width="28" height="16" alt="arrow"> 
                        </div>
                    </div>
                    <div class="bordered p-3 p-md-4 py-md-5 bg-primary">
                        <p class="fw-bold text-white">NOVEMBER 14, 2023</p>
                        <h3 class="fs-3 title fw-semibold"> 
                            Transforming spaces for maximum utility 
                        </h3>
                        <p class="mt-4">Ever felt like your living or working space could be more functional and efficient? In this blog series, we explore the art of transforming spaces for maximum utility. From clever storage solutions to innovative…</p>
                        
                        <div class="icon mt-4 d-flex align-items-center gap-2">
                            <a href="#" class="text-white fw-bold" aria-label="Read More">Read More</a> 
                            <img src="assets/images/icons/right-arrow.svg" class="img-fluid" width="28" height="16" alt="arrow">
                        </div>
                    </div>
                </div><!--//.owl-carousel-->
            </div><!--//.blog__weraper-->
        </div><!--//.container-fluid-->
    </section>
    <!-- Blogs Services end -->

    <!-- Lets Discuss section Start -->
    <section class="py-5 bg-primary">
        <div class="container py-lg-5">
            <div class="row g-4 g-xl-5">
                <div class="col-lg-6">
                    <div class="text-center text-white text-lg-start">
                        <h2 class="display-4 fw-medium">
                            LET’S DISCUSS <span class="d-block"></span> NEXT PROJECTS
                        </h2>
                        <p class="pb-lg-5 mt-4">
                            The talent at Mrittik runs wide and deep. Across many markets, geographies and typologies, our team members are some of the finest professionals in the industry.. We’ve grouped our work into five categories: places, venues, spaces, experiences and events.
                        </p> 
                    </div>
                </div><!--./col-->
                <div class="col-lg-6">
                    <form class="form-bg" id="contact-form" method="post" action="contact-from.php">
                        <div class="messages"></div>
                        <div class="controls d-flex flex-column gap-4">
                            <div class="">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control px-4 fw-medium lead" placeholder="YOUR NAME">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control px-4 fw-medium lead"
                                    placeholder="YOUR EMAIL" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <input id="form_phone" type="text" name="phone" class="form-control px-4 fw-medium lead"
                                    placeholder="YOUR PHONE NO">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-1">
                                <div class="form-group pb-4">
                                    <textarea id="form_message" name="message" class="form-control px-4 fw-medium lead"
                                    placeholder="YOUR MESSAGE" rows="4"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 text-center text-lg-start">
                                <button type="submit" class="btn btn-white fw-semibold py-3 px-5 rounded-4">SEND MAIL</button>
                            </div>
                        </div>
                    </form>
                </div><!--./col--> 
            </div><!--.//row-->
        </div><!--.//container-->
    </section> 
    <!-- Lets Discuss section End -->

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
    <!-- Number Counter Script -->
    <?php $folder='root'; include_once('includes/counter-script.inc.php'); ?> 
 
</body>
</html>
 