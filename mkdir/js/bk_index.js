$(function(){
  $('#js-works-slider').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      infinite: true,
      lazyLoad:true,
      slidesToShow: 4,
      slidesToScroll: 2,
      centerMode: true,
      centerPadding:'100px',
      arrows:false,

        responsive: [
          {
            breakpoint: 1454,
            
              settings: {
                slidesToShow: 3,
                centerPadding:'30px',
                
              }
    
            },
    
        {

        breakpoint: 1024,
        
          settings: {
            slidesToShow: 2,
            centerPadding:'30px',
            
          }

        },

        {
        
        breakpoint: 768,
        
          settings: {
            slidesToShow: 1,
            centerPadding:'30px',
            
          }

        }

        ]

    });


  $('#js-blog-slider').slick({
    autoplay: true,
    autoplaySpeed: 2500,
    dots: false,
    infinite: true,
    lazyLoad:true,
    slidesToShow: 4,
    slidesToScroll: 2,
    centerMode: true,
    centerPadding:'100px',
    arrows:false,

      responsive: [
        {
          breakpoint: 1454,
          
            settings: {
              slidesToShow: 3,
              centerPadding:'30px',
              
            }
  
          },

        
      {
      breakpoint: 1024,
      
        settings: {
          slidesToShow: 2,
          centerPadding:'30px',
          
        }

      },

      {
      
      breakpoint: 768,
      
        settings: {
          slidesToShow: 1,
          centerPadding:'30px',
          
        }

      }

      ]
  });


// ハンバーガーメニュー

$(function() {
  $('.js-click-ivent').click(function(){   
      if($('#line1').hasClass('Line_1')){
          $('#line1').removeClass('Line_1')
          $('#line2').removeClass('Line_2')
          $('#line3').fadeIn(250)
          let result = $('.footer-right').css('display');
          if($(result == 'block')){
            $('.footer-right').css('display', 'none');
          }else{
            $('.footer-right').css('display', 'block');
          }

      }else{
          $('#line1').addClass('Line_1')
          $('#line2').addClass('Line_2')
          $('#line3').hide(250)
          let result = $('.footer-right').css('display');
          if($(result == 'block')){
            $('.footer-right').css('display', 'block');
          }else{
            $('.footer-right').css('display', 'none');
          }
      }  
  })
});






});

  