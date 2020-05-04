/*
	Project Name : Express

	## Document Scroll
	
	## Document Ready
		- Scrolling Navigation
		- Responsive Caret
		- Testimonials
		- Partners Section
		- Fun Fact - Number
		- Lightbox for Portfolio Images
		- Faq Section
		- Coming Soon
		- Contact Form

	## Window Load
		- Site Loader
		- Portfolio
	
	
	## Contact Map
*/

(function($) {

	"use strict"
	
	/* ## Document Scroll - Window Scroll */
	$( document ).scroll(function()
	{
		var scroll	=	$(window).scrollTop();
		var height	=	$(window).height();

		/*** set sticky menu ***/
		if( scroll >= height )
		{
			$('.menu-block').addClass("navbar-fixed-top animated fadeInDown").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$('.menu-block').removeClass("navbar-fixed-top animated fadeInDown");
		}
		else
		{
			$('.menu-block').removeClass("navbar-fixed-top animated fadeInDown");
		} // set sticky menu - end	
	});
	
	/* ## Document Ready - Handler for .ready() called */
	$(document).ready(function($) {

		/* - Scrolling Navigation */
		var scroll	=	$(window).scrollTop();
		var height	=	$(window).height();		
		
		/*** set sticky menu ***/
		if( scroll >= height -500 )
		{
			$('.menu-block').addClass("navbar-fixed-top").delay( 2000 ).fadeIn();
		}
		else if ( scroll <= height )
		{
			$('.menu-block').removeClass("navbar-fixed-top");
		}
		else
		{
			$('.menu-block').removeClass("navbar-fixed-top");
		} // set sticky menu - end

		$('.navbar-nav li a[href*="#"]:not([href="#"]), .site-logo a[href*="#"]:not([href="#"])').bind('click', function(e) {

			var $anchor = $(this);
			
			$('html, body').stop().animate({ scrollTop: $($anchor.attr('href')).offset().top - 49 }, 1500, 'easeInOutExpo');
			
			e.preventDefault();
		});

		/* - Responsive Caret */
		$('.ddl-switch').on('click', function() {

			var li = $(this).parent();

			if ( li.hasClass('ddl-active') || li.find('.ddl-active').length !== 0 || li.find('.dropdown-menu').is(':visible') ) {
				li.removeClass('ddl-active');
				li.children().find('.ddl-active').removeClass('ddl-active');
				li.children('.dropdown-menu').slideUp();	
			}
			else {
				li.addClass('ddl-active');
				li.children('.dropdown-menu').slideDown();
			}
		});
		
		if($(".services-box").length){
			$(".services-box").owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				dots:true,
				autoplay:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:3
					}
				}
			})
		}

		if($(".mission-image").length){
			$(".mission-image").owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				dots:false,
				autoplay:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			})
		}
		
		/* - Testimonials */
		if($(".testimonials-box").length){
			$(".testimonials-box").owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				dots:true,
				autoplay:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:2
					}
				}
			})
		}
		
		/* - Partners Section */
		if($(".partners-logos").length){
			$(".partners-logos").owlCarousel({
				loop: true,
				margin: 0,
				nav: false,
				dots: false,
				autoplay: false,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:5
					}
				}
			})
		}		
		
		/* - Fun Fact - Number */
		$(".fun-fact").each(function () {
			var $this = $(this);
			var myVal = $(this).data("value");
			$this.appear(function() {
				var statistics_item_count = 0;
				var statistics_count = 0;					
				statistics_item_count = $( "[id*='statistics_count-']" ).length;
				for(var i=1; i<=statistics_item_count; i++) {
					statistics_count = $( "[id*='statistics_count-"+i+"']" ).attr( "data-statistics_percent" );
					$("[id*='statistics_count-"+i+"']").animateNumber({ number: statistics_count }, 2000);
				}				
			});
		});

		/* - Lightbox for Portfolio Images */
		if( $(".portfolio-section").length ){
			$(".portfolio-box").magnificPopup({
				delegate: "a",
				type: "image",
				tLoading: "Loading image #%curr%...",
				mainClass: "mfp-img-mobile",
				gallery: {
					enabled: true,
					navigateByImgClick: false,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',				
				}
			});
		}
		
		/* - Faq Section */
		$(".faq-list li a").on("click",function() {
			var href = $(this).attr('href').split('-');
			$( "[id*='faq-']" ).removeClass("active");
			$( "[id='faq-"+href[1]+"']" ).addClass("active");
			$(".faq-list li a").removeClass('active');
			$(this).addClass("active");
		});
		
		$(".faq-list li a,.faq-content > a").on("click",function() {
			if ( location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname ) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate( { scrollTop: target.offset().top - 120 }, 1000, 'easeInOutExpo' );
					return false;
				}
			}
		});
		
		/* - Coming Soon */
		if( $(".coming-soon").length ) {
			var austDay = new Date();
			austDay = new Date(austDay.getFullYear() + 1, 2 - 1, 14);
			$('#defaultCountdown').countdown({until: austDay});
			$('#year').text(austDay.getFullYear());
		}
	
		/* - Contact Form */
		$( "#btn_submit" ).on( "click", function(event) {
			event.preventDefault();
			var mydata = $("form").serialize();

			$.ajax({
				type: "POST",
				dataType: "json",
				url: "contact.php",
				data: mydata,
				success: function(data) {

					if( data["type"] == "error" ){
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").removeClass("alert-msg-success");
						$("#alert-msg").addClass("alert-msg-failure");
						$("#alert-msg").show();
					} else {
						$("#alert-msg").html(data["msg"]);
						$("#alert-msg").addClass("alert-msg-success");
						$("#alert-msg").removeClass("alert-msg-failure");     
						$("#input_name").val("");
						$("#input_email").val("");
						$("#input_phone").val("");
						$("#input_subject").val("");
						$("#textarea_message").val("");
						$("#alert-msg").show();    
					}    
				},
				error: function(xhr, textStatus, errorThrown) {
					//alert(textStatus);
				}
			});
			return false;
		});

		/* Quick Contact Form /- */
		document.addEventListener('DOMContentLoaded', function () {
			document.querySelector('main').className += 'loaded';
		});
		
	});			

	/* ## Window Load - Handler for .load() called */
	$(window).load(function() {

		/* - Portfolio */
		if( $(".portfolio-section").length ){	

			var $container = $("#portfolio");

			$container.isotope({
				itemSelector: ".grid-item",
				gutter:0,
				transitionDuration: "0.5s"
			});
				
			$("#filters li a").on("click",function(){
				$('#filters li a').removeClass('active');
				$(this).addClass('active');
				var selector = $(this).attr('data-filter');
				$('#portfolio').isotope({ filter: selector });		
				return false;
			});	
		}

		/* - Site Loader */
		if ( !$('html').is('.ie6, .ie7, .ie8') ) {
			$("#site-loader").delay(1000).fadeOut("slow");
		}
		else {
			$("#site-loader").css('display','none');
		}
	});

})(jQuery);

/* ## Contact Map */
function initMap( obj = "map-canvas-contact" ) {

	var lat = $('#'+obj).attr("data-lat");
	var lng = $('#'+obj).attr("data-lng");
	var contentString = $('#'+obj).attr("data-string");
	var myLatlng = new google.maps.LatLng(lat,lng);
	var map, marker, infowindow;
	var image = 'images/marker.png';
	var zoomLevel = parseInt($('#'+obj).attr("data-zoom"),10);
	var styles = [{"featureType":"landscape","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":" "},{"lightness":" "},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":" "},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":" "},{"saturation":" "}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":" "},{"saturation":" "}]}]
	var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});	
	var mapOptions = {
		zoom: zoomLevel,
		disableDefaultUI: true,
		center: myLatlng,
		scrollwheel: false,
		mapTypeControlOptions: {
		mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		}
	}

	map = new google.maps.Map(document.getElementById(obj), mapOptions);

	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');

	infowindow = new google.maps.InfoWindow({
		content: contentString
	});      

	marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		icon: image
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
}