$(function(){
	// console.log('hi');
	var isOpen = false;

//-------------------------menu----------------------------------
	$('.menu').on("click", function() {

		if(isOpen == false) {

			$('#mobile-nav').slideDown("slow");
			$('.open').addClass('hidden');
			$('.close').removeClass('hidden');
			isOpen = true;
		} else {

			$('#mobile-nav').slideUp("slow");
			$('.close').addClass('hidden');
			$('.open').removeClass('hidden');

			if(isLearningOpen=true) {
				$('#learning-sub-menu').slideUp("slow");
				$(".plus").attr("src","http://localhost/laravel-speldnz/public/asset/icons/plus.png");
			}
			isOpen = false;
		}

	});

//-------------------------menu----------------------------------

//---------------------learning-submenu--------------------------
	var isLearningOpen = false;


	$('.learning span').on("click",function() {

		//$('#mobile-nav').css('height','426px');

		if(isLearningOpen==false) {

			$(".plus").attr("src","http://localhost/laravel-speldnz/public/asset/icons/minus.png");

			$('#learning-sub-menu').slideDown("slow");

			isLearningOpen=true;

		} else {
			
			$(".plus").attr("src","http://localhost/laravel-speldnz/public/asset/icons/plus.png");
			$('#learning-sub-menu').slideUp("slow");
			isLearningOpen=false;
		}	
		
	});
//---------------------learning-submenu--------------------------


//---------------------search------------------------------------	
	var isSearchOpen = false;
	$('.search').on("click",function() {
		if(isSearchOpen == false) {

			$('#search-box').slideDown();
			isSearchOpen = true;

		} else {
			$('#search-box').slideUp(function() {
				$('#search-box').css("display","none");
			});
			isSearchOpen = false;
		}
	});
//---------------------search------------------------------------

//---------------------reading-assist----------------------------

	$('.off-box').on("click",function() {
		$('.circle img').attr("src","asset/icons/circle-on.png");
		$('.on-box').css("border","none").css("background-color","rgba(0,0,0,0)").css("color","#fff").css("font-weight","100");
		$('.off-box').css("background-color","#fff").css("border","1px #fff solid").css("border-radius","3px").css("color","tomato");
		$('.on-off-wrap').css("background-color","#CDDC39").css("border","2px #CDDC39 solid");
	});

	$('.on-box').on("click",function() {
		$('.circle img').attr("src","asset/icons/circle-off.png");
		$('.off-box').css("border","none").css("background-color","rgba(0,0,0,0)").css("color","#fff").css("font-weight","100");
		$('.on-box').css("background-color","#fff").css("border","1px #fff solid").css("border-radius","3px").css("color","tomato");
		$('.on-off-wrap').css("background-color","#888").css("border","2px #888 solid");
	});
var isBottomOpen = false;

	$('.reading-assist-top').on("click",function() {
		if(isBottomOpen == false) {

			$('.reading-assist-bottom').css("display","flex");
			isBottomOpen = true;

		}else {

			$('.reading-assist-bottom').css("display","none");
			isBottomOpen =false;
		}
	});
//---------------------reading-assist----------------------------


//---------------------learning-accordion----------------------------
var isTextOpen = false;
	$('.image-wrap').on("click", function() {
		if(isTextOpen == false) {

			$(this).next().slideDown();
			$(this).children().attr("src","http://localhost/laravel-speldnz/public/asset/icons/minus.png");

			isTextOpen = true;
		}else {

			$(this).next().slideUp();
			$(this).children().attr("src","http://localhost/laravel-speldnz/public/asset/icons/plus.png");	

			isTextOpen = false;
		}
	});


	$('.learning-dyslexia-wrap .Dyslexia, .Dyspraxia, .ADHD, .Dysgraphia, .Dyscalculia').on("click",function() {


		if($(this).data("shown") == "0") {

			$(this).next().slideDown();
			$(this).children().children().removeClass('fa-angle-down').addClass('fa-angle-up');
			
			$(this).data("shown","1");

		}else {

			$(this).next().slideUp();
			$(this).children().children().removeClass('fa-angle-up').addClass('fa-angle-down');
			
			$(this).data("shown","0");
		}
	});

//---------------------learning-accordion----------------------------

//---------------------------login-----------------------------------
	$('.login-button').on("click",function(e) {
		e.preventDefault();
		$("#login").css("display","block");


	});
	$('.close-login-box').on("click",function() {
		$("#login").css("display","none");
	});

//---------------------------login-----------------------------------

//---------------------------scroll----------------------------------
	$(window).on("scroll",function() {
		var iTop = $(window).scrollTop();

		if(iTop > 200) {
			$('#go-top').css("display","block");
		} else {
			$('#go-top').css("display","none");
		}

	});

	$('#go-top').on("click",function() {
		$("html, body").animate({scrollTop: "0"}, 500);
	});

//---------------------------scroll----------------------------------

//---------------------------cart------------------------------------
	$('.download-cart-box').on("click",function() {
		if($('.download-overlay').data("shown") == "0") {

			$('.triangle-point').css('display','block');
			$('.download-overlay').slideDown();

			$('.download-overlay').data("shown","1");

		}else {
			$('.download-overlay').slideUp();
			setTimeout(function(){
				$('.triangle-point').css('display','none');
			},400)
			

			$('.download-overlay').data("shown","0");

		}

	});

//---------------------------cart------------------------------------

//---------------------------searchbox-desktop-----------------------
	// $('.search-out-box').on("click",function() {
	// 	$('.search-out-box').css("display","none");
	// 	$('.search-desktop').css("width","7em");
	// 	$('.search-desktop form').removeClass('hidden');

	// });

//---------------------------searchbox-desktop-----------------------

//---------------------------mouse-over------------------------------
	$('.mouse-over').on("mouseenter",function() {
		$('#desktop-sub-menu').show();

		$('#desktop-sub-menu').on("mouseleave",function() {
			$(this).hide();
		});
	});
	
//---------------------------mouse-over------------------------------


//--------------------------mobile-hover-----------------------------
	$('.hover').bind('touchstart touchend', function(e) {
		e.preventDefault();
		$(this).toggleClass('hover_effect');
	});
//--------------------------mobile-hover-----------------------------


});//jquery
//---------------------------checklist-------------------------------

$(document).ready(function(){

	if($(".showPopUp").html()=="true"){

		$('#overlay').delay(1000).fadeIn();

		$('.close-checklist').on("click",function() {
			$('#overlay').fadeOut();
		});
	}

});
//---------------------------checklist-------------------------------

//------------------image-slider----------------------------------

$(document).ready(function(){
  $('.image-slider').slick({
      slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
  });
});
//------------------image-slider----------------------------------
	