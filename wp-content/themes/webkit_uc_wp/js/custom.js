$(document).ready(function(){

  /* Comportamiento de botones del header (Scroll o _blank) */
  $('#llamado .btn[href^="http"]').attr('target', '_blank');
  $('#menu--ppal--mobile a[href^="#"], #menu--ppal--2 a[href^="#"], #llamado .btn[href^="#"]').addClass('btn-scroll');

  /* Botones con scroll */
  $('.btn-scroll').on('click',function(){
    var strAncla=$(this).attr('href');
    var margenTop;
    if ($(window).width() > 768) {
      margenTop = 80;
    } else {
      margenTop = 80;
      $('nav#menu--ppal--1 ul, nav#menu--ppal--2 ul').slideUp();
    };
    $('body,html').stop(true,true).animate({
      scrollTop: $(strAncla).offset().top - margenTop}
      ,1000);
      return false;
  }); // end on click

  /* Cerrar menú principal desplegable (móvil) */
  $('nav#menu--ppal--mobile li a').on("click", function() {
    $("#close-menu__mobile").fadeOut();
    $('nav#menu--ppal--mobile ul').animate({right: '-260px'},400, 'jswing');
    $("body").css("overflow", "visible");
  }); // end nav desplegable

  /* Menús del header desplegables al agrandar pantalla */
  $(window).resize(function() {
    if (window.innerWidth >= 992) {
      $('nav ul:not(nav ul ul)').fadeIn("fast");
      $('header nav ul ul').hide();
      $("body").css("overflow", "visible");
    }
    else {
      $('.logo').show();
    };
  }); // end nav visibe al agrandar pantalla


  // SLIDER //

  var cantidad = $('.slider__content li.slider__box').length; //Cantidad de cajas del slider
  var anchoBox = $('.slider__box').width(); //Ancho de cada caja
  var anchoBoxMargin = anchoBox + 20; // Ancho de la caja más el margen
  var anchoTotal = anchoBoxMargin * cantidad; //Ancho total del slider (Nº de cajas por ancho de la caja)

  //Ancho del contenedor;
  $('.slider__content').css('width', anchoTotal);

  // Control Next
  $('.control__next').stop().on('click keypress', function(event) {
    $(this).css('pointer-events','none'); // Al hace clic en el enlace este se deshabilita
    var multiplo; // Cantidad de cajas visibles al mismo tiempo, para definir cuanto avanza el slider
    var multiploStop; // Variable para evitar que avance el slider cuando no hay más cajas
    if (window.innerWidth <= 768) {
      multiplo = 1;
      multiploStop = 1.5;
    } else {
      if (window.innerWidth <= 1200) {
        multiplo = 3;
        multiploStop = 3.5;
      } else {
        multiplo = 4;
        multiploStop = 4.5;
      }
    }

    var anchoBox = $('.slider__box').width(); //Ancho de cada caja
    var anchoBoxMargin = anchoBox + 20; // Ancho de la caja más el margen
    var anchoBoxTotal = anchoBoxMargin * multiplo; // Ancho de una caja (más el margen) por la cantidad de cajas visibles al mismo tiempo
    var positionActual = $('.slider__content').position(); // Posición actual del contenedor del slider
    var positionNueva = positionActual.left - anchoBoxTotal; // Nueva posición = Posición actual a la izquierda menos la cantidad de cajas visibles
    var anchoBoxStop = anchoBox * multiploStop; // Variable que determina límite
    var anchoTotalLimite = anchoTotal -anchoBoxStop; // Variable que determina el límte al container total para seguir avanzando
    //Funcionamiento del slider
    if (positionActual.left > -anchoTotalLimite) {
      $('.slider__content').stop().animate({left: positionNueva - 10}, 400, 'easeInOutCirc', function() {
          $('.control__next, .control__prev').css('pointer-events','visible');
      }); // Slider para avanzar
    }
    else {
      $('.slider__content').stop(); // No ejecutar el slider cuando llega al tope
      $(this).addClass('slider__control--disabled'); // Deshabilita el slider cuando llega al tope del inicio
    }
    //Habilitar o deshabilitar el slider Prev
    if (positionNueva > 11) {
      $('.control__prev').addClass('slider__control--disabled'); // Deshabilita el slider prev
    } else {
      $('.control__prev').removeClass('slider__control--disabled'); // Habilita el slider prev
    }
    //Habilitar o deshabilitar el slider Next
    if (positionNueva < -anchoTotalLimite) {
      $(this).addClass('slider__control--disabled');
    } else {
      $(this).removeClass('slider__control--disabled');
    }
    event.preventDefault();
  });
  // Control Prev
  $('.control__prev').stop().on('click', function(event) {
    $(this).css('pointer-events','none'); // Al hace clic en el enlace este se deshabilita
    var multiplo; // Cantidad de cajas visibles al mismo tiempo, para definir cuanto avanza el slider
    var multiploStop; // Variable para evitar que avance el slider cuando no hay más cajas
    if (window.innerWidth <= 768) {
      multiplo = 1;
      multiploStop = 1.5;
    } else {
      if (window.innerWidth <= 1200) {
        multiplo = 3;
        multiploStop = 3.5;
      } else {
        multiplo = 4;
        multiploStop = 4.5;
      }
    }
    var anchoBox = $('.slider__box').width(); //Ancho de cada caja
    var anchoBoxMargin = anchoBox + 20; // Ancho de la caja más el margen
    var anchoBoxTotal = anchoBoxMargin * multiplo; // Ancho de una caja (más el margen) por la cantidad de cajas visibles al mismo tiempo
    var positionActual = $('.slider__content').position(); // Posición actual del contenedor del slider
    var positionNueva = positionActual.left + anchoBoxTotal; // Nueva posición = Posición actual a la izquierda menos la cantidad de cajas visibles
    //Funcionamiento slider
    if (positionActual.left < -anchoBox) {
      $('.slider__content').stop().animate({left: positionNueva - 10}, 400, 'easeInOutCirc', function() {
          $('.control__next, .control__prev').css('pointer-events','visible');
      }); // Slider para avanzar
    }
    else {
      $('.slider__content').stop(); // No ejecutar el slider cuando llega al tope del inicio
      $(this).addClass('slider__control--disabled'); // Deshabilita el slider cuando llega al tope del inicio
    }
    //Habilitar o deshabilitar el slider Prev
    if (positionNueva > 0) {
      $(this).addClass('slider__control--disabled');
    } else {
      $(this).removeClass('slider__control--disabled');
    }
    var anchoBoxStop = anchoBox * multiploStop; // Variable que determina límite
    var anchoTotalLimite = anchoTotal -anchoBoxStop; // Variable que determina el límte al container total para seguir avanzando
    //Habilitar o deshabilitar el slider Next
    if (positionNueva < -anchoTotalLimite) {
      $('.control__next').addClass('slider__control--disabled');
    } else {
      $('.control__next').removeClass('slider__control--disabled');
    }
    event.preventDefault();
  });
  // Volver a posición 0 al redimensionar la pantalla
  $(window).resize(function() {
    $('.slider__content').stop().animate({left:0}, 50);
    $('.control__prev').addClass('slider__control--disabled');
    $('.control__next').removeClass('slider__control--disabled');
    $('.control__next, .control__prev').css('pointer-events','visible');
    var cantidad = $('.slider__content li.slider__box').length; //Cantidad de cajas del slider
    var anchoBox = $('.slider__box').width(); //Ancho de cada caja
    var anchoBoxMargin = anchoBox + 20; // Ancho de la caja más el margen
    var anchoTotal = anchoBoxMargin * cantidad; //Ancho total del slider (Nº de cajas por ancho de la caja)
    $('.slider__content').css('width', anchoTotal);
  });

  // Control 'prev' deshabilitado al principio
  $('.control__prev').addClass('slider__control--disabled');


  if($('.slider__content li').length < 5 && window.innerWidth > 991) {
    $('.control__next').addClass('slider__control--disabled');
  }
  if($('.slider__content li').length < 4 && window.innerWidth > 768) {
    $('.control__next').addClass('slider__control--disabled');
  }
  if($('.slider__content li').length < 2 && window.innerWidth < 768) {
    $('.control__next').addClass('slider__control--disabled');
  }

  // Calendario: cortar el primer mes cuando la fecha es un plazo
  $('.slider__box .card__image h4:contains("-")').each(function() {
    var corte = $(this).html();
    var mes1 = corte.slice(4,6);
    var mes2 = corte.slice(13,15);
    var corte1 = corte.slice(0,3);
    var corte2 = corte.slice(7,15);
    if(mes1 == mes2) {
      $(this).html(corte1 + corte2);
    }
  })
  //Slider: Rango de fechas con un padding menor
  $('.slider__box .card__image h4:contains("-")').addClass('rango');

  //if (window.innerWidth < 768) {
    $('.post__content__cols-5 ul li strong').on('click', function() {
      $(this).toggleClass('active');
      $(this).parents('li').siblings().children('ul').slideUp(200);
      $(this).siblings('ul').stop().slideToggle(200);
    });
  //};
  $(window).resize(function() {
    if (window.innerWidth > 768) {
      $('.post__content__cols-5 ul ul').show();
    }
    else {
      $('.post__content__cols-5 ul ul').hide();
    };
  });
  //$('#menu-menu-ppal-2 li:last-child').addClass('hidden-md hidden-lg');
  //var textoAlert = $('#menu-menu-ppal-2 li a').html();
  //alert(textoAlert);

  /*$(window).resize(function() {
    if (window.innerWidth < 768) {
      $('.post__content__cols-5 ul ul').slideUp();
      $('.post__content__cols-5 ul li strong').on('click', function() {
        $(this).siblings('ul').stop().slideToggle(200);
      });
    } else {
      $('.post__content__cols-5 ul ul').slideDown();
    }
  });
  /* Mostrar u ocultar los desplegables del footer al cambiar el tamaño de la pantalla */

});
