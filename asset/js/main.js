//FLEXSLIDER
$( document ).ready(function() {
	$(".flexslider")
		.flexslider({
			slideshowSpeed: 15000,
			animation: "slide",
			smoothHeight: true,
			controlNav: false,
			directionNav: false
		});

	$(".flexslider.slider")
		.flexslider({
			animation: "slide",
			smoothHeight: true,
			directionNav: true,
			controlNav: true
		});
