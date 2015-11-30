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
	
	$('.image-wrap').each(function(i,el) {
		if($(el).data("shown") == "1") {
			$(this).next().slideDown();
			$(this).children().attr("src","http://localhost/laravel-speldnz/public/asset/icons/minus.png");
		}
	});

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


	$('.learning-dyslexia-wrap .Dyslexia, .Dyspraxia, .ADHD, .Dysgraphia, .Dyscalculia').each(function(i,el){

		if($(el).data("shown") == "1") {

			$(this).next().slideDown();
			$(this).children().children().removeClass('fa-angle-down').addClass('fa-angle-up');

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

	function getQueryString(sParam){

	    var sPageURL = window.location.search.substring(1);
	    var sURLVariables = sPageURL.split('&');
	    for (var i = 0; i < sURLVariables.length; i++) 
	    {
	        var sParameterName = sURLVariables[i].split('=');
	        if (sParameterName[0] == sParam) 
	        {
	            return sParameterName[1];
	        }
	    }
	}

	if(getQueryString("login") == "show"){
		$("#login").css("display","block");
	}

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


//--------------------------jeditable--------------------------------

	$("[data-field]").each(function(i,el) {

		var url = "news/"+$(el).attr("data-postid");

		var options = {
			type:"textarea",
			submitdata:{
				_method:"PUT",
				_token:$("#token").text(),
				field:$(this).attr("data-field")
			},
			submit:"OK"
		};

		console.log(options);

		$(this).editable(url,options);

	});

//--------------------------jeditable--------------------------------

	$('.login-button a').on("click",function(e) {
		e.preventDefault();
	});

	$(".list-wrap input").on("change",function(){
		if($(".list-wrap input:checked").length >= 5){

			window.location.href = 'pages/3';

		}
	});

//--------------------------download---------------------------------	
	var i=1;
	$('.check-box').on("click",function() {

		$(this).parent().css("display","none");
		
		$('.counter-number').html(i);
		i = i+1;
	});
//--------------------------download---------------------------------	

//--------------------------font-size--------------------------------

	$('#sfont').on("click",function() {
		curSize = parseInt($('.navigation').css('font-size')) - 2;
		if(curSize>=12) {

			$('.navigation').css('font-size',curSize);
		}
	});

	$('#lfont').on("click",function() {
		curSize = parseInt($('.navigation').css('font-size')) + 2;
		if(curSize<=20){

			$('.navigation').css('font-size',curSize);
		}

	});

//--------------------------font-size--------------------------------



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
  // $('.image-slider').slick({
  //     slidesToShow: 3,
	 //  slidesToScroll: 1,
	 //  autoplay: true,
	 //  autoplaySpeed: 2000,
  // });

	$('.image-slider').slick({
	  autoplay: true,
	  autoplaySpeed: 2000,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  infinite: true,
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 1,
	        autoplay: true,
	 		autoplaySpeed: 2000,
	        infinite: true
	      }
	    },
	    {
	      breakpoint: 704,
	      settings: {
	        slidesToShow: 3,
	        sslidesToScroll: 1,
	        autoplay: true,
	  		autoplaySpeed: 2000,
	        infinite: true
	      }
	    }
	    // {
	    //   breakpoint: 480,
	    //   settings: {
	    //     slidesToShow: 1,
	    //     slidesToScroll: 1
	    //   }
	    // }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});





});
//------------------image-slider----------------------------------
	