// Nav section starts

const indicator = document.querySelector('.nav-indicator');
const items = document.querySelectorAll('.nav-item');

function handleIndicator(el) {
  items.forEach(item => {
    item.classList.remove('is-active');
    item.removeAttribute('style');
  });

  indicator.style.width = `${el.offsetWidth}px`;
  indicator.style.left = `${el.offsetLeft}px`;
  indicator.style.backgroundColor = el.getAttribute('active-color');

  el.classList.add('is-active');
  el.style.color = el.getAttribute('active-color');
}


items.forEach((item, index) => {
  item.addEventListener('click', e => {handleIndicator(e.target);});
  item.classList.contains('is-active') && handleIndicator(item);
});

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
const contactUs = document.querySelector(".contact_us");
const contactButton = document.querySelector(".contact-button");

contactButton.addEventListener("click", () => {
  contactUs.classList.toggle("cotactform-show");

});

// Contact btn section ends

// Whats ap section stats
$(document).ready(function(){

  $('.btn-whatsapp-chat').click(function(){
    $('.box-whatsapp-chat').toggleClass('open');
    $(this).toggleClass('openbtn');
  });
 
});



function isMobileWA() {
     return /Android|webOS|iPhone|iPad|iPod|Windows Phone|IEMobile|Mobile|BlackBerry/i.test(navigator.userAgent);
   }
   var elm = jQuery('a[href*="whatsapp.com"]');
   jQuery.each(elm, function (index, value) {
     var item = jQuery(value).attr("href");
     if (item.indexOf("chat") != -1) {
       //nothing
     } else if (item.indexOf("web.whatsapp") != -1 && isMobileWA()) {
       var itemLink = item;
       var newLink = itemLink.replace("web.whatsapp", "api.whatsapp");
       jQuery(value).attr("href", newLink);
     } else if (item.indexOf("api.whatsapp") != -1 && !isMobileWA()) {
       var itemLink = item;
       var newLink = itemLink.replace("api.whatsapp", "web.whatsapp");
       jQuery(value).attr("href", newLink);
     }
   });
// Whats ap section ends


