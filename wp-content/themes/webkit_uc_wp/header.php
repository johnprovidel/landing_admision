<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KVS9SM');</script>
	<!-- End Google Tag Manager -->
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Hace al sitio responsive con bootstrap-->
	<title>
	    <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
	    <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
	    <?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
	    <?php if ( is_page() ) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
	    <?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
	    <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
	    <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
	    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
	</title>
  <meta name="keywords" content="admisión, UC, Universidad Católica, Pontificia Universidad Católica de Chile, proceso, 2017, matrícula, postulación">
  <link rel="author" href="mailto:afigueroa4@uc.cl"/>
	<?php wp_head(); ?>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="screen" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css" />
	<link rel="stylesheet" media="screen" href="<?php bloginfo('template_url');?>/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/webkit-uc.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/custom.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body id="top">
<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVS9SM" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
<!-- End Google Tag Manager (noscript) -->

<nav id="menu--ppal--mobile" class="hidden-md hidden-lg">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-ppal',
			 ) );
		?>
		<div id="close-menu__mobile"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
</nav>
<div class="header--submarca">
    <div class="container-header">
      <div class="row">
        <div class="col-sm-12">
          <a href="http://www.uc.cl" target="_blank" title="Pontificia Universidad Católica de Chile" class="logo--submarca__uc hidden-lg hidden-md">
            <div class="logo--submarca__uc hidden-lg hidden-md"></div>
          </a>
        </div>
      </div>
    </div>
  </div> <!-- end of header sub marca 3 -->
  <header >
    <section id="header__top">
      <div class="container-header">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-3">
                <div class="row">
                  <a href="http://www.uc.cl" target="_blank" title="Pontificia Universidad Católica de Chile" onclick="dataLayer.push({'event':'EventUC','eventCategory':'Admisión-Header','eventAction':'Click','eventLabel':'Logo-Home-UC'});">
                    <div class="col-sm-12">
                      <div class="logo"></div>
                    </div>
                  </a>
                </div>
              </div>
            	<div class="col-xs-12 col-sm-9 pull-right">
                <nav id="menu--uc">
										<?php
											wp_nav_menu( array(
												'theme_location' => 'menu-uc',
											 ) );
										?>
                </nav>
                <nav id="menu--ppal--1">
										<?php
											wp_nav_menu( array(
												'theme_location' => 'menu-ppal',
											 ) );
										?>
                </nav>
                <div id="ic-nav" class="visible-sm visible-xs">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="header__top__fondo"></div>
		<?php query_posts('category_name=destacado&posts_per_page=1' );
		while ( have_posts() ) : the_post(); ?>
			<?php
				global $post;
				$imagen = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
				$ruta_imagen = $imagen[0];
			?>
	    <section class="header__featured " style="background-image:url(<?php echo $ruta_imagens; ?>); ">

						<nav id="menu--aux">
							<ul>
								<li>
									<a href="http://admisionyregistros.uc.cl/alumnos" target="_blank" >
										Registros académicos
									</a>
								</li>
								<li>
									<a href="http://admisionyregistros.uc.cl/" target="_blank" >
										Postgrado y otras admisiones
									</a>
								</li>
							</ul>
						</nav>

						<div class="flex-container flex-container--nowrap">

									<div class="flex-box-2-3">
										<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
									</div>

									<div class="flex-box-1-3">

											<div class="flex-container flex-container--column flex-container--nowrap container-center">
													<div class="flex-box">
															<h1 class="sr-only">Admisión 2020</h1>
															<img class="logo-header" src="<?php bloginfo('template_url'); ?>/img/logo_admision_2020.jpg" alt="¡Atención Futuro Novato!"/>
													</div>
													<div class="flex-box">
															<?php the_content(); ?>
															<a href="<?php the_field('btn-1-enlace'); ?>" class="btn btn-warning btn-lg mt-2" role="button" target="_blank" >
																<?php the_field('btn-1-texto'); ?>   </span>
															</a>
													</div>
											</div>
								</div>
						</div>

	    </section>
		<?php endwhile; wp_reset_query(); ?>
    <section id="header__menu--ppal--2" class="hidden-xs hidden-sm">
      <div class="container-header">
        <div class="row">
            <nav id="menu--ppal--2">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-ppal',
									 ) );
								?>
            </nav>
        </div>
      </div>
    </section>
  </header> <!-- end of Header -->
