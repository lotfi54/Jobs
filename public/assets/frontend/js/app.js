// var galleryThumbs = new Swiper('.gallery-thumbs', {
//   direction: 'vertical',
//   spaceBetween: 0,
//   slidesPerView: 4,
//   mousewheel: true,
// });
var galleryTop = new Swiper('.gallery-top', {
direction:'horizontal',
// autoHeight: true, //enable auto height
touchMoveStopPropagation:false,
  spaceBetween: 0,

      mousewheel: true,
        speed: 800,
          

  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',
  },
 //looped slides should be the same
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    '@0.00': {
       direction:'vertical',
      slidesPerView: 1,
      spaceBetween: 0,
    },
    '@0.75': {
      direction:'vertical',
      slidesPerView: 1,
      spaceBetween: 0,
    },
    '@1.00': {
      height:500,
      direction:'vertical',
      slidesPerView: 1,
      spaceBetween: 0,
    },
    '@1.50': {
       direction:'horizontal',
      slidesPerView: 1,
      spaceBetween: 0,
    },
  }

  // thumbs: {
  //   swiper: galleryThumbs,
  // },
});




// img et cursor

// var cursor = $(".cursor"),
//                 follower = $(".cursor-follower");

//             var posX = 0,
//                 posY = 0,
//                 mouseX = 0,
//                 mouseY = 0;

//             TweenMax.to({}, 0.016, {
//                 repeat: -1,
//                 onRepeat: function() {
//                     posX += (mouseX - posX) / 9;
//                     posY += (mouseY - posY) / 9;

//                     TweenMax.set(follower, {
//                         css: {
//                             left: posX - 20,
//                             top: posY - 20
//                         }
//                     });

//                     TweenMax.set(cursor, {
//                         css: {
//                             left: mouseX,
//                             top: mouseY
//                         }
//                     });
//                 }
//             });

//             $(document).on("mousemove", function(e) {
//                 mouseX = e.pageX;
//                 mouseY = e.pageY;
//             });

//             $(".card-img ").on("mouseenter", function() {
//                 cursor.addClass("active");
//                 follower.addClass("active");
//             });

//             $(".card-img").on("mouseleave", function() {
//                 cursor.removeClass("active");
//                 follower.removeClass("active");
//             });

         


var circle = $('.circle'),
    follow = $('.circle-follow');
    


function moveCircle(e) {
  TweenLite.to(circle, 0.3, {
      x: e.clientX,
      y: e.clientY
  });

  TweenLite.to(follow, 0.7, {
      x: e.clientX,
      y: e.clientY
  });

}


function hoverFunc(e) {
  TweenLite.to(circle, 0.3, {
    opacity: 1,
    scale: 0
  });
  TweenLite.to(follow, 0.3, {
      scale: 1.2
  });  


}

function unhoverFunc(e) {
  TweenLite.to(circle, 0.3, {
    opacity: 1,
    scale: 2
  });
  TweenLite.to(follow, 0.3, {
      scale: 1
  });  
 
}
// $(window).on('mousemove', moveCircle);

// $(".posting-item").on("mouseenter", function() {
//                   circle.addClass("active");
//                   follow.addClass("active");
//               });
  
//               $(".posting-item").on("mouseleave", function() {
//                   circle.removeClass("active");
//                   follow.removeClass("active");
//               });




$(".name-menu-slide").hover(hoverFunc, unhoverFunc);

$(".link").hover(hoverFunc, unhoverFunc);

$(".next-button").hover(hoverFunc, unhoverFunc);

$(".prev-button").hover(hoverFunc, unhoverFunc);

$(".more-job").hover(hoverFunc, unhoverFunc);

$(".social").hover(hoverFunc, unhoverFunc);

$("a").hover(hoverFunc, unhoverFunc);

$(".burger").hover(hoverFunc, unhoverFunc);

// var hoverMouse = function($el) {
//   $el.each(function() {
//     var $self = $(this);
//     var hover = false;
//     var offsetHoverMax = $self.attr("offset-hover-max") || 0.7;
//     var offsetHoverMin = $self.attr("offset-hover-min") || 0.5;

//     var attachEventsListener = function() {
//       $(window).on("mousemove", function(e) {
//         //
//         var hoverArea = hover ? offsetHoverMax : offsetHoverMin;

//         // cursor
//         var cursor = {
//           x: e.clientX,
//           y: e.clientY + $(window).scrollTop()
//         };

//         // size
//         var width = $self.outerWidth();
//         var height = $self.outerHeight();

//         // position
//         var offset = $self.offset();
//         var elPos = {
//           x: offset.left + width / 2,
//           y: offset.top + height / 2
//         };

//         // comparaison
//         var x = cursor.x - elPos.x;
//         var y = cursor.y - elPos.y;

//         // dist
//         var dist = Math.sqrt(x * x + y * y);

//         // mutex hover
//         var mutHover = false;

//         // anim
//         if (dist < width * hoverArea) {
//           mutHover = true;
//           if (!hover) {
//             hover = true;
//           }
//           onHover(x, y);
//         }

//         // reset
//         if (!mutHover && hover) {
//           onLeave();
//           hover = false;
//         }
//       });
//     };

//     var onHover = function(x, y) {
//       TweenMax.to($self, 0.4, {
//         x: x * 0.4,
//         y: y * 0.4,
//         //scale: .9,
//         rotation: x * 0.02,
//         ease: Power2.easeOut
//       });
//     };
//     var onLeave = function() {
//       TweenMax.to($self, 0.3, {
//         x: 0,
//         y: 0,
//         scale: 1,
//         rotation: 0,
//         ease: Elastic.easeOut.config(0.4, 0.4)
//       });
//     };

//     attachEventsListener();
//   });
// };

// hoverMouse($('.title-slide-1 img'));

// hoverMouse($('.logo-about img'));



const burger = document.querySelector(".burger");

burger.addEventListener("click", function(){
    burger.classList.toggle("open");
});


var t1 = new TimelineMax({paused: true});

t1.to(".menu-burger-1", 1.3, {
     left: "60%",
     ease: Expo.easeInOut,
     
});

t1.staggerFrom(".menu-burger-1 ul li", 1.5, {x: 30, opacity: 0, ease:Expo.easeOut}, 0.1);

t1.reverse();
$(document).on('click', '.burger', function() {
  t1.reversed(!t1.reversed());
});