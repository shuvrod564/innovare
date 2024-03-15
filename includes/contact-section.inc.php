    <!-- Lets Discuss section Start -->
    <section class="py-5 bg-primary">
        <div class="container pt-lg-5">
            <div class="row g-4 gx-xl-5">
                <div class="col-lg-6">
                    <div class="text-center text-white text-lg-start">
                        <h2 class="display-4 fw-medium text-uppercase">
                            <?php if(isset($title)) { ?>
                            <?php echo $title; ?>
                            <?php } else { ?>
                            LET’S DISCUSS <span class="d-block"></span> NEXT PROJECTS 
                            <?php } ?>
                        </h2>
                        <p class="pb-lg-5 mt-4">
                            Whether you're dreaming of a cozy home for your family or envisioning a commercial space that stands out, Innovare Constructions is here to turn your dreams into reality. Contact us today to embark on a journey toward creating spaces that not only meet your needs but also inspire and delight. Let's build something extraordinary together.
                        </p> 
                    </div>
                </div><!--./col-->
                <div class="col-lg-6">
                    <form class="form-bg" id="contactForm" method="post" action="<?php echo $base_url; ?>submit-contact-form.php"> 
                        <div class="controls d-flex flex-column gap-4">
                            <div class="">
                                <div class="form-group">
                                    <input id="name" type="text" name="name" class="form-control px-4 fw-medium lead" placeholder="YOUR NAME">
                                    <div class="small text-danger" id="name_error"></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <input id="email" type="email" name="email" class="form-control px-4 fw-medium lead"
                                    placeholder="YOUR EMAIL">
                                    <div class="small text-danger" id="email_error"></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group">
                                    <input id="phone" type="text" name="phone" class="form-control px-4 fw-medium lead"
                                    placeholder="YOUR PHONE NO">
                                    <div class="small text-danger" id="phone_error"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-1">
                                <div class="form-group pb-4">
                                    <textarea id="form_message" name="message" class="form-control px-4 fw-medium lead"
                                    placeholder="YOUR MESSAGE" rows="4"></textarea>
                                    <div class="small text-danger" id=""></div>
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


