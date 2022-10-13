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

// Whats app section starts
// Left Propriedades
// $(function () {
//   $('.floating-wpp').floating({
//     headerTitle: 'Olá, bem vindo(a)!',
//     headerColor: 'crimson',
//     phone: '5531986562991',
//     popupMessage: 'Como posso te ajudar?',
//     message: "Eu entrei pelo site e gostaria de pedir um hamburger por favor...",
//     showPopup: true,
//     position: 'left',
//     showOnIE: true,
//     zindex: 54,
//     size: '70px',
//     backgroundColor: 'crimson',
//     buttonImage: '<img src="https://matheusfreitas.com/mercatorio/img/burger.svg"/>'
//   });
// });

// // Rightt Propriedades
// $(function () {
//   $('.Right-zap').({
//     headerTitle: 'Olá, bem vindo(a)!',
//     phone: '5531986562991',
//     popupMessage: 'Como posso te ajudar?',
//     message: "Eu entrei pelo site e gostaria de pedir um hamburger por favor...",
//     showPopup: true,
//     position: 'right',
//     showOnIE: true,
//     zindex: 40,
//     size: '80px',
//     buttonImage: '<img src="https://matheusfreitas.com/mercatorio/img/whatsapp.svg"/>'
//   });
// });
// Whats app section ends

