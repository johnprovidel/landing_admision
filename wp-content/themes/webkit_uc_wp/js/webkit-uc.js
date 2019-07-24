$(document).ready(function(){

  /* Cambio de estilo de header al hacer scroll */
  $(window).scroll(function(){
    if($(window).scrollTop() > 360 && $(window).width() > 992){
      $('nav#menu--ppal--1').stop().animate({top:'6px'},100);
    } else {
      $('nav#menu--ppal--1').stop().animate({top:'50px'},100);
    }
  }); // end cambio estilo header

  /* Menú principal Nº2 fijo al hacer scroll (debe estar activo el header fixed)*/
  $(window).scroll(function(){
    if($(window).scrollTop() > 360){
      $('#header__menu--ppal--2').stop().addClass("menu--ppal--2--position");
    } else {
      $('#header__menu--ppal--2').stop().removeClass("menu--ppal--2--position");
    }
  }); // end menú 2 fijo (fixes) al hacer scroll

  /* Menú principal desplegable (móvil) */
  $('#ic-nav').click(function(event) {
    $('nav#menu--ppal--mobile ul').animate({right: '0'},400, 'jswing');
    $("body").css("overflow", "hidden");
    $('#close-menu__mobile').show();
    $('nav .btn').removeClass('btn-warning');
    event.preventDefault();
  }); // end nav desplegable

  /* Cerrar menú principal desplegable (móvil) */
  $('nav#menu--ppal--mobile').on("click", "#close-menu__mobile", function() {
    $('nav#menu--ppal--mobile ul').animate({right: '-260px'},400, 'jswing');
    $("body").css("overflow", "visible");
    $(this).fadeOut();
  }); // end nav desplegable

  /* Menú UC con target _blank */
  $('#menu--uc a').attr("target", "_blank");

  /* Sub menús del header con indicador */
  $('header ul:first-child > li').has("ul").css("padding-right", "10px").append('<span class="arrow"></span>');

  /* Sub menú UC desplegable */
  $('#menu--uc ul:first-child > li').has("ul").hover(function() {
    $('> ul', this).stop().slideToggle(300, 'easeInCirc');
  }); // end sub-menu uc desplegable

  /* Sub menú principal desplegable */
  $('header nav:not(#menu--uc) ul:first-child > li').has("ul").hover(function() {
    if (window.innerWidth > 991) {
      $('> ul', this).stop().slideToggle(300, 'easeInCirc');
    } else {
      event.preventDefault();
    }
  }); // end sub-menu uc desplegable

  $('nav:not(#menu--uc) ul:first-child > li').has("ul").on('click', function() {
    if (window.innerWidth > 991) {
      event.preventDefault();
    } else {
      $('> ul', this).stop().toggle();
    }
  }); // end sub-menu uc desplegable

  /* Segundo sub menu del header desplegable */
  $('header ul:first-child > li ul > li').has("ul").append('<span class="subarrow"></span>').hover(function() {
    $('> ul', this).stop().slideToggle(10);
  }); // end sub-sub-menu uc desplegable

  /* Menús del header desplegables al agrandar pantalla */
  $(window).resize(function() {
    if (window.innerWidth >= 992) {
      $('nav ul:not(nav ul ul)').fadeIn("fast");
      $('header nav ul ul').hide();
      $("body").css("overflow", "visible");
    }
    else {
      $('header nav ul').hide();
    };
  }); // end nav visibe al agrandar pantalla

  /* Desplazamiento de pantalla al hacer click enlace a ancla  */
  $('nav a[href|="#"], header a[href|="#"], .btn-scroll[href|="#"]').on('click',function(){
    var strAncla=$(this).attr('href');
    var margenTop;
    if ($(window).width() > 768) {
      margenTop = 0;
    } else {
      margenTop = 40;
      $('nav#menu--ppal--1 ul, nav#menu--ppal--2 ul').slideUp();
    };
    $('body,html').stop(true,true).animate({
      scrollTop: $(strAncla).offset().top - margenTop}
      ,1000);
      return false;
  }); // end on click

  $('#myButton').on('click', function () {
    if($('#alertMessage').css('display') == 'none'){
       $('#alertMessage').show('slow');
    } else {
       $('#alertMessage').hide('slow');
    }
  });
  /* Menú local fade en el lado derecho */
  $('#menu--local').prepend('<span class="menu--local__fade"></span>');
}); // end ready
