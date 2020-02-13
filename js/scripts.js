
// Boton de subir
$(document).ready(function () {

    $('.subir').click(function () {
        $('body, html').animate({
            scrollTop: '0px'
        }, 500);
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.subir').fadeIn(500);

        } else {
            $('.subir').fadeOut(500);

        }
    });

    if (pagina == 'inicio') {

        var randomSlide = Math.floor(Math.random() * 2);
        var alto_imagen = $('.carousel-imagen-slide-0').height() - 70;

        $('.carousel-inner').height(alto_imagen);

        jQuery(document).ready(function ($) {
            $('#slide_inicio').carousel(randomSlide);
            $('#slide_inicio').carousel('next');
        })

        $('#slide_inicio').carousel({
            interval: 15000
        })


        // owl segun cantidad de inmuebles 
        if (cantidad_inmuebles == 1) {
            $('#owl-propiedades').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        } else if (cantidad_inmuebles == 2) {
            $('#owl-propiedades').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 2000,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                }
            })
        } else {
            $('#owl-propiedades').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 2000,
                navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        }
    }

    //Slider Aliados
    $('#aliados_slide').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        pagination: false,
        // autoplay: 1000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });


});


$(document).ready(function(){
	var altura = $('.menu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.menu').addClass('menu-fixed');
		} else {
			$('.menu').removeClass('menu-fixed');
		}
	});

});

