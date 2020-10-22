$(document).ready(function(){
  $(".BNCrossbtn").click(function(){
    $(".BreakingN").remove();
  });
});
 
	
	$(function(){
  $('.Gslider').bxSlider({
     //slideWidth: 600
	slideWidth:263,
	minSlides:1,
	maxSlides:4,
	slideMargin:20,
	responsive:true,
	pager:false,
  });
});		


// Menu
function openNav() {
    if ($('body').hasClass('open-nav')){
       $('body').removeClass('open-nav');
       $('.menu li').eq(0).addClass('active');
       $('.menu li span').click(function(){
        if ($(this).parent('li').hasClass('active')){
            $('.menu li').removeClass('active');
        }else{
          $('.menu li').removeClass('active');
          $(this).parent('li').addClass('active');
        }        
      });
    } else {
        $('body').addClass('open-nav');

      
      /*$('.tab-headding').click(function(){
        
        $('.tab-content').removeClass('active');
        $('.tab-headding').removeClass('active');
        $(this).addClass('active');
        $(this).parent('.tab-box').find('.tab-content').addClass('active');

      });
*/	  $('.menu li').eq(0).addClass('active');
      $('.menu li span').click(function(){
        if ($(this).parent('li').hasClass('active')){
            $('.menu li').removeClass('active');
            
        }else{
          $('.menu li').removeClass('active');
          $(this).parent('li').addClass('active');
        }
		
      });

    }
    
}

$(document).ready(function(){
  $('.search-icon').click(function(){
    $('#headerSearch').show();
  });
  $('.search-box .search-icon').click(function(){
    $('#headerSearch').hide();
  });



  window.onscroll = function() {myFunction()};

  var header = document.getElementById("Header");  
  var sticky = 65;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
      document.body.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
      document.body.classList.remove("sticky");
    }
  }
  	$('.leftSidebar, .content, .rightSidebar')
					.theiaStickySidebar({
						additionalMarginTop: 30
					});
});
