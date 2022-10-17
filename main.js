// Nav section starts

// const indicator = document.querySelector('.nav-indicator');
// const items = document.querySelectorAll('.nav-item');

// function handleIndicator(el) {
//   items.forEach(item => {
//     item.classList.remove('is-active');
//     item.removeAttribute('style');
//   });

//   indicator.style.width = `${el.offsetWidth}px`;
//   indicator.style.left = `${el.offsetLeft}px`;
//   indicator.style.backgroundColor = el.getAttribute('active-color');

//   el.classList.add('is-active');
//   el.style.color = el.getAttribute('active-color');
// }


// items.forEach((item, index) => {
//   item.addEventListener('click', e => {handleIndicator(e.target);});
//   item.classList.contains('is-active') && handleIndicator(item);
// });

// Nav section ends


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

