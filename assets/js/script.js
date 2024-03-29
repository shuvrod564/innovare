 

/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


(function ($) {
 

  // $('body').css('padding-top', $('.navbar').outerHeight() + 'px')
  // detect scroll top or down
  if ($('.smart-scroll').length > 0) { // check if element exists
    var last_scroll_top = 0;
    $(window).on('scroll', function() {
        scroll_top = $(this).scrollTop();
        // console.log(scroll_top);
        if (scroll_top < last_scroll_top) {
            $('.smart-scroll').removeClass('scrolled-down').addClass('scrolled-up');
        } else {
            $('.smart-scroll').removeClass('scrolled-up').addClass('scrolled-down');
        }
        if (scroll_top === 0) {
          $('.smart-scroll').removeClass('scrolled-down').removeClass('scrolled-up');
        }
        last_scroll_top = scroll_top;
    });
  }



  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");
 

  // Bottom Section Service Slider Activaton Script (Homepage)
  $(".serviceSlider").owlCarousel({
    autoplay: false, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, margin: 8 },
        576: { items: 2, margin: 10  },
        768: { items: 2, margin: 15,  },
        992: { items: 3, margin: 15,  }, 
        1200: { items: 3, margin: 15, }, 
        1400: { items: 3, }, 
    } 
  });
 
  $(".testimonialSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 25,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1 },
        768: { items: 1  },
        992: { items: 2 }, 
        1200: { items: 2 },  
         
    } 
  });
  
  // Bottom Section Service Slider Activaton Script (Homepage)
  $(".testimionalSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
      0: { items: 1, margin: 8 },
      576: { items: 1, margin: 10  },
      768: { items: 2, margin: 15 },
      992: { items: 2, margin: 15 }, 
      1200: { items: 3, margin: 15 }, 
      1400: { items: 3 }, 
    } 
  });
  
  
   $(".experienceCarousel").owlCarousel({
     autoplay: true, 
     autoplayHoverPause: true,
     smartSpeed: 550,
     responsiveClass: true,
     autoplayTimeout: 10000,
     autoplaySpeed: 3000,
     loop: false,
     margin: 15,
     items: 4,
     nav: false,
     dots: true,
     responsiveClass: true, 
     responsive: { 
         0: { items: 1 },
         576: { items: 2  },
         738: { items: 3 },
         992: { items: 3  }, 
         1200: { items: 3 },   
         1400: { items: 4 },   
     } 
   });
 
  
   $(".typesCarousel").owlCarousel({
    autoplay: true, 
     autoplayHoverPause: true,
     smartSpeed: 550,
     responsiveClass: true,
     autoplayTimeout: 10000,
     autoplaySpeed: 3000,
     loop: false,
     margin: 15,
     items: 4,
     nav: false,
     dots: true,
     responsiveClass: true, 
     responsive: { 
         0: { items: 1 },
         576: { items: 2  },
         738: { items: 3 },
         992: { items: 3  }, 
         1200: { items: 3 },   
         1400: { items: 4 },   
     } 
   });
 

  
   
  
  // Modal Quick Enquery Form Validation Script
  $("#contactForm").submit(function () {
    if (validatecontactForm()) {
        return true;
    }
    else {
        return false;
    }
  }); 
  function validatecontactForm() {
    var valid = true;
    $(".form-control").css('border-color', '');
    $(".meerror").html('');

    // User name validation
    if (!$("#name").val()) {
        $("#name_error").html("Name is required");
        $("#name").css('border-color', '#dc3545');
        valid = false;
    } else {
        $("#name_error").html("");
        $("#name").css('border-color', '#099f1a');
    }

    //  
    if (!$("#email").val()) {
        $("#email_error").html("Email is required");
        $("#email").css('border-color', '#dc3545');
        valid = false;
    } else if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#email_error").html("Invalid email");
        $("#email").css('border-color', '#dc3545');
        valid = false;
    } else {
        $("#email_error").html("");
        $("#email").css('border-color', '#099f1a');
    } 

    //  
    var phno = $.trim($('#phone').val());
    var che_phno = /^[0-9]{7,15}$/;
    if (!$("#phone").val()) {
        $("#phone_error").html("Phone number required");
        $("#phone").css('border-color', '#dc3545');
        valid = false;
    } if (!che_phno.test(phno)) {
        $("#phone").css('border-color', '#dc3545');
        $("#phone_error").html('Please enter valid phone no');
        valid = false;
    } else if (phno.length < 7 || phno.length > 15) {
        $("#phone").css('border-color', '#dc3545');
        $("#phone_error").html('Phone no. must be greater than or equals to 10 and less than or equals to 15 digits!!');
        // $("#dash_phone_error").css("color", "#FC0000"); 
        valid = false;
    } else {
        $("#phone_error").html("");
        $("#phone").css('border-color', '#099f1a');
    } 
 
    return valid;
  }
 
 
 
 
})(jQuery);
 

 