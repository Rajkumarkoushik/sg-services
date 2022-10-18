


//  Testimonial section starts
$(document).ready(function(){
    $(".testimonial .indicators li").click(function(){
      var i = $(this).index();
      var targetElement = $(".testimonial .tabs li");
      targetElement.eq(i).addClass('active');
      targetElement.not(targetElement[i]).removeClass('active');
              });
              $(".testimonial .tabs li").click(function(){
                  var targetElement = $(".testimonial .tabs li");
                  targetElement.addClass('active');
                  targetElement.not($(this)).removeClass('active');
              });
          });
  $(document).ready(function(){
      $(".slider .swiper-pagination span").each(function(i){
          $(this).text(i+1).prepend("0");
      });
  });

//   Testimonials section ends

// Contact btn section starts
// const contactUs = document.querySelector(".contact_us");
// const contactButton = document.querySelector(".contact-button");

// contactButton.addEventListener("click", () => {
//   contactUs.classList.toggle("cotactform-show");

// });

// Contact btn section ends





// ======= show top start ========
const scrollTop = document.querySelector(".scroll-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    scrollTop.classList.add("scroll-active");
  } else {
    scrollTop.classList.remove("scroll-active");
  }
});
// ======= show top end =========


const appointmentBtn = document.querySelector(".appointment-btn");
const appointmentForm = document.querySelector(".appointment-form");
const removeIcon = document.querySelector(".remove-icon");

appointmentBtn.addEventListener("click", () => {
  appointmentForm.classList.toggle("show-appointmentletter");
});

removeIcon.addEventListener("click", () => {
  appointmentForm.classList.toggle("show-appointmentletter");
});

// Appointment section ends

// Pre loader section starts
$(document).ready(function() {
 
  // Fakes the loading setting a timeout
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 3500);
 
});

// Pre loader section ends


  // Nav section starts

  const navLinks = document.querySelector(".nav-links");
  const hamburgerIcon = document.querySelector(".hamburger-icon");

  hamburgerIcon.addEventListener("click", () => {
    navLinks.classList.toggle("show-links");
  });

