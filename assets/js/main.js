$(function() {

    var posicionScroll = $(window).scrollTop();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > posicionScroll) {
            // console.log('scrollDown');
            $('#menu img').css({
                'height': '30px',
                'transition': '.3s ease all'});
        } else {
            //  console.log('scrollUp')
            $('#menu img').css({
                'height': '35px',
                'transition': '.3s ease all'});
        }
        posicionScroll = scroll;
        // console.log(posicionScroll)
    });

    var posicion = $('#plantas').offset();
    // console.log(posicion);

    // FORMULARIO CONTACTO
    $('.tituloContacto').on('click', function(){
        $('#inputsFormulario').toggleClass('esconde-formulario')
    });

    // VALIDACIÓN FORMULARIO
    $('.inputsFormularios input').each(function(){

    });

    // VALIDADOR RUT

	$('.input_rut').rut({
		formatOn: 'keyup',
		minimumLength: 8, // validar largo mínimo; default: 2
		validateOn: 'keyup' // si no se quiere validar, pasar null
    }).addClass('col-12');

    // VALIDADOR TELÉFONO

    $(".telefono").keypress(function (e) {
    //if the letter is not digit then display error and don't type anything
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $(".telfono").val("Sólo Números").show().fadeOut("slow");
                return false;
        }
    });


    $('.owl-galeria').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        animateOut: 'fadeOut',
        autoplayHoverPause:false,
        margin:0,
        nav:false,
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
    });
    
    $('.owl-mobile').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false,
        margin:0,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    $('.owl-plantas').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        margin:0,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    $('.owl-disfruta').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false,
        margin:0,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    $('#inputsFormulario :input').on('change', function(){
        if( ($('#Nombre').val() === '' ) || ($('#Apellido').val() === '') || ($('#Rut').val() === '') || ($('#Telefono').val() === '') || ($('#Email').val() === '') ){
            console.log('campos vacíos')
        } else {
            $('#inputsFormulario :button').removeClass('btn-disabled')
        }
    });

});