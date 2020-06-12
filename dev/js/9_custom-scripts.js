/*!
 * theme custom scripts
*/

jQuery(document).ready(function($){

  $('#gallery-modal').on('shown.bs.modal', function(e){
    var $slideLink = e.relatedTarget;
    var targetSlide = $($slideLink).data('initial_slide');

    var popupGallery = new Swiper('#gallery-modal .swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      autoHeight: true,
      effect: 'fade',
      autoplay: false,
      spaceBetween: 35,
      preloadImages: true,
      loop: true,
      //initialSlide: targetSlide
    });
    popupGallery.slideTo(targetSlide + 1);
    popupGallery.update();
  });

  $('#portfolio-gallery .gallery-item').on('click', function(e){
    e.preventDefault();
  });
});