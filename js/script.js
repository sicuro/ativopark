

(function($){
  "use strict";
  $('.next').click(function(){ $('.carousel').carousel('next');return false; });
  $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
})
(jQuery);

/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

$(function() {
    //caches a jQuery object containing the header element
    var header = $("header");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 20) {
            header.removeClass('bg-header-clear').addClass("bg-header");
        } else {
            header.removeClass("bg-header").addClass('bg-header-clear');
        }
    });
});

$(".servicos-home").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".servicos").offset().top+40
    }, 1000);
});
$(".quemsomos-home").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".quem-somos").offset().top-70
    }, 1000);
});
$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
});
