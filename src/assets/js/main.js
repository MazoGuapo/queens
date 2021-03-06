/*****************************************/
/*********** FUNCIONES BASE **************/
/*****************************************/
const $ = jQuery = require('jquery');
// const Swiper = require('swiper');

/*****************************************/
/************ BASE FUNCTIONS *************/
/*****************************************/

// MENU
menu();
// FORMULARIOS ENRIQUECIDOS
formularios();
// SCROLL INICIAL
shrink_body();
// OCULTAR MENU
jQuery('.menu__wrap').fadeOut('');
// ANIMATED LETTERS
// if ( jQuery('.animated_letters').length ) { animated_letters(); }

/*****************************************/
/******** LOADING PACE FIRST TIME ********/
/*****************************************/
paceOptions = {
  eventLag: false, // disabled
};

Pace.once('hide', function(){
  inicio();
});

/*****************************************/
/*********** FUNCIONES INICIO ************/
/*****************************************/
function inicio() {

  // HIDE CARGADOR
  jQuery('body').addClass('loaded');
  setTimeout(
    function(){
      jQuery('.cargador').css('display','none');
  }, 500);

  // LOADING HIDE
  setTimeout(
    function () {

      // CAROUSEL
      // if (jQuery('.modelCarousel').length) { project_carousel(); }

    }, 500
  );
}


/*****************************************/
/************* PARALLAX BG ***************/
/*****************************************/

module_backgorund();

function module_backgorund() {
  var controller3 = new ScrollMagic.Controller();
  // build scenes
  var revealElements = document.getElementsByClassName("parallax-start");
  for (var i=0; i<revealElements.length; i++) { // create a scene for each element
    new ScrollMagic.Scene({
      triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
      duration: "100%",
      triggerHook: "onLeave",
    })
    // .setTween(tween[i])
    .setTween(jQuery(revealElements[i]).find('.parallax-bg'), {y: "20%", ease: Linear.easeNone}) // add class toggle
    .addIndicators({name: "digit " + (i+1) }) // add indicators (requires plugin)
    .addTo(controller3);
  }
}

/*****************************************/
/************* PARALLAX BG ***************/
/*****************************************/
const swiper = new Swiper('.swiper-banner', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: '1',
  spaceBetween: 0,
  autoplay: true,
  speed: 800,
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
});

const swiper2 = new Swiper('.swiper-gallery', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  slidesPerView: 'auto',
  spaceBetween: 10,
  freeMode: true,
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const swiper3 = new Swiper('.swiper-carousel', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  slidesPerView: 'auto',
  spaceBetween: 10,
  freeMode: {
    enabled: true,
    sticky: true,
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const swiper4 = new Swiper('.swiper-normal', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  slidesPerView: 'auto',
  spaceBetween: 10,
  freeMode: {
    enabled: true,
    sticky: true,
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});




// // REEMPLAZAR IMG POR SVG
// // svg_replace();
// // TITULOS ANIMADOS > SPAN
// // if ( jQuery('.animated_letters').length ) { animated_letters(); }
// // AJAX MODAL GALLERY
// if ( jQuery('.btn_gallery').length ) { modal_ajax_gallery(); }
// // CARRUSEL FICHA
// if ( jQuery('.btn_gallery').length ) { modal_ajax_gallery(); }
// // CARRUSEL EQUIPAMIENTOS
// if ( jQuery('.carousel').length ) { carrusel_equipamientos(); }

// if ( jQuery('.owl-carousel.carousel-iconos').length ) { carrusel_iconos(); }

// if ( jQuery('.owl-carousel.wrapper_bottom').length ) { carrusel_icono_textos(); }

// jQuery(window).stellar();

// jQuery( window ).resize(function() {
//   altura_viewport()
// });

// jQuery(".downloadLink").click(
//   function(e) {

//       link = jQuery(this).data('url');
//       e.preventDefault();

//       //open download link in new page
//       window.open( jQuery(this).attr("href") );

//       //redirect current page to success page
//       window.location = link;
//       window.focus();
//   }
// );

// /*****************************************/
// /************ ANIMATED LETTERS ***********/
// /*****************************************/
// // WORDS IN SPAN
// // function animated_letters() {
// //     var h1 = jQuery('.animated_letters p');
// //     h1.contents()
// //     h1.contents().each(function() {
// //         var words;
// //         if (this.nodeType === 3) {
// //             words = '<span><span> ' + this.data.split(/\s+/).join(' </span></span><span><span> ') + ' </span></span>';
// //             jQuery(this).replaceWith(words);
// //         } else if (this.nodeType === 1) {
// //             this.innerHTML = '<span><span>  ' + this.innerHTML.split(/\s+/).join(' </span></span><span><span> ') + ' </span></span>';
// //         }
// //     });
// // }

// /*****************************************/
// /******** LOADING PACE FIRST TIME ********/
// /*****************************************/\

// Pace.once('hide', function(){
//   // INICIO
//   // inicio();
//   console.log('pepito')
// });

// /*****************************************/
// /*********** FUNCIONES INICIO ************/
// /*****************************************/
// function inicio() {

//   // HIDE CARGADOR
//   jQuery('body').addClass('loaded');
//   setTimeout(
//     function(){
//       jQuery('.cargador').css('display','none');
//   }, 500);

//   // LOADING HIDE
//   setTimeout(
//     function () {

//       // CAROUSEL
//       // if (jQuery('.modelCarousel').length) { project_carousel(); }
//       // WAYPOINTS
//       // if (jQuery('section').length) { animate_sections(); }
//       // if (jQuery('.animated_text').length) { animate_text(); }
//       // if (jQuery('.carrusel__background').length) { home_carousel(); }
//     }, 500
//   );
// }


// /*****************************************/
// /************** SVG REPLACE **************/
// /*****************************************/
// function svg_replace(){
//   jQuery('img[src$=\".svg\"]').each(function(){
//     var $img = jQuery(this);
//     var imgID = $img.attr('id');
//     var imgClass = $img.attr('class');
//     var imgURL = $img.attr('src');
//     jQuery.get(imgURL, function(data) {

//         // Get the SVG tag, ignore the rest
//         var $svg = jQuery(data).find('svg');

//         // Add replaced image's ID to the new SVG
//         if(typeof imgID !== 'undefined') {
//           $svg = $svg.attr('id', imgID);
//         }
//         // Add replaced image's classes to the new SVG
//         if(typeof imgClass !== 'undefined') {
//           $svg = $svg.attr('class', imgClass+' replaced-svg');
//         }

//         // Remove any invalid XML tags as per http://validator.w3.org
//         $svg = $svg.removeAttr('xmlns:a');

//         // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
//         if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
//           $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
//         }

//         // Replace image with new SVG
//         $img.replaceWith($svg);
//     }, 'xml');
//   });
// }

/*****************************************/
/*** FUNCION FORMULARIOS ENRIQUECIDOS ****/
/*****************************************/

function formularios() {
   // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
   if (!String.prototype.trim) {
    (function() {
      // Make sure we trim BOM and NBSP
      var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      String.prototype.trim = function() {
        return this.replace(rtrim, '');
      };
    })();
  }

  [].slice.call( document.querySelectorAll( '.input__field' ) ).forEach( function( inputEl ) {
    // in case the input is already filled..
    if( inputEl.value.trim() !== '' ) {
      classie.add( inputEl.parentNode.parentNode, 'input--filled' );
    }

    // events:
    inputEl.addEventListener( 'focus', onInputFocus );
    inputEl.addEventListener( 'blur', onInputBlur );

  } );

  function onInputFocus( ev ) {
    classie.add( ev.target.parentNode.parentNode, 'input--filled' );
  }

  function onInputBlur( ev ) {
    if( ev.target.value.trim() === '' ) {
      classie.remove( ev.target.parentNode.parentNode, 'input--filled' );
    }
  }
}

/*****************************************/
/********* FUNCION SHRINK BODY ***********/
/*****************************************/
function shrink_body() {


  var offset = 150;
  var duration = 300;
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > offset) {
      jQuery('body').addClass('shrink');
      jQuery('.header__shadow').fadeIn();
    } else {
      jQuery('body').removeClass('shrink');
      jQuery('.header__shadow').fadeOut();
    }
  });


  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      jQuery('header').removeClass('header_hide');
    } else {
      jQuery('header').addClass('header_hide');
    }
    prevScrollpos = currentScrollPos;
  }

}

/*****************************************/
/*************** HOTSPOTS ****************/
/*****************************************/

/***************/
/***** MENU ****/
/***************/

function menu() {

  var bodyEl = document.body,
    content = document.querySelector('#wrap'),
    openbtn = document.getElementById('open-button'),
    closebtn = document.getElementById('close-button'),
    botones = document.querySelectorAll('.sidebar a'),
    botones2 = document.querySelectorAll('.menu__wrap .boton'),
    isOpen = false;

  function init() {
    initEvents();
  }

  function initEvents() {
    openbtn.addEventListener('click', toggleMenu);
    if (closebtn) {
      closebtn.addEventListener('click', toggleMenu);
    }

    botones.forEach(function (element) {
      element.addEventListener('click', toggleMenu);
    })

    botones2.forEach(function (element) {
      element.addEventListener('click', toggleMenu);
    })

    // close the menu element if the target it??s not the menu element or one of its descendants..

    content.addEventListener('click', function (ev) {
      var target = ev.target;
      if (isOpen && target !== openbtn) {
        toggleMenu();
      }
    });

  }

  function toggleMenu() {
    if (isOpen) {
      jQuery('.menu__wrap').fadeOut('');
          jQuery('.close-button').fadeOut('');
        setTimeout(
          function(){   
            jQuery('body').removeClass('menu_open');
          },
        150); 
    } else {
      jQuery('body').addClass('menu_open');
      setTimeout(
        function(){
          jQuery('.menu__wrap').fadeIn('');
          jQuery('.close-button').fadeIn('');
        },
      300);
    }
    isOpen = !isOpen;
  }
  init();
}

// /*****************************************/
// /********* AJAX MODAL GALLERY ************/
// /*****************************************/
// function modal_ajax_gallery(){
//   jQuery('.btn_gallery').click(function(){

//     var img = jQuery(this).data('images');
//     var owl_active = jQuery(this).data('owl');

//     jQuery.ajax({
//       url: my_ajax_object.ajax_url,
//       data: {
//         imagenes: img,
//         action: 'show_gallery',
//         security: my_ajax_object.ajaxnonce
//       },

//       success: function(response){
//         if(response['error'] == '1'){
//           jQuery('#modalTitle').html("Error");
//           jQuery('#modalBody').html("No post found! Sorry :(");
//         } else {
//           jQuery('#modalBody').html(response['galeria']);
//           setTimeout(
//             function(){
//               console.log('lanzamiento carrusel');
//               promociones_carrusel();
//             if(owl_active != null) { jQuery('.owl-carousel').trigger('to.owl.carousel', owl_active ) }
//             },
//           50);
//           setTimeout(
//             function(){
//               jQuery('#modal_carrusel').css({"display": "block", "opacity": "1"});
//               jQuery('#modalGallery').modal('show');
//             },
//           300);
//         }
//       }
//     });

//   })
// }

// /******** CARRUSEL EQUIPAMIENTOS ********/
// function carrusel_equipamientos() {
//   var owl = jQuery('.owl-carousel.carousel');
//   owl.owlCarousel({
//     loop: false,
//     margin: 0,
//     nav: false,
//     items: 1,
//     dots: false,
//     URLhashListener:true,
//     autoplayHoverPause:true,
//     startPosition: '#pavimento'
//   });
// }

// /*********** CARRUSEL ICONOS ***********/
// function carrusel_icono_textos() {
//   var owl = jQuery('.owl-carousel.wrapper_bottom');
//   owl.owlCarousel({
//     loop: false,
//     margin: 0,
//     nav: false,
//     items: 1,
//     navSpeed: 0,
//     dots: false,
//     URLhashListener:true,
//     autoplayHoverPause:true,
//     startPosition: '#zonas_verdes'
//   });
// }

// /*********** CARRUSEL ICONOS ***********/
// function carrusel_iconos() {
//   var owl = jQuery('.owl-carousel.carousel-iconos');
//   owl.owlCarousel({
//     loop: false,
//     margin: 0,
//     nav: false,
//     items: 1,
//     navSpeed: 0,
//     dots: false,
//     URLhashListener:true,
//     autoplayHoverPause:true,
//     startPosition: '#zonas_verdes'
//   });
// }


// /*****************************************/
// /******** ANIMACIONES SECCIONES ***********/
// /*****************************************/
// function animate_sections() {

//   console.log('section');

//   jQuery('section').each(function(){
//     var _this = this;
//     var inview = new Waypoint({
//         element: _this,
//         handler: function (direction) {

//           console.log('LLEGA section');

//           // SECTION ADD CLASS
//           jQuery(this.element).addClass('active');

//           // ANIMATED TITLES
//           if(jQuery(this.element).find('.animated_letters')){
//             jQuery(this.element).find('.animated_letters span').each(function(i) {
//               var $li = jQuery(this);
//               setTimeout(function() {
//                 $li.addClass('loaded');
//               }, i*100); // delay 100 ms
//             });
//           }

//           // ANIMATED GRID
//           if(jQuery(this.element).find('.module__gridImg')){
//             jQuery(this.element).find('.module__gridImg__image').each(function(i) {
//               var $li = jQuery(this);
//               setTimeout(function() {
//                 $li.addClass('loaded');
//               }, i*100); // delay 100 ms
//             });
//           }

//           // ANIMATED ICONS
//           if(jQuery(this.element).find('.iconos')){
//             jQuery(this.element).find('.icono').each(function(i) {
//               var $li = jQuery(this);
//               setTimeout(function() {
//                 $li.addClass('active');
//               }, i*150); // delay 100 ms
//             });
//           }

//           // BANNER BUTTONS
//           if(jQuery(this.element).find('.banner_buttons')){
//             jQuery(this.element).find('.banner_buttons div').each(function(i) {
//               var $li = jQuery(this);
//               setTimeout(function() {
//                 $li.addClass('active');
//               }, i*150); // delay 100 ms
//             });
//           }


//         },
//         offset: '50%'
//     });
//   });
// }

// BEFORE & AFTER
if( jQuery(".slider").length > 0 ) {
  const slider = document.querySelector(".slider input");
  const img = document.querySelector(".images .img-2");
  const dragLine = document.querySelector(".slider .drag-line");
  slider.oninput = ()=>{
    let sliderVal = slider.value;
    let right = 100 - sliderVal;
    dragLine.style.right = right + "%";
    img.style.width = right + "%";
  }
}

/************************/
/** GRID  LIGHTGALLERY **/
/************************/

grid_gallery();

if( jQuery(".gallery_lg").length > 0 ) {
  var elements = document.getElementsByClassName('gallery_lg');
  for (let item of elements) {
      lightGallery(item, {
          counter: false,
          download: false,
          selector: '.gallery_lg_item',
          licenseKey: 'RWGFX-KWFPH-57MZ4-GKE8B',
      })
  }
}

if( jQuery(".button_lg_iframe").length > 0 ) {
  var elements = document.getElementsByClassName('button_lg_iframe');
  for (let item of elements) {
      lightGallery(item, {
        addClass: 'lg_iframe',
        counter: false,
        download: false,
        selector: 'this',
        licenseKey: 'RWGFX-KWFPH-57MZ4-GKE8B',
      })
  }
}


function grid_gallery(){
  // BUTTON OPEN
  jQuery(document).on('click', '.button_lg', function (event) {
    event.preventDefault();
    var grid = jQuery(this).data('gallery');
    console.log(grid);
    jQuery("#"+grid+" .gallery_lg_item:first-child").trigger("click");
  });
}
