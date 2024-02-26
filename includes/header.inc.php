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
                <img src="assets/images/logo.svg" width="202" height="51" class="w-auto" alt="<?php echo $site_name;?>">
            </a>
            
            
            <div class="d-inline-flex align-items-center text-white"> 
                <ul class="navbar-nav d-none d-lg-flex align-items-center position-relative">    
                    <li class="nav-item"> 
                        <a href="about.php" class="nav-link">       
                            ABOUT US
                        </a>   
                    </li>  
                    <li class="nav-item dropdown ms-3"> 
                        <a href="#" class="nav-link dropdown-toggle fw-semibold" id="drop2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">    
                            SERVICES
                        </a>  
                        <ul class="dropdown-menu p-2 rounded-3 border-0 bg-white" style="min-width:27rem;" aria-labelledby="drop2">   
                            <li>
                                <a href="interior.php" class="dropdown-item fw-medium rounded-3 p-2 text-uppercase">Interior Design</a> 
                            </li>  
                            <li>
                                <a href="construction.php" class="dropdown-item fw-medium rounded-3 p-2 text-uppercase">construction</a> 
                            </li>  
                            <li>
                                <a href="home-renovation.php" class="dropdown-item fw-medium rounded-3 p-2 text-uppercase">Home Renovation</a> 
                            </li>  
                            <li>
                                <a href="landscape.php" class="dropdown-item fw-medium rounded-3 p-2 text-uppercase">Landscape Design</a> 
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
                        <a href="contact.php" class="nav-link"> 
                            CONTACTS 
                        </a> 
                    </li>           
                </ul>
                <div class="ps-5 d-none d-sm-block">
                    <a href="tel:+919987654321" class="d-inline-flex align-items-center gap-2 fs-15 fw-semibold text-white" aria-label="(+91) 998 - 765 - 4321">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="white" d="m19.23 15.26l-2.54-.29a1.99 1.99 0 0 0-1.64.57l-1.84 1.84a15.045 15.045 0 0 1-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52a2.001 2.001 0 0 0-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07c.53 8.54 7.36 15.36 15.89 15.89c1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98"></path></svg>
                        <span>(+91) 998 - 765 - 4321</span>
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
                <li><a href="#" class="nav-link">Home</a></li>    
                <li><a href="#">About Us</a></li>
                <li> 
                    <a href="#">
                        SERVICES 
                    </a> 
                </li> 
                <li> 
                    <a href="#">
                        GALLERY
                    </a> 
                </li>    
                <li><a href="#">BLOG </a></li>
                <li><a href="#"> CONTACTS </a></li>   
            </ul>
        </div>
    </div><!--.//off-canvas-->
   
   