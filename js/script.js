$('.owl-carousel').owlCarousel({

    margin:10,
    nav:false,
    loop:false,
    autoplay:true,    
    dots:true,
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

$('.owl-carousel-two').owlCarousel({
    margin:10,
    nav:false,
	loop:true,
	autoplay:true,
    dots:true,
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

// Função para adicionar poster/capa ao iframe (video.php)
$(function() { 
	var videos  = $(".video");

		videos.on("click", function(){
			var elm = $(this),
				conts   = elm.contents(),
				le      = conts.length,
				ifr     = null;

			for(var i = 0; i<le; i++){
			  if(conts[i].nodeType == 8) ifr = conts[i].textContent;
			}

			elm.addClass("player").html(ifr);
			elm.off("click");
		});
});

// Função para fancybox nas imagens
$(document).ready(function() {
    $(".fancybox-thumb").fancybox({
        prevEffect  : 'none',
        nextEffect  : 'none',
        helpers : {
            title   : {
                type: 'outside'
            },
            thumbs  : {
                width   : 200,
                height  : 200
            }
        }
    });

    // Adiciona a calsse img-responsive para as imagens da galeria-box
    $('.galerias-box img').addClass('img-responsive');

    //
    $('.navbar-nav a').addClass('scroll');

    // var hashTagActive = "";
    // $(".scroll").click(function (event) {
    //     if(hashTagActive != this.hash) { //this will prevent if the user click several times the same link to freeze the scroll.
    //         event.preventDefault();
    //         //calculate destination place
    //         var dest = 0;
    //         if ($(this.hash).offset().top > $(document).height() - $(window).height()){
    //             dest = $(document).height() - $(window).height();
    //         } else {
    //             dest = $(this.hash).offset().top - 100;
    //         }
    //         //go to destination
    //         $('html,body').animate({
    //             scrollTop: dest
    //         }, 2000, 'swing');
    //         hashTagActive = this.hash;
    //     }
    // });
    $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 100
        }, 1000);
        return false;
      }
    }
  });
});
