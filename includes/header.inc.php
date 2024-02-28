    <!-- Lines -->
    <div class="position-fixed top-0 start-0 w-100 h-100 user-select-none" style="pointer-events:none;"> 
        <div class="container">
            <div class="d-flex justify-content-between global__lines"> 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
 
    <!-- navigation start --> 
    <nav class="navbar navbar-expand-lg smart-scroll" id="mainNav">
        <div class="container postion-relative">   
            <a href="<?php echo $base_url;?>" class="navbar-brand p-0 m-0 d-inline-block" aria-label="<?php echo $site_name;?>">
                <img src="<?php echo $base_url;?>assets/images/logo.svg" width="202" height="51" class="w-auto" alt="<?php echo $site_name;?>">
            </a>
            
            
            <div class="d-inline-flex align-items-center text-white"> 
                <ul class="navbar-nav d-none d-lg-flex align-items-center position-relative">    
                    <li class="nav-item"> 
                        <a href="<?php echo $base_url;?>about.php" class="nav-link">       
                            ABOUT US
                        </a>   
                    </li>  
                    <li class="nav-item dropdown ms-3"> 
                        <a href="#" class="nav-link dropdown-toggle" id="drop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">    
                            SERVICES
                        </a>  
                        <ul class="dropdown-menu p-2 rounded-3 border-0" aria-labelledby="drop2">   
                            <li>
                                <a href="<?php echo $base_url;?>interior-design.php" class="dropdown-item fw-medium rounded-3 p-2 text-uppercase">Interior Design</a> 
                            </li>  
                            <li>
                                <a href="<?php echo $base_url;?>construction.php" class="dropdown-item fw-medium rounded-3 p-2 text-uppercase">construction</a> 
                            </li>  
                            <li>
                                <a href="<?php echo $base_url;?>home-renovation.php" class="dropdown-item fw-medium rounded-3 p-2 text-uppercase">Home Renovation</a> 
                            </li>  
                            <li>
                                <a href="<?php echo $base_url;?>landscape.php" class="dropdown-item fw-medium rounded-3 p-2 text-uppercase">Landscape Design</a> 
                            </li>  
                        </ul> 
                    </li>                             
                    <li class="nav-item ms-lg-1 ms-xl-4"> 
                        <a href="#" class="nav-link"> 
                            GALLERY
                        </a>  
                    </li>       
                    <li class="nav-item ms-lg-1 ms-xl-4"> 
                        <a href="#" class="nav-link"> 
                            BLOG 
                        </a>  
                    </li>       
                    <li class="nav-item ms-lg-1 ms-xl-4"> 
                        <a href="<?php echo $base_url;?>contact.php" class="nav-link"> 
                            CONTACTS 
                        </a> 
                    </li>           
                </ul>
                <div class="ps-5 d-none d-md-block">
                    <a href="tel:+917511161313" class="d-inline-flex align-items-center gap-2 fs-5 fw-semibold text-white" aria-label="(+91) 751-116-1313"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 512 512"><path fill="#fff" d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/></svg>
                        <span>(+91) 751 116 1313</span>
                    </a>
                </div>
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" class="navbar-toggler rounded p-0 d-block ms-1 ms-xl-3 d-lg-none border-0" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                    </svg>
                </button>   
            </div> 
             
        </div>
    </nav> 
    <!-- navigation end --> 

   

    <div class="offcanvas offcanvas-end sideNav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header bg-primary pe-3">
            <p class="offcanvas-title lead-sm fw-semibold text-white mb-0" id="offcanvasExampleLabel">Innovare Construction</p>
            <button type="button" class="btn-close bg-white me-2 d-inline-block opacity-100" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0">
        <ul class="links__list">
                <li><a href="<?php echo $base_url;?>" class="nav-link">Home</a></li>    
                <li><a href="<?php echo $base_url;?>about.php">About Us</a></li> 
                <li> 
                    <a class="btn__link collapsed" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
                        SERVICES 
                    </a>
                    <ul class="collapse" id="collapse2">    
                        <li>
                            <a href="<?php echo $base_url;?>interior-design.php" class="text-uppercase ps-3">Interior Design</a> 
                        </li>  
                        <li>
                            <a href="<?php echo $base_url;?>construction.php" class="text-uppercase ps-3">construction</a> 
                        </li>  
                        <li>
                            <a href="<?php echo $base_url;?>home-renovation.php" class="text-uppercase ps-3">Home Renovation</a> 
                        </li>  
                        <li>
                            <a href="<?php echo $base_url;?>landscape.php" class="text-uppercase ps-3">Landscape Design</a> 
                        </li>  
                    </ul> 
                </li>  
                <li> 
                    <a href="#">
                        GALLERY
                    </a> 
                </li>    
                <li><a href="#">BLOG</a></li>
                <li><a href="<?php echo $base_url;?>contact.php"> CONTACTS </a></li>   
            </ul>
        </div>
    </div><!--.//off-canvas-->
   
   