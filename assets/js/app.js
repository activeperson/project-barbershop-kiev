$(function() {


if($('.screen__slider-wrapper').length > 0){
  $('.screen__slider-wrapper').each(function(){
    var $status = $('.arrows-count');
    var $slickElement = $(this);
    $slickElement.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide){
        var i = (currentSlide ? currentSlide : 0) + 1;         
        $('.arrows-count', slick.$slider.parent()).text(i + '/' + slick.slideCount);
    });
    $slickElement.slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    adaptiveHeight: true,
    fade: true,
    cssEase: 'linear',
    prevArrow: $('.arrow-left'),
    nextArrow: $('.arrow-right'),
      });

    $slickElement.parent().find('.arrow-right').click(function(){
        $slickElement.slick('slickNext');        
      });
    $slickElement.parent().find('.arrow-left').click(function(){
        $slickElement.slick('slickPrev');
      });
  });
}


  $('.all-items').slick({
  	dots: true,
    infinite: false,
    slidesToShow: 3,
    adaptiveHeight: true,
    slidesToScroll: 1,
    prevArrow: $('.added .arrow-left'),
    nextArrow: $('.added .arrow-right')
  });


  $('.blog-items').slick({
  	dots: true,
    infinite: false,
    slidesToShow: 3,
    adaptiveHeight: true,
    slidesToScroll: 1,
    prevArrow: $('.blog .arrow-left'),
    nextArrow: $('.blog .arrow-right')
  });

});